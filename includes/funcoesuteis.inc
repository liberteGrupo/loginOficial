<?php
echo '<meta charset=utf-8>';
function  validaAutenticacao($tipoUser,$link)
{
    session_start();
if(!isset($_POST['email']) or !isset($_SESSION['senha'])){
session_destroy();
     echo 'Você não efetou Login<br/>';
     echo '<a href=frmLogin.php> Efetuar o Login</a>';
}  else {
/* fazer validadacao para que usuarios x nao entre em  ambiente de usuario y */
    if($tipoUser == 'RES'){
        include_once '../conexao/conecta.inc';
    }else{
        include_once '../conexao/conecta.inc';
    }
    include_once 'conexao/conecta.inc';
    $email =isset($_SESSION['email'])?$_SESSION['email']:null;
    $senha = isset($_SESSION['senha'])?$_SESSION['senha']:null;
    $nomeUsuario = isset($_SESSION['nomeUsuario'])?$_SESSION['nomeUsuario']:null;
    $query =  "SELECT * FROM  usuarios WHERE EMAIL_USUARIO='.$email.'";
    $acao = mysql_query($query);
    $usuarios = mysql_fetch_array($acao);
    $senhaUsuario =  $usuarios['SENHA_USUARIO'];
    $emailUsuarios =  $usuarios['EMAIL_USUARIO'];
    $tipoUsuario   =  $usuarios['TIPO_USUARIO'];
   if($tipoUsuario  !== $tipoUser){
       session_destroy();
       echo "<a href=$link> Acesso Negado para seu tipo de usuario </a>";  
        }elseif($email !== $emailUsuarios){
            session_destroy();
            echo "<a href=$link> Acesso negado email de usuário invalido</a>";
        }elseif($senha !== $senhaUsuario)
            {
            session_destroy();
            echo "<a href=$link> Acesso negado,Senha nao confere</a>";
           }
        }
   }


 