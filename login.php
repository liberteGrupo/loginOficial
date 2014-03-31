<?php
echo '<meta charset=utf-8>';
include_once 'conexao/conecta.inc';
session_start();
if(isset($_POST['email']) and isset($_POST['senha']))
    {
    $email = $_POST['email'] ;
    $senha = $_POST['senha'] ;
  //echo $email,$senha;
$query = "SELECT * FROM usuarios WHERE EMAIL_USUARIO = '$email'";
$result= mysql_query($query);
$totalUsuario = mysql_num_rows($result);
if($totalUsuario === 0){
    echo '<a href=frmLogin.php>Usuario Não Encontrado!</a><br>';
}  else {
$array = mysql_fetch_array($result);
$senhaUsuario = $array['SENHA_USUARIO'];
$tipoUsuario = $array['TIPO_USUARIO'];
if($senha !== $senhaUsuario){
    echo '<a href=frmLogin.php>senha nao confere!</a>';
}else
       {
    //aqui esta tudo certo tanto no email quanto a senha 
    $_SESSION['email']  = $email;
    $_SESSION['senha'] =  $senha;
    $_SESSION['nomeUsuario']= $array['NOME_USUARIO'];
    mysql_close();
    
    if($tipoUsuario === 'RES'){
    echo '<script language="Javascript">
location.href="indexrestrito.php"
</script>';
      }elseif($tipoUsuario === 'ADM'){
          echo '<script language="Javascript">
location.href="admin/indexAdmin.php"
</script>';
          
      }else{
          session_destroy();
          echo '<a href=frmLogin.php> Tipo de  Usuario Inexistente</a>';
           }
         }
       }
}else{
  echo '<script language="Javascript">
location.href="frmLogin.php"
</script>';
   
}

