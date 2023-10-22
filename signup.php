<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <style>
        body {
            background: linear-gradient(to bottom, #2ecc71, #27ae60);
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .signup-container {
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h2 {
            color: #2ecc71;
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

        .signup-button {
            background-color: #2ecc71;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .signup-button:hover {
            background-color: #27ae60;
        }

        .back-link {
            margin-top: 10px;
        }

        .back-link a {
            color: #2ecc71;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
        .message-container {
           margin-top: 20px;
           text-align: center;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Sign Up</h2>
        <form method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="repassword">Re-enter Password:</label>
                <input type="password" name="repassword" required>
            </div>
            <input type="submit" class="signup-button" value="Sign Up">
        </form>
        <div class="back-link">
            <a href="login.php">Already have an account? Log in</a>
        </div>
    </div> 
    <?php
      echo "<br>"; 
    ?>   
</body>
</html>



<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    
    if ($password === $repassword) {
        

        
        $conn = new mysqli("localhost","root","","projectuserdetails");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

       
        $sql = "INSERT INTO userdetails (username, password) VALUES ('$username', '$password')";

        if ($conn->query($sql) === TRUE) {
            $message =  "Registration successful. You can now <a href='login.php'>Log in</a>.";
        } else {
            $message =  "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    } else {
        echo "Passwords do not match. Please try again.";
    }
    if(isset($message)){
        echo "<br>";
        echo '<div style="margin-top: 500px; margin-left:0px;">' . $message . '</div>';
    } 
    
}
?>


