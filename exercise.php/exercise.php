<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up form</title>
    <style>
        body{
            background-image: url("ja.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .firstSection{
            text-align: center;
        }
        .invalid {
            border-color: red;
        }
        .error-message {
            color: red;
            display: none;
        }
    </style>
</head>
<body>
    <section class="firstSection">
    <h1>Welcome to our website</h1>
    <h2>Sign Up / Log In</h2>
    <form id="loginForm">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="emailError" class="error-message">Please enter a valid email address.</span>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="passwordError" class="error-message">Password must be between 6 to 12 characters.</span>
        <br><br>

        <button type="submit">Submit</button>
    </form>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Clear previous errors
            const emailField = document.getElementById('email');
            const passwordField = document.getElementById('password');
            const emailError = document.getElementById('emailError');
            const passwordError = document.getElementById('passwordError');
            emailField.classList.remove('invalid');
            passwordField.classList.remove('invalid');
            emailError.style.display = 'none';
            passwordError.style.display = 'none';

            // Validate email
           
            if (!emailPattern.test(emailValue)) {
                emailField.classList.add('invalid');
                emailError.style.display = 'inline';
                return;
            }

            // Validate password
            const passwordValue = passwordField.value;
            if (passwordValue.length < 6 || passwordValue.length > 12) {
                passwordField.classList.add('invalid');
                passwordError.style.display = 'inline';
                return;
            }

            alert('Form submitted successfully!');
        });
    </script>

    </section>
</body>
</html>
