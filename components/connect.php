<?php
$servername = "nozomi.proxy.rlwy.net";  // host
$username   = "root";                   // user
$password   = "udWClIDWZOdJtUOtBwdYZLAnKuq5yL";  // password dari Railway
$dbname     = "railway";                // nama database (biasanya "railway")
$port       = 40912;                    // port dari Railway

$conn = new mysqli($servername, $username, $password, $dbname, $port);

// cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Database connected successfully!";
}
?>


