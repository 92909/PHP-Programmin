<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file handing</title>
</head>
<body>
    <?php
    echo readfile("bytheway.txt");
    ?>
  <br>
    <?php
    $my_file = fopen("bytheway.txt", "r") or die("Unable to open file") ;
    echo fread($my_file, filesize("bytheway.txt"));
    fclose($my_file);
    ?>
    <br>
    <?php
    $my_file = fopen("bytheway.txt", "r") or die("Unable to open file") ;
    echo fgets($my_file). "<br>"; // OUTPUTS THE FIRST LINE OF BYTHEWAY.TXT
    echo fgets($my_file);
    
    echo "<br>";
    /* // This function feof() checks whether all the lines have been got by the get() function
    if (feof($my_file)) {
        echo "Heloooooo";
    } 
    else {
        echo "Not hereeeee";
    } 
    */
    // you can also use the loop below to read all the elements / contents of bytheway.txt
    while (!feof($my_file)) {
        echo fgets($my_file);
        echo "<br>"; 
    }
    fclose($my_file);
    // the fwrite() function is used to write into the file.
    $my_new_file = fopen("secondtext.txt", "w") or die("Unable to create file");
    $name1 = "Jackson";
    fwrite($my_new_file, $name1);

    $name2 = "Kimani"; 
    fwrite($my_new_file, $name2);
    fclose($my_new_file);
    echo "<br>";
    echo readfile("secondtext.txt");

    $newfile = fopen("secondtext.txt", "w");
    $name1 = "Douglas Mwangi \n";
    fwrite($newfile, $name1);
    $name2 = "Wycliff Kimani \n";
    fwrite($newfile, $name2);
    fclose($newfile);

    $new_new_file = fopen("secondtext.txt", "a") or die("Unable to open file");
    $name3 = "Henry \n";
    fwrite($new_new_file, $name3);
    $name4 = "Kiplagat \n";
    fwrite($new_new_file, $name4);
    fclose($new_new_file);

    ?>

</body>
</html>