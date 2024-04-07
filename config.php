<?php
$server = $_ENV['DB_SERVER'];
$user = $_ENV['DB_USERNAME'];
$port = $_ENV['DB_PORT'];
$pass = $_ENV['DB_PASSWORD'];
$database = $_ENV['DB_DATABASE'];

try {
    $conn = new PDO("pgsql:host=$server;port=$port;dbname=$database;user=$user;password=$pass");
    // Set mode error untuk PDO agar melemparkan pengecualian ketika terjadi kesalahan
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Koneksi sukses!";
} catch (PDOException $e) {
    die("Koneksi ke database gagal: " . $e->getMessage());
}
