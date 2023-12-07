// create_table.php
<?php
require_once("config.php");
// create_table.php
<?php
require_once("config.php");

$sql = "CREATE TABLE IF NOT EXISTS opine (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    mensagem TEXT
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela criada com sucesso!";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
}

$conn->close();
?>
