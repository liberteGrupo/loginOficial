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
            
            
                     <input type="submit" name="cadastre-se">
   
        </form>        
</body>
</html>