<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "bortoli_18";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}