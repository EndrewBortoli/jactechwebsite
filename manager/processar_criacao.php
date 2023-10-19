<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = '';
    $dbname = "bortoli_18";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Recupere os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $nivel = $_POST["nivel"];

    // Consulta SQL para inserir um novo usuário
    $sql = "INSERT INTO usuarios (nome, email, senha, nivel) VALUES ('$nome', '$email', '$senha', '$nivel')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo usuário criado com sucesso.";
    } else {
        echo "Erro ao criar novo usuário: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Acesso não autorizado.";
}
?>
