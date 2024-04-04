<?php 
    session_start();
    if(isset($_POST['submit'])){
        $message = $_POST['message'];
        if(!isset($_SESSION['chat'])){
            $_SESSION['chat'] = array();
        }
        array_push($_SESSION['chat'], $message);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Konsultasi</title>
    <link rel="stylesheet" href="css/konsul.css">
</head>
<body>
    <div class="container">
        <h2>Chat Konsultasi</h2>
        <div class="chat-box">
            <?php 
                if(isset($_SESSION['chat'])){
                    foreach($_SESSION['chat'] as $chat){
                        echo "<p>$chat</p>";
                    }
                }
            ?>
        </div>
        <form action="" method="post">
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" id="message" rows="3" required></textarea>
            </div>
            <button type="submit" name="submit">Send</button>
        </form>
    </div>
</body>
</html>
