<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP file upload</title>
    <link rel="stylesheet" href="index.css">

</head>
<body>
    <section class="firstSection">
    <form class="firstForm" action="upload.php" method="post" enctype="multipart/form-data">
        Select the Image to upload: <br><br><br>
        <input type="file" name="filetoUpload" id="filetoUpload"> <br><br><br>
        <input type="submit" value="Upload Image" name="submit"><br><br><br>
    </form>
    </section>
    
</body>
</html>