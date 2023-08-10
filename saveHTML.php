<?php  
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $content = $_POST["content"];

    $fileName = "team_member_" . time() . ".html"; // You can adjust the file name as needed
    $filePath = "teamProfiles/" . $fileName; // Adjust the path as needed

    $file = fopen($filePath, "w");
    fwrite($file, $content);
    fclose($file);

    echo "File saved successfully!";
}
?>
