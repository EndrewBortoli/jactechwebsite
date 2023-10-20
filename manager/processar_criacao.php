<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validação de dados de entrada
    if (!isset($_POST['nome']) || !isset($_POST['email']) || !isset($_POST['senha']) || !isset($_POST['nivel'])) {
        exit("Dados incompletos. Verifique a entrada e tente novamente.");
    }

    // Pega os dados do POST
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nivel = $_POST['nivel'];

    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = '';
    $dbname = "bortoli_18";

    // Criar conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    } 

    // Usar prepared statements para evitar SQL injection
    $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, nivel) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nome, $email, $senha, $nivel); // "ssss" indica que todos os 4 parâmetros são strings

    if ($stmt->execute()) {
        echo '<script>alert("Usuário cadastrado com sucesso!"); window.location.href="../manager/usuarios.php";</script>';
    } else {
        echo "Erro ao criar novo usuário: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
