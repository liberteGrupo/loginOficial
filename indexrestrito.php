<?php
//session_start();
echo '<meta charset=utf-8>';
require 'includes/funcoesuteis.inc';
validaAutenticacao('RES','frmLogin.php');
$email =isset($_SESSION['email'])?$_SESSION['email']:null;
$senha = isset($_SESSION['senha'])?$_SESSION['senha']:null;
$nomeUsuario = isset($_SESSION['nomeUsuario'])?$_SESSION['nomeUsuario']:null;

echo'<a href=logout.php>Efetuar Logout</a>';
/*if($nomeUsuario){    
echo 'Bem Vindo Srº) '.$nomeUsuario;    
}*/


