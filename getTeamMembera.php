<?php
    include 'konekcija.php';
    if(isset($_GET['id'])){
        $member_id = $_GET['id'];
        $sql = "SELECT * FROM `teammember` WHERE `ID`='$member_id'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $row = $result->fetch_assoc();

            $memberData = array(
                'ID' => $row['id'],
                'firstName' => $row['first_name'],
                'lastName' => $row['last_name'],
                'imagePath' => $row['image_path'],
                'quote' => $row['description'],
                'email' => $row['email'],
                'linkedin' => $row['linkedin_url'],
                'title' => $row['title']
            );

            echo json_encode($memberData);
        }
        else{
            echo "Insert error - ";
        }
    }
    mysqli_close($conn);
?>

