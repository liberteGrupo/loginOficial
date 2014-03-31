<?php
echo '<meta charset=utf-8>';
//session_start();
require  '../includes/funcoesuteis.inc'; 
validaAutenticacao('ADM','../frmLogin.php');
$email =  isset($_SESSION['email'])?$_SESSION['email']:null;
$senha = isset($_SESSION['senha'])?$_SESSION['senha']:null;
$nomeUsuario = isset($_SESSION['nomeUsuario'])?$_SESSION['nomeUsuario']:null;

echo '<a href=../logout.php> Logout </a>';