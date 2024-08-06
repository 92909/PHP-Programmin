<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="../signupupforms/download.jpeg" type="image/x-icon">
    <style>
        body {
            text-align: center;

        }
        .firstSection {
            text-align: center;
            background-color: aliceblue;
            width: 400px;
            position: relative;
            height: 300px;
            left: 400px;
            background-image: url("data:image/jpeg;base64,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");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .secondSection {
            background-image: url("data:image/jpeg;base64,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");
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
            background-color: aliceblue;
            width: 400px;
            position: relative;
            height: 300px;
            left: 400px;
        }
        .forthClass {
            position: relative;
            top: 100px;
            border-top: 50px;
        }
        .thirdSection {
            text-align: center;
            background-color: aliceblue;
            width: 400px;
            position: relative;
            height: 300px;
            left: 400px;
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDfVae_jt-StwXnW8eNzDRnjpACJLzg5HICH9oL-SBDnRURCC-KcbBGkvBoQ&s");
        }
        .thirdH {
            color: blanchedalmond;
        }
        .SecondH {
            color: greenyellow;
        }
        .forthSection {
            text-align: center;
            background-color: aliceblue;
            width: 400px;
            position: relative;
            height: 300px;
            left: 400px;
            background-image: url("data:image/jpeg;base64,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");
        }
    </style>
</head>
<body>
    <section class="firstSection">
    <h3>Sign Up form</h3> <br><br>
    <form action="../includes/formhandlers.inc.php" method="post">
        <input type="text" name="username" placeholder="username"> <br><br>
        <input type="password" name="user_password" placeholder="Password"><br><br>
        <input type="text" name="email" placeholder="email"><br><br>
        <button>Sign Up</button><br><br>
    </form>
    </section>

    <section class="secondSection">
        <h3 class="SecondH">Update Account</h3><br><br>
        <form action="includes/updatedatabase.inc.php" method="post">
            <input type="text" name="username" placeholder="username"><br><br>
            <input type="password" name="user_password" placeholder="password"><br><br>
            <input type="text" name="email" placeholder="email"> <br><br>
            <button>Update</button><br><br><br>
        </form>
    </section>
    
    <section class="thirdSection">
        <h3 class="thirdH">Delete Account</h3><br><br>
        <form action="includes/deletedatabase.inc.php" method="post">
            <input type="text" name="username" placeholder="username"><br><br>
            <input type="password" name="user_password" placeholder="password"><br><br>
            <button>Delete</button><br><br><br>
        </form><br><br><br>
    </section>

    <section class="forthSection">
        <form class="forthClass" action="../databases1/search.php" method="post">
            <label for="search">Search for User: </label><br><br>
            <input id="search" type="text" name="usersearch" placeholder="search..."><br><br>
            <button>Search</button>
        </form>
    </section>
</body>
</html>