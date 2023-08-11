<?php
    include 'konekcija.php';
    if(isset($_GET['id'])){
        $member_id = $_GET['id'];
        $sql_select_image = "SELECT `image_path` FROM `teammember` WHERE `ID`='$member_id'";
        $result_select_image = mysqli_query($conn, $sql_select_image);
        if ($result_select_image && mysqli_num_rows($result_select_image) > 0) {
            $row = mysqli_fetch_assoc($result_select_image);
            $image_path = $row['image_path'];
            $sql_delete_record = "DELETE FROM `teammember` WHERE `ID`='$member_id'";
            $result_delete_record = mysqli_query($conn, $sql_delete_record);

            if($result_delete_record){
                if (file_exists($image_path) && unlink($image_path)) {
                    header("Location: ../?page=pages/en/team");
                    exit();
                } else {
                    echo "Error deleting image or image not found.";
                }
            } else {
                echo "Error deleting record.";
            }
        } else {
            echo "Image path not found in the database.";
        }
    }
    mysqli_close($conn);
?>
