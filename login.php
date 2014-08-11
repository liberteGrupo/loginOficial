<?php
echo '<meta charset=utf-8>';
include_once 'conexao/conecta.inc';
include 'Bcrypt.class.php';
session_start();
if(isset($_POST['email']) and isset($_POST['senha']))
    {
    $email = $_POST['email'] ;
    $senha= $_POST['senha'];
  
  //echo $email,$senha;
$query = "SELECT * FROM usuarios WHERE EMAIL_USUARIO = '$email' ";
$result= mysql_query($query);
$totalUsuario = mysql_num_rows($result);
$usuarios = mysql_fetch_assoc($result);
$hash = $usuarios['SENHA_USUARIO'];
if(mysql_num_rows($result) === 1){
if(Bcrypt::check($senha,$hash)){
    echo '<script language="Javascript">
location.href="indexrestrito.php"
</script>';
}else{
     echo '<script language="Javascript">
location.href="admin/indexAdmin.php"
</script>';
}
    }

    }else{
        echo 'Usuario Não encontrado!';
    }