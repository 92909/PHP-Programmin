<?php

$uploadDir = "phpfileupload/";
$uploadFile = $uploadDir.basename($_FILES["filetoUpload"] ["name"]);
$uploadOK = 1;
$imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));

if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["filetoUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . "\n";
        $uploadOK = 1;
        
        
    } else {
        echo "File is not an image! \n";
        $uploadOK = 0;
    }

    if (file_exists($uploadFile)) {
        echo "File already exists";
        $uploadOK = 0;
    } else {
        $uploadOK = 1;
    }
    
}
echo "<br>";
echo "\n <button onclick=\"window.location.href='index.php'\">Home</button>";
