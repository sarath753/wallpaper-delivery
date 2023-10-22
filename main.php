<!DOCTYPE html>
<html>
<head>
    <title>Select Wallpapers</title>
    <style>
        body {
            background: #f0f0f0;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }

        .section {
            margin-bottom: 20px;
        }

        .section-heading {
            font-size: 24px;
            font-weight: bold;
        }

        .wallpapers {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .wallpaper {
            margin: 10px;
            text-align: center;
        }

        .wallpaper img {
            width: 200px;
            height: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .wallpaper-label {
            font-size: 16px;
            margin-top: 5px;
        }

        .next-button {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .next-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" enctype="multipart/form-data">
    <h1>Select Wallpapers</h1>

    <div class="section">
        <div class="section-heading">Nature</div>
        <div class="wallpapers">
            <div class="wallpaper">
                <img src="nature1.jpeg" alt="Nature 1">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="nature1.jpeg"> BEAUTIFUL TREES
                </div>
            </div>
            <div class="wallpaper">
                <img src="nature2.jpeg" alt="Nature 2">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="nature2.jpeg"> OCEAN
                </div>
            </div>
            <div class="wallpaper">
                <img src="nature3.jpeg" alt="Nature 3">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="nature3.jpeg"> LANDSCAPE
                </div>
            </div>
            <div class="wallpaper">
                <img src="nature4.jpeg" alt="Nature 4">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="nature4.jpeg"> HILL STATION
                </div>
            </div>
        </div>
        <div class="wallpaper">
                <img src="nature5.jpeg" alt="Nature 5">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="nature5.jpeg"> SNOW MOUNTAIN
                </div>
            </div>
        </div>
    </div>

    
    <div class="section">
        <div class="section-heading">Devotional</div>
        <div class="wallpapers">
            <div class="wallpaper">
                <img src="devotional1.jpeg" alt="Devotional 1">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="devotional1.jpeg"> LORD SAIBABA
                </div>
            </div>
            <div class="wallpaper">
                <img src="devotional2.jpeg" alt="Devotional 2">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="devotional2.jpeg"> LORD VENKATESWARA
                </div>
            </div>
            <div class="wallpaper">
                <img src="devotional3.jpeg" alt="Devotional 3">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="devotional3.jpeg"> LORD VISHNU
                </div>
            </div>
            <div class="wallpaper">
                <img src="devotional4.jpeg" alt="Devotional 4">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="devotional4.jpeg"> LORD GANESHA
                </div>
            </div>
            <div class="wallpaper">
                <img src="devotional5.jpeg" alt="Devotional 5">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="devotional5.jpeg"> LORD SHIVA
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="section-heading">HEROES</div>
        <div class="wallpapers">
            <div class="wallpaper">
                <img src="hero1.jpeg" alt="hero 1">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="hero1.jpeg"> DULQUER SALMAAN
                </div>
            </div>
            <div class="wallpaper">
                <img src="hero2.jpeg" alt="hero 2">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="hero2.jpeg"> RAJINI KANTH
                </div>
            </div>
            <div class="wallpaper">
                <img src="hero3.jpeg" alt="hero 3">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="hero3.jpeg"> SHAH RUKH KHAN
                </div>
            </div>
            <div class="wallpaper">
                <img src="hero4.jpeg" alt="hero 4">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="hero4.jpeg"> RAM CHARAN
                </div>
            </div>
            <div class="wallpaper">
                <img src="hero5.jpeg" alt="hero 5">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="hero5.jpeg"> PRABHAS
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="section-heading">cricketer</div>
        <div class="wallpapers">
            <div class="wallpaper">
                <img src="cricketer1.jpeg" alt="cricketer 1">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="cricketer1.jpeg"> M S DHONI
                </div>
            </div>
            <div class="wallpaper">
                <img src="cricketer2.jpeg" alt="cricketer 2">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="cricketer2.jpeg"> VIRAT KOHLI
                </div>
            </div>
            <div class="wallpaper">
                <img src="cricketer3.jpeg" alt="cricketer 3">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="cricketer3.jpeg"> SACHIN TENDULKAR
                </div>
            </div>
            <div class="wallpaper">
                <img src="cricketer4.jpeg" alt="cricketer 4">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="cricketer4.jpeg"> SURESH RAINA
                </div>
            </div>
            <div class="wallpaper">
                <img src="cricketer5.jpeg" alt="cricketer 5">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="cricketer5.jpeg"> ROHITH SHARMA
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="section-heading">Anime</div>
        <div class="wallpapers">
            <div class="wallpaper">
                <img src="anime1.jpeg" alt="Anime 1">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="anime1.jpeg"> ANIME
                </div>
            </div>
            <div class="wallpaper">
                <img src="anime2.jpeg" alt="Anime 2">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="anime2.jpeg"> NARUTO
                </div>
            </div>
            <div class="wallpaper">
                <img src="anime3.jpeg" alt="Anime 3">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="anime3.jpeg"> ANIME
                </div>
            </div>
            <div class="wallpaper">
                <img src="anime4.jpeg" alt="Anime 4">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="anime4.jpeg"> NARUTO
                </div>
            </div>
        </div>
        <div class="wallpaper">
                <img src="anime5.jpeg" alt="Anime 5">
                <div class="wallpaper-label">
                    <input type="checkbox" name="wallpapers[]" value="anime5.jpeg"> NARUTO
                </div>
            </div>
        </div>
    </div>
    <div class="section">
            <div class="section-heading">Email Address</div>
            <input type="email" name="email" required>
    </div>
         <input type="submit">
    
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
     if (isset($_POST["wallpapers"]) && is_array($_POST["wallpapers"])) {
        $selectedImages = $_POST["wallpapers"];
    }

    
    if (!empty($email) && !empty($selectedImages)) {
        $to = $email;
        $subject = "Selected Wallpapers";
        $message = "Thank You for showing your interest on us here are your wallpapers.";
        $headers = "From: sarathsai75309@gmail.com";
        $boundary = md5(time()); 
        $headers .= "\r\nMIME-Version: 1.0";
        $headers .= "\r\nContent-Type: multipart/mixed; boundary=" . $boundary;
        foreach ($selectedImages as $image) {
            $file = $image; 
            $content = file_get_contents($file);
            $base64 = base64_encode($content);
            $message .= "Content-Type: application/octet-stream; name=\"" . $image . "\"\r\n";
            $message .= "Content-Transfer-Encoding: base64\r\n";
            $message .= "Content-Disposition: attachment; filename=\"" . $image . "\"\r\n\r\n";
            $message .= chunk_split($base64) . "\r\n";
        }
        $message .= "--" . $boundary . "--";
        if(mail($to, $subject, $message, $headers)){
            echo "<br>";
            echo "Wallpapers sent to $email successfully.";
            echo "<br>";
            echo '<a href="thankyou.php">OUR TESTIMONIALS</a>';
        } else {
        echo "Error sending wallpapers to $email.";
        }
    } else {
        echo "No wallpapers selected.";
    }
    }

?>
