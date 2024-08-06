<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms</title>
    <link rel="stylesheet" href="formshandling.css">
    <link rel="icon" href="../signupupforms/download.jpeg" type="image/x-icon">
</head>
<body>
    <section class="firstSection">
        <form action="forms.php" method="post">
            Name: <input required type="text" name="username" placeholder="Your name"> <br><br>
            Email: <input type="text" name="email" placeholder="email"> <br><br>
            Comment: <textarea name="comment" id="textArea"></textarea><br><br><br>
            Gender: 
            <select name="gender" id="gender">
                <option value="notToSay">Prefer not to say</option>
                <option value="Gender">Male</option>
                <option value="Gender">Female</option>
                
            </select>
            <br><br><br><br>
            <button>SUBMIT</button>
        </form>
    </section>
    <section class="secondSection">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $comments = $_POST["comment"];
        $gender = $_POST["gender"];

        echo "<h1> Your Input is : </h1> <br>";
        echo "Name : $username <br>";
        echo "Email : $email";
        echo "<br>";
        echo "Comments : $comments";
        echo "<br>";
        echo "Gender : $gender";
        echo "<br>";
        
        echo "<br>";
        
}

    
    if (htmlspecialchars(isset($gender))) {
        echo "The gender slot is filled";

    }
    else {
        echo "The gender slot is empty";
    }

    ?>

<?php
/*
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");*/
date_default_timezone_set("Africa/Nairobi");
echo "<br> The time is ". date("Y-m-d H:i:sa". "<br> ");


?> 
    </section>
</body>
</html>