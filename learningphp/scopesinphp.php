<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scopes</title>
</head>
<body>
    <h1>Scopes</h1>

    <?php
    // global scope - means that we can access the variable from anywhere the code
    $name1 = "Kim";
    $name3 = "Douglas";
    echo $name1;
    //local scope - for example a variable created in a function\
    function myFunction($name2 = "Kimani") {
        
        return $name2;
        //you can get a global variable here in 2 ways
        //global $name1;
        //return $name1;
        // or
        //return $GLOBALS["name3"];
    }
    echo myFunction()."<br>";
    //class scope - 
    class myClass
    {
        function myFunction($name2 = "") {
        }
    }
    //static scope - 
    function mySecondFunction() {
        static $staticvariable = 0;
        $staticvariable++;
        return $staticvariable;
    }
    echo mySecondFunction();
    echo mySecondFunction();
    echo mySecondFunction()."<br>";
    // case sensitive constants
    define("namesake","My name is Wycliff KImani");
    echo namesake."<br>";

    const MYCAR = "Fortuner";
    echo MYCAR."<br>";
    MYCAR == "Subaru";
    echo MYCAR."<br>";//the variable value cannot be changed

    


    ?>
</body>
</html>