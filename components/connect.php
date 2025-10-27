<?php
$servername = "mysql.railway.internal";   // ganti sesuai plugin MySQL di Railway
$username   = "root";
$password   = "IIsKyCqhHSHdZCIRiCNJzdosnQSMRrsS";
$dbname     = "railway";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; // bisa aktifkan untuk uji coba
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>

