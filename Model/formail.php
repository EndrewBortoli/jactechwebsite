<?php 

    require "config.ini";

    ini_set ("SMTP","sh-pro26.hostgator.com.br");


    $nome=$_POST["nome"];
    $email=$_POST["email"];
    $assunto=$_POST["assunto"];
    $telefone=$_POST["telefone"];
    $mensagem=$_POST["mensagem"];

    if ($certo== "1") {

        mail (
            "$emaildest",
            "$assunto",
            "Nome: $nome\n
            Email: $email\n
            Telefone: $telefone\n
            Mensagem:\n$mensagem",
        );

        include "sucesso.html";

        exit();

    }

?>