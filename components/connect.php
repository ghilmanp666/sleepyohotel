<?php
$servername = "mysql.railway.internal";
$username = "root";
$password = "IIsKyCqhHSHdZCIRiCNJzdosnQSMRrsS";
$dbname = "railway";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; // test koneksi
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
