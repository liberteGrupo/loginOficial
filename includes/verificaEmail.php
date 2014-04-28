<?php
//recebendo o email do formulario
$email = $_GET['login'];
//configuracao com o banco de dados
$hostName ='localhost';
$userName = 'root';
$passHost = '12345678';
$dbName ='loginOficial3f' ;
$connection = mysql_connect($hostName,$userName,$passHost);
mysql_select_db($dbName,$connection);
//criando uma matriz para guardar todos emails ja cadastrados no banco 
$emailCadastrados = array();
$query = "SELECT EMAIL_USUARIO FROM usuario WHERE EMAIL_USUARIO='$email'";
$result = mysql_query($query);
//buscando os email cadastrados e montando a matriz emailCadastrados
while ($usuarios = mysql_fetch_assoc($result))
{
    $emailCadastrados[] = $usuarios['EMAIL_USUARIO'];
}
//A funcao in_array(),e reponsavel em "buscar" um referido elemento dentro de uma matriz.
//a funcao recebe dois parametros:"o elemento a seeer pesquisado e a "matriz de elementos"
//veja:
if(in_array($email, $emailCadastrados)){
    echo 'false';
    
}  else {
    echo 'true';
}exit();

