<?php
include 'conexao/conecta.inc';

$email = $_POST['email'];
$senha =  $_POST['senha'];
$confirmeSenha = $_POST['confirme_senha'];
$tipoUsuario = $_POST['tipoUsuario'];
$nome = $_POST['nome'];
if($senha != $confirmeSenha){
    echo'senha nao confere!';
    echo '<a href=frmCadastro.php> Cadastrar </a>';  
    
}else{ 
   
//$sql = "INSERT INTO usuarios EMAIL_USUARIO='$email',SENHA_USUARIO='$senha' WHERE EMAIL_USUARIO='$email' ";
$sql = "INSERT INTO usuarios (EMAIL_USUARIO,SENHA_USUARIO,TIPO_USUARIO,NOME_USUARIO ) VALUES ('$email','$senha','$tipoUsuario','$nome')";
$result =  mysql_query($sql);
if($result){
   echo 'dados inseridos com sucesso !';   
}else{
    echo 'dados nao inseridos';  
}


}