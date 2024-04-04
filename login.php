<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login">
                </div>
                <div class="links">
                    Not a member yet? <a href="register.php">Sign Up</a>
                </div>
            </form>
        </div>
    </div>

    <?php
    // Database configuration
    $host = 'localhost';
    $username = 'root'; // Default username for MySQL is root
    $password = ''; // Default password for MySQL is empty
    $database = 'benings'; // Change this to your database name

    // Create connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Query to fetch user details based on email and password
        $query = "SELECT * FROM users WHERE Email='$email' AND Password='$password'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            // Login success, set session and redirect to dashboard or home page
            $row = $result->fetch_assoc();
            $_SESSION['username'] = $row['Username']; // Assuming 'Username' is the column name in your 'users' table
            header('Location: indexlogin.php');
            exit;

        } else {
            // Login failed, show error message
            echo "<div class='message'>
                      <p>Invalid email or password!</p>
                  </div>";
        }
    }

    // Close connection
    $conn->close();
    ?>

</body>
</html>
