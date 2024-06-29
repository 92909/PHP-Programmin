<!DOCTYPE html>
<html lang="en">
<head>
   <title>creating forms</title>
    <link rel="stylesheet" href="forms.css">
</head>
<body>
    <h1 class= "firstHeading">CREATING FORMS</h1>

    <main class= "firstClass">
        <form action="formhandler.php" method="post">
            <label for="firstName">First name : </label>
            <input id="firstName" type="text" name= "firstName" placeholder="Enter first name"> <br> <br>
    
            <label for="secName">Second Name : </label>
            <input id="secName" type="text" name= "secName" placeholder="Enter second name"><br><br>
    
            <label for="userAge">Your Age : </label>
            <input id="UserAge" type="text" name= "userAge" placeholder="Enter your age"><br><br>
        
            <label for="gender">Gender : </label>
            <select name="gender" id="gender">
                <option value="notToSay">Prefer not to say</option>
                <option value="Gender">Male</option>
                <option value="Gender">Female</option>
                
            </select>   <br><br><br>
            <button class= "firstButton" type = "submit">SUBMIT</button>

        </form>
    </main>
</body>
</html>