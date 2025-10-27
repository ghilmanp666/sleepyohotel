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
<?php
$conn = new mysqli(
    getenv('MYSQLHOST'),
    getenv('MYSQLUSER'),
    getenv('MYSQLPASSWORD'),
    getenv('MYSQLDATABASE')
);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

