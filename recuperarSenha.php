<?php  
 include 'conexao/conecta.inc';
 require 'Bcrypt.class.php';
if(isset($_POST['enviar']))
{
 $email = $_POST['email'];
// Senha já criptografada (salva no banco)
$queryS = "SELECT * FROM usuarios WHERE EMAIL_USUARIO ='$email' ";
$result = mysql_query($queryS);
if(mysql_num_rows($result)=== 0){
    echo 'Email Não Cadastrado';
}else{
$array         = mysql_fetch_array($result);
$senhaUsuario  =  $array['SENHA_USUARIO'];
$salt          = '342da$@$@$sda3d';
$senhaN        = substr(md5(mt_rand()), 0,5);  
$senha         = md5($senhaN.$salt);
$novaSenha     = substr($senha, 0,6);
$query         = "UPDATE usuarios SET SENHA_USUARIO = '$novaSenha' WHERE EMAIL_USUARIO = '$email' ";
if(mysql_query($query))
{
  echo 'Sua Nova senha é : '.$novaSenha;
}  else {
    echo 'Deu merda total';    
}

}
}