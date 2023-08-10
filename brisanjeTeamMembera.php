<?php
    include 'konekcija.php';
    if(isset($_GET['id'])){
        $member_id = $_GET['id'];
        $sql = "DELETE FROM `teammember` WHERE `ID`='$member_id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location: ../?page=pages/en/team");
            exit();
        }
        else{
            echo "Insert error - " ;
        }
    }
    mysqli_close($conn);
?>