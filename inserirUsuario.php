<?php
include 'conexao/conecta.inc';
$senha =  $_POST['senha'];
$confirmeSenha = $_POST['confirme_senha'];
$nome = $_POST['nome'];
$tipoUsuario= $_POST['tipoUsuario'];

if($senha != $confirmeSenha){
    echo'senha nao confere!';
    echo '<a href=frmCadastro.php> Cadastrar </a>';  
    
    
}else{ 
    
$email = $_POST['email'];
//$sql = "INSERT INTO usuarios EMAIL_USUARIO='$email',SENHA_USUARIO='$senha' WHERE EMAIL_USUARIO='$email' ";
$sql = "INSERT INTO usuarios (EMAIL_USUARIO,SENHA_USUARIO,TIPO_USUARIO,NOME_USUARIO ) VALUES ('$email','$senha','$tipoUsuario','$nome') ";
$result =  mysql_query($sql);
echo 'dados inseridos com sucesso !';

}