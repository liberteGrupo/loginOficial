<?php
echo '<meta charset="UTF-8">';
include 'conexao/conecta.inc';
if(isset($_POST['recupera'])){
function geraSaltAleatorio($tamanho = 22) {
return substr(sha1(mt_rand()), 0, $tamanho); 
}
$salt = geraSaltAleatorio();
// Senha do usuário, pode ter vindo do $_POST, $_GET ou outro lugar
$email = $_POST['email'];
$query = "SELECT * FROM usuarios WHERE EMAIL_USUARIO = '$email' ";
$result= mysql_query($query);
$usuarios = mysql_fetch_assoc($result);
$senha = $usuarios['SENHA_USUARIO'];
echo $senha;
// Cria um hash
$hash = md5($senha . $salt);
// Encripta esse hash 1000 vezes
for ($i = 0; $i < 1000; $i++) {
$hash = md5($hash);
}
$email = $_POST['email'];
$sql = "UPDATE SENHA_USUARIO SET usuarios VALUES('$hash') WHERE EMAIL_USUARIO= $email";
if(mysql_query($sql)){
 
echo 'Sua nova senha é : '.substr($hash,0,7);
 
}else {
    //feito por igor ribeiro sobral
}
}else{
    header('Location:frmRecuperaSenha.php');
}
