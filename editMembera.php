<?php
    include 'konekcija.php';
    if(isset($_GET['id'])){
        $member_id = $_GET['id'];
        $sql = "SELECT * FROM `teammember` WHERE `ID`='$member_id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            
        }
        else{
            echo "Insert error - " ;
        }
    }
    mysqli_close($conn);
?>

