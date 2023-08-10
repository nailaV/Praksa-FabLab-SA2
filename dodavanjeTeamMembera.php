<?php
    include 'konekcija.php';
    if(isset($_POST['submit'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $title = $_POST['title'];
        $description = $_POST['qoute'];
        $mail = $_POST['email'];
        $linkedURL = $_POST['hyperlink'];
        $lokacija="slike/team/";
        $imageName=basename($_FILES["image"]["name"]);
        $targetPath=$lokacija . $imageName;
        
         
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetPath)){
            $sql = "INSERT INTO `teammember` (`first_name`,`last_name`,`image_path`,`description`,`email`,`linkedin_url`,`title`) 
            VALUES('$firstName','$lastName', '$targetPath', '$description','$mail','$linkedURL','$title')";
            $result = mysqli_query($conn,$sql);
            if($result){
                header("Location: ../?page=pages/en/team");
                exit();
            }
            else{
                echo "Insert error - " ;
            }
        }
        else
            echo("Fail uploading image.");
        mysqli_close($conn);
    }
?>
