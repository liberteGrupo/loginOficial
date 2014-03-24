<?php
include 'conexao/conecta.inc';
$senha =  $_POST['senha'];
$confirmeSenha = $_POST['confrime_senha'];
if($senha != $confirmeSenha){
    echo'senha nao confere!';
    echo '<a href=frmCadastro.php> Cadastrar </a>';  
    
    
}else{ 
    
$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = "INSERT INTO usuarios EMAIL_USUARIO='$email',SENHA_USUARIO='$senha' WHERE EMAIL_USUARIO='$email' ";
$result =  mysql_query($sql);
echo 'dados inseridos com sucesso !';

}