<?php
session_start();
require_once("conection.php");

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
$query->bindValue(":email", $usuario);
$query->bindValue(":senha", $senha);
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$usersfound = count($res);

if ($usersfound == 1) { // Verifique se há um único usuário correspondente
    $_SESSION['nome'] = $res[0]['nome'];
    $_SESSION['id'] = $res[0]['id'];
    $_SESSION['nivel'] = $res[0]['nivel'];

    if ($_SESSION['nivel'] === 'Administrador') {
        header('Location: ../manager/dashboard.php');
        exit();
    } else {
        header('Location: ../private/dashboard.php');
        exit();
    }
} else {
    echo '<script>alert("Dados Incorretos")</script>';
    echo '<script>window.location="english/members.php"</script>';
}
?>
