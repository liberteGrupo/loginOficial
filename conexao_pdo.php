<?php

try{
    // Faz conexão com banco de daddos
    $pdo = new PDO("mysql:host=localhost;dbname=loginOficial3f;","root", "theblackwolf");
}catch(PDOException $e){
    /* Caso ocorra algum erro na conexão com o banco, exibe a mensagem */
    echo 'Falha ao conectar no banco de dados: '.$e->getMessage();
    die;
}




?>