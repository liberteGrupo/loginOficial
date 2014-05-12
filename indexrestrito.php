<?php
//session_start();
echo '<meta charset=utf-8>';
require 'includes/funcoesuteis.inc';
validaAutenticacao('RES','frmLogin.php');
$email =isset($_SESSION['email'])?$_SESSION['email']:null;
$senha = isset($_SESSION['senha'])?$_SESSION['senha']:null;
$nomeUsuario = isset($_SESSION['nomeUsuario'])?$_SESSION['nomeUsuario']:null;
 $sql = "SELECT * FROM usuarios ";
 $result = mysql_query($sql);
 $usuarios = mysql_fetch_array($result);
echo'<a href=logout.php>Efetuar Logout</a>';
/*if($nomeUsuario){    
echo 'Bem Vindo Srº) '.$nomeUsuario;    
}*/
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> </title>
    </head>
    <body>
        <?php
       echo'<h3> <caption>Restrito-Paginterar(a inicial </caption></h3>';
        echo '<a href=frmAtualizar.php?codigo='.$usuarios['COD_USUARIO'].'>Alterar(Perfil) <br> </a>';  

        ?>
    </body>
</html>


