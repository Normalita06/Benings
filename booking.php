<?php
session_start();

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

// Ambil nama dan email dari database berdasarkan username
$username = $_SESSION['username'];
$query = "SELECT Username, Email FROM users WHERE Username='$username'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nama = $row['Username'];
    $email = $row['Email'];
} else {
    $nama = "";
    $email = "";
}

// Proses form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $telepon = $_POST['telepon'];
  $treatment = $_POST['treatment'];
  $tanggal = $_POST['tanggal'];
  $pesan = $_POST['pesan'];

  // Insert data into booking table
  $insert_query = "INSERT INTO booking (nama, Email, telepon, treatment, tanggal, pesan) VALUES ('$nama', '$email', '$telepon', '$treatment', '$tanggal', '$pesan')";
  if ($conn->query($insert_query) === TRUE) {
      echo "<p>Data berhasil disimpan</p>";
  } else {
      echo "Error: " . $insert_query . "<br>" . $conn->error;
  }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/book.css">
    <title>Booking Treatment Kecantikan</title>
</head>
<body>
    <div class="booking-container">
        <h2>Booking Treatment Kecantikan</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>" required readonly> 
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" required readonly>
            <label for="telepon">Telepon:</label>
            <input type="tel" id="telepon" name="telepon" required>
            <label for="treatment">Treatment:</label>
            <select id="treatment" name="treatment" required>
                <option value="">Pilih Treatment</option>
                <option value="Laser Picosure">Laser Picosure </option>
                <option value="Laser Proyellow">Laser Proyellow</option>
                <option value="Laser Diode">Laser Diode</option>
            </select>
            <label for="tanggal">Tanggal:</label>
            <input type="date" id="tanggal" name="tanggal" required>
            <label for="pesan">Pesan Tambahan:</label>
            <textarea id="pesan" name="pesan"></textarea>
            <input type="submit" name="submit" value="Submit">
            <a href="indexlogin.php" class="btn">Selesai</a>
        </form>
    </div>
</body>
</html>
