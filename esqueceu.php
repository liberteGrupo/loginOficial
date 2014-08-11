<?php  
   include 'conexao/conecta.inc';
 require 'bcrypt.php';
if(isset($_POST['enviar']))
{
$email = $_POST['email'];
// Senha já criptografada (salva no banco)
$queryS = "SELECT * FROM usuarios WHERE EMAIL_USUARIO ='$email' ";
$result = mysql_query($queryS);
  $array = mysql_fetch_array($result);
  $senhaUsuario =  $array['SENHA_USUARIO'];
  $salt = '342da$@$@$sda3d';
$senhaN = substr(md5(mt_rand()), 0,5);  
$senha = md5($senhaN.$salt);
$novaSenha = substr($senha, 0,6);
$query = "UPDATE usuarios SET SENHA_USUARIO = 'substr($novaSenha,0,7)' WHERE EMAIL_USUARIO = 'email' ";
if(mysql_query($query))
{
  echo 'Sua Nova senha é : '.$novaSenha;
}

}