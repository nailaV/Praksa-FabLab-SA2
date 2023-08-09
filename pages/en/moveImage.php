<?php
$base64Image = $_POST['base64Image'];
$imagePath = $_POST['imagePath'];


$base64Image = str_replace('data:image/jpeg;base64,', '', $base64Image);
$base64Image = str_replace(' ', '+', $base64Image);

$imageData = base64_decode($base64Image);

file_put_contents($imagePath, $imageData);



echo "Image moved successfully";
?>
