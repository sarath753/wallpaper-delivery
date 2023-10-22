<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            background: linear-gradient(to bottom, #3498db, #2980b9);
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h2 {
            color: #3498db;
            margin-bottom: 20px;
        }

        .form-group {
            margin: 20px 0;
        }

        label {
            font-weight: bold;
        }

        input[type="text"], input[type="password"] {
            width: 80%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-button {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-button:hover {
            background-color: #2980b9;
        }

        .back-link {
            margin-top: 10px;
        }

        .back-link a {
            color: #3498db;
        }

        .back-link a:hover {
            text-decoration: underline;
        }

        .sign-up-link {
            margin-top: 10px;
        }

        .sign-up-link a {
            color: #3498db;
            text-decoration: none;
        }

        .sign-up-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>
            <input type="submit" class="login-button" value="Log in">
        </form>
        <div class="back-link">
            <a href="index.php">Back to Welcome Page</a>
        </div>
        <div class="sign-up-link">
            <a href="signup.php">New User? Sign Up Here</a>
        </div>
    </div>
</body>
</html>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['name'];
    $password = $_POST['password'];
    
    $conn = new mysqli("localhost", "root", "", "projectuserdetails");
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * FROM userdetails WHERE username = '$username' AND password = '$password'";
    
    $result = $conn->query($query);
    
    if ($result->num_rows === 1) {
        
        header("Location: main.php");
    } else {
        
        $message = "Invalid username or password.";
    }
    
    $conn->close();


    if (isset($message)) {
            echo '<div class="error-message">' . $message . '</div>';
    }

}
?>
