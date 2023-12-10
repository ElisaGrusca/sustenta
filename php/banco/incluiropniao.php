<?php
// Substitua as informações de conexão do banco de dados
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Sustenta";
$port       = 3306;

// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $nome = mysqli_real_escape_string($conn, $_POST["nome"]);
    $email = mysqli_real_escape_string($conn, $_POST["e-mail"]);
    $mensagem = mysqli_real_escape_string($conn, $_POST["mensagem"]);

    // Inserir dados no banco de dados
    $sql = "INSERT INTO sustenta (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . $conn->error;
    }
}

// Fechar a conexão
$conn->close();
?>
