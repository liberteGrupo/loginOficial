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
   
$sql = " INSERT INTO usuarios ( NOME_USUARIO,EMAIL_USUARIO, SENHA_USUARIO, TIPO_USUARIO)";
    $sql.= " VALUES ('$nome','$email','$senha','$tipoUsuario')";
    if(mysql_query($sql)){
        echo 'Dados inseridos com Sucesso !';
         echo '<a href=frmLogin.php> Logar </a>';
                          }else{
                              echo mysql_error() . '<br/>'; 
                          }
        

}