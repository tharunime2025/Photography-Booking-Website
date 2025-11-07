<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        /* styles.css */
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 300px; /* Adjust the width as needed */
            text-align: center;
        }

        h1 {
            margin: 0 0 20px 0;
            font-size: 24px;
            color: #333;
        }

        form input {
            width: 80%;
            padding: 10px;
            margin: 5px 0; /* Adjust the margin */
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }

        form input[type="submit"] {
            background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
            margin: 20px auto; /* Center the button */
            background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
        }

        form input[type="submit"]:hover {
            background-color: #4CAF50;
  color: white;
        }

        .error {
            color: red;
            font-size: 14px;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        .checkbox-container {
            display: flex;
            justify-content: left; /* Center the checkbox label */
            margin-top: 5px;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
        }

        .checkbox-label input {
            margin-right: 2px;
        }
        a:link {
            color: blue;
        }

        /* visited link */
        a:visited {
            color: rgb(26, 23, 196);
        }

        /* mouse over link */
        a:hover {
            color: rgb(203, 5, 5);
        }

        .p1 {
            text-align: center; /* Align the text to the right end */
        }

        a {
            font-size: 10px;
            display: inline-block; /* Make the link an inline-block element */
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Admin Login</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <div class="imgcontainer">
                <img src="lg2.png" alt="Avatar" class="avatar">
            </div>

            <label for="oculaa"><b>Username</b></label>
            <input type="text" name="username" placeholder="Username" required><br><br>

            <label for="pwd123"><b>Password</b></label>
            <input type="password" name="password" placeholder="Password" id="myInput" required><br>

            <div class="checkbox-container">
                <div class="checkbox-label">
                    <input type="checkbox" id="showPassword"> Show Password
                </div>
                <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
            </div>

            <input type="submit" value="Login">
            <p class="p1">
                <b><a href="$$$$.php" target="_blank">Forgot Password</a></b>
            </p>

        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Change 'oculaa' and 'pwd123' to the desired username and password
            if ($username === 'oculaa' && $password === 'pwd123') {
                // Redirect to the form.php page if login is successful
                header("Location: gallery_upload_form.php");
                exit(); // Terminate the script after the redirect
            } else {
                echo '<p class="error">Incorrect username or password.</p>';
            }
        }
        ?>
    </div>
    <script>
        var passwordInput = document.getElementById("myInput");
        var showPasswordCheckbox = document.getElementById("showPassword");

        showPasswordCheckbox.addEventListener("click", function() {
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        });
    </script>
</body>
</html>
