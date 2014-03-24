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
            <select name='opcao'>
                <option> ADM </option>
                    <option>RES </option>
                        
            </select>
            <br>
            <input type="submit" name="logar">
            
             <a href="frmIncluirUsuario.php"> Cadastre-se </a><br>
        </form>
    </body>
</html>
