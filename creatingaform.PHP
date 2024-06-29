
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="forms.css">
    <link rel="stylesheet" href="forms.html">
    <style>
        body{
            background-image: url("c:\Users\HP\Documents\1. programming\PHP\DeclaringVariables\jja.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            color: aquamarine;
        }
        #firstTextArea{
            color: rgb(20, 223, 68);
        }
        #firstTextArea:hover{
            background-color: black;
            color: rgb(240, 13, 134);
        }
    </style>
</head>
<body>
    <h1>CREATING HTML FILES</h1>
  
    <form action="c:\xampp\htdocs\DeclaringVariables\formshandlers.PHP" method="post">
        <input type="text" name="Email" placeholder="Enter email"> <br>
        <input type="text" name="Email" value="Enter your email">
        <input type="password" name="pwd" placeholder="Enter your password">
        <h3>Your gender : Optional </h3>
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female">  Female
        <input type="radio" name="Gender" value="Other" checked>   Prefer Not to Say <br><br>
        
        <textarea name="message" id="firstTextArea" placeholder="Write us a message"></textarea> <br><br>
        <h4>What is Your Reg Number?</h4>
        <select name="passwords">
            <option value="password1">BSCIT-05-0107/2021</option>
            <option value="password2">BSCIT-05-0005/2021</option>
            <option value="password3">BSCIT-05-0237/2021</option>
            <option value="password4">bscit-05-0007/2021</option>
        </select>



        <input type="submit" name="submit"> <br>
        <button type="submit" name="submit">Submit</button>

    </form>


    <?php
    
    echo "<h1>THIS SHOWS HOW TO CREATE A HTML FORM";
    ?>
</body>
</html>
