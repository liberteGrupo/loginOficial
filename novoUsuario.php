<?php
echo '<meta  charset=UTF-8>';
include_once 'conexao/conecta.inc';
$email = $_POST['login'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$tipoUsuario = 'RES';
$query = "INSERT INTO usuarios (EMAIL_USUARIO,SENHA_USUARIO,NOME_USUARIO,TIPO_USUARIO)";
$query.= " VALUES ('$email','$senha','$nome','$tipoUsuario')";

if(mysql_query($query)){
    echo '<script>alert("Usuário  cadastrado com sucesso !") </script>';
    echo '<a  href=frmLogin.php>Efetuar login</a>';
       
}else{
    echo '<script>
    alert("Não  foi  possivel registrar seu  cadastro !")
    location.href=index.php
            </script>';
}