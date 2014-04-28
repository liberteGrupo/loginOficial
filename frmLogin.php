<!doctype>
<html>
    <head>
        <meta charset="UTF-8">
        <meta lang="pt-br">
        <title>Formulário de Login</title>
    </head>
    <body>
        <h3>Formulario Login</h3>       
        <form method="post" action="login.php">
            <label>Email:</label><input type="email" name="email"><br/>
            <label>Senha:</label><input type="password" name="senha"><br/>
            
            <input type="submit" name="logar">
            <br>
            <a href="frmCadastro.php"> Cadastre-se </a><br>
        </form>
    </body>
</html>
