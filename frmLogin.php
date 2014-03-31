<?php
include 'conexao/conecta.inc';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta lang="pt-br">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
  
       ?>
        <h3>Formulario Login</h3>       
        <form action="login.php" method="post">
            Email :<input type="email" name="email"><br>
            Senha :<input type="password" name="senha">
            <br>
            <br>
            <input type="submit" name="logar">
            <br>
            <a href="frmCadastro.php"> Cadastre-se </a><br>
        </form>
    </body>
</html>
