<?php
include_once 'conexao/conecta.inc';
$nome = $_POST['nome'];
$email = $_POST['email'];
$confirme_email = $_POST['confirme_email'];
$senha =  $_POST['senha'];
$confirmeSenha = $_POST['confirme_senha'];
$tipoUsuario = $_POST['tipo'];
$codigo_usuario= $_POST['codigo'];
if($senha != $confirmeSenha ){
    echo'senha nao confere! ';
    echo '<a href=frmCadastro.php> Cadastrar </a>';  
}
else{ 
 
$sql = " UPDATE usuarios SET NOME_USUARIO = '$nome',EMAIL_USUARIO='$email',
  SENHA_USUARIO='$senha',TIPO_USUARIO='$tipoUsuario'
WHERE COD_USUARIO ='$codigo_usuario'
    
";
    if(mysql_query($sql)){
        echo 'Dados Atualizados com Sucesso !';
     echo '<script language="Javascript">
location.href="indexrestrito.php"
</script>';
         
                          }else{
                              echo mysql_error() . '<br/>'; 
                          }
        

}