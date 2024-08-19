<?php

// Inicio da conexão com o banco de dados utilizando PDO
$host = "localhost";
$user = "root";
$pass = "";
$dbname ="celke";
$port = 3306;

try {
    //Conexão com a porta 
    //$conn = new PDO("mysql:host=$host;port;dbname=" . $user ,$pass);

    //conexão sem a porta 
    $conn = new PDO ("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    //echo "conexão com banco de dados realizado com sucesso.";
}   catch (PDOException  $err) {

    die( "Erro: conexão com banco de dados não realizado com sucesso. Erro gerado" . $err->getMessage());
}
    // Fim da conexão com o banco de dados utilizando PDO


