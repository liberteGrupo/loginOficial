<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
session_start();

        ?>
    <form action="incluirUsuario.php" method="post">
            Nome :<input type="text" name="nome"><br>
            Email :<input type="email" name="email"><br>
            Senha :<input type="password" name="senha"><br>
            <select name='opcao'>
                <option> ADM </option>
                    <option>RES </option>       
            </select>
            <br>
            <a href="frmIncluirUsuario.php"> nao é cadastrado </a>?
            <input type="submit" name="enviar">
        
        
    </body>
</html>
