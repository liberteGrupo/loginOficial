<?php
include 'conexao/conecta.inc';

if($_POST){
$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = "INSERT INTO usuario EMAIL_USUARIO='$email',SENHA_USUARIO='$senha' WHERE EMAIL_USUARIO='$email' ";
}else{
    
    echo'nao foi possivel se cadastrar';
}