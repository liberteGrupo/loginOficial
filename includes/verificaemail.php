<?php
// recebendo o email do formulário
$email = $_POST['login'];
// configuração com o banco de dados
$server = 'localhost';
$user   = 'root';
$password = 'theblackwolf';
$database = 'loginoficial3f';
// Conexão com o Mysql
$connection = mysql_connect($server, $user, $password);
mysql_select_db($database,$connection);
// Criando uma matriz para guardar todos emails já cadastrados no banco
$emailsCadastrados = array();
// Montando a query de consulta e executando a query
$query = "SELECT EMAIL_USUARIO FROM usuarios WHERE EMAIL_USUARIO = '$email'";
$result = mysql_query($query);
// Buscando os emails cadastrados e montando a matriz emailsCadastrados
while ($usuarios = mysql_fetch_assoc($result))
{
    $emailsCadastrados[] = $usuarios['EMAIL_USUARIO'];
}
// A função in_array(), é responsável em "buscar" em referido elemento dentro de uma matriz.
// A função recebe dois parâmetros: "o elemento a ser pesquisado" e a "matriz de elementos"
// Veja:
if(in_array($email, $emailsCadastrados))
{
    echo 'false';
}else{
    echo'true';
}
exit();