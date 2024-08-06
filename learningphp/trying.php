<!DOCTYPE html>
<html lang="en">
<head>
    <title>trying sth</title>

</head>
<body>
    <h1>Kim</h1>
    <script>alert("Welcome to PHP functions")</script>
    <?php
    
    echo '<script>alert("Welcome to Functions in PHP")</script>';
    $name1 = "Wycliff";
    $name3 = "Kimutais";
    function myName($name1 = "Jackson")
    {
        global $name2;
        $name2 = "Kimani";
        $GLOBALS ['name3'] = "Karanja";
        echo $name1 . "<br>";
    }
    function kirinyaga() 
    { 
        //echo '<script>alert("Welcome to Functions in PHP")</script>'; // creates an alert that welcomes you to the page once you load it
    }
    kirinyaga();
    myName();
    echo $name1 . "<br>";
    echo $name3 . "<br>";
    echo ("Hello .$name3. Kimani" . "<br>");
    print ("Hello $name3" . "<br>");
    ?>
</body>
</html>