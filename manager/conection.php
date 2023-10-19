<?php
//conexão local
$servidor = 'localhost';
$banco = 'bortoli_18';
$usuario = 'root';
$senha = '';


try{
    $pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");

} catch (Exception $e) {
    echo 'Erro ao conectar ao banco de dados!';
    echo '<br>';
    echo '<br>';
    echo $e;
}

?>