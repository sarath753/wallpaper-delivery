<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
    <style>
        
        body {
            background-image: url('flowers.png'); /* Change the path to your background image */
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            
        }

        .welcome-text {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: white;
        }

        .get-started-button {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .get-started-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="welcome-text">
        <h1>Welcome to Our Website</h1>
        <p>Discover amazing wallpapers and more.</p>
        
    </div>
    <a href="login.php" class="get-started-button">Get Started</a>
</body>
</html>
