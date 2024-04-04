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

// Ambil data booking terakhir berdasarkan username
$username = $_SESSION['username'];
$query = "SELECT * FROM booking WHERE nama='$username' ORDER BY Id DESC LIMIT 1";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nama = $row['nama'];
    $email = $row['email'];
    $telepon = $row['telepon'];
    $treatment = $row['treatment'];
    $tanggal = $row['tanggal'];
    $pesan = $row['pesan'];
} else {
    echo "Data booking tidak ditemukan";
    exit;
}

// Proses form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $telepon = $_POST['telepon'];
    $treatment = $_POST['treatment'];
    $tanggal = $_POST['tanggal'];
    $pesan = $_POST['pesan'];

    // Update data booking
    $update_query = "UPDATE booking SET telepon='$telepon', treatment='$treatment', tanggal='$tanggal', pesan='$pesan' WHERE nama='$nama'";
    if ($conn->query($update_query) === TRUE) {
        echo "<p>Data berhasil diupdate</p>";
    } else {
        echo "Error: " . $update_query . "<br>" . $conn->error;
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
    <title>Update Jadwal Booking</title>
</head>
<body>
    <div class="booking-container">
        <h2>Update Jadwal Booking</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>" required readonly>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" required readonly>
            <label for="telepon">Telepon:</label>
            <input type="tel" id="telepon" name="telepon" value="<?php echo $telepon; ?>" required>
            <label for="treatment">Treatment:</label>
            <select id="treatment" name="treatment" required>
                <option value="">Pilih Treatment</option>
                <option value="Facial" <?php if ($treatment == "Laser Picosure") echo "selected"; ?>>Laser Picosure</option>
                <option value="Pijat" <?php if ($treatment == "Laser Proyellow") echo "selected"; ?>>Laser Proyellow</option>
                <option value="Waxing" <?php if ($treatment == "Laser Diode") echo "selected"; ?>>Laser Diode</option>
            </select>
            <label for="tanggal">Tanggal:</label>
            <input type="date" id="tanggal" name="tanggal" value="<?php echo $tanggal; ?>" required>
            <label for="pesan">Pesan Tambahan:</label>
            <textarea id="pesan" name="pesan"><?php echo $pesan; ?></textarea>
            <input type="submit" name="submit" value="Submit">
            <a href="indexlogin.php" class="btn">Selesai</a>
        </form>
    </div>
</body>
</html>
