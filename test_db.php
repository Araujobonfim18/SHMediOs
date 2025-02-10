<?php
$servername = "shmedios-production.up.railway.app";  // MYSQLHOST
$username = "root";                      // MYSQLUSER
$password = "vNvTHqYmYsHWpqzfDDTffjjaMkKqYNIX"; // MYSQLPASSWORD
$database = "railway";                   // MYSQLDATABASE

// Conectar ao MySQL
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
echo "Conexão bem-sucedida!";
?>
