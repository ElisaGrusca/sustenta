// config.php
<?php
$servername = "localhost";
$username = "elisagrusca";
$password = "123456";
$dbname = "banco.sql";

// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
