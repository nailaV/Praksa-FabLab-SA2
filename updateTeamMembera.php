<?php
    include 'konekcija.php';
if(isset($_POST['submit']))
{
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $hyperlink=$_POST['hyperlink'];
    $qoute=$_POST['qoute'];
    $id=$_POST['idMembera'];

    $sql="UPDATE `teammember` 
    SET 
    `first_name`='$firstName',`last_name`='$lastName', `description`='$qoute', `email`='$email',`linkedin_url`='$hyperlink'
    WHERE `id`='$id'";
    $result=mysqli_query($conn, $sql);

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