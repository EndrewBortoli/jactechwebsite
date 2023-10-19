<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = '';
    $dbname = "bortoli_18";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    $id = $_GET["id"];
    // Instrução SQL para excluir o registro com base no ID
    $sql = "DELETE FROM usuarios WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo '<script>window.alert("Conta excluida com sucesso!!")</script>';
        echo '<script>window.location="usuarios.php"</script>';    
    } else {
        echo "Erro ao excluir o registro: " . $conn->error;
    }

    $conn->close();
} else {
    echo "ID não especificado.";
}
?>
