<?php
@session_start();
require_once("conexao.php");
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
$query->bindValue(":email", $usuario);
$query->bindValue(":senha", $senha);
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$usersfound = count($res);

if ($usersfound > 1) {
    $_SESSION['nome'] = $res[0]['nome'];
    $_SESSION['id'] = $res[0]['id'];
    $_SESSION['nivel'] = $res[0]['nivel'];

    if ($_SESSION['nivel'] === 'Administrador') { // Verifique se o nível é 'Administrador'
        echo '<script>window.location="manager/dashboard.php"</script>';
        exit(); // Encerre o script
    } else {
        echo '<script>window.location="private/dashboard.php"</script>';
 // Redirecione para a página privada
        exit(); // Encerre o script
    }
} else {
    echo '<script>window.alert("Dados Incorretos")</script>';
    echo '<script>window.location="login.php"</script>';
}
?>
