<!doctype>
<html>
    <head>
        <meta charset="UTF-8">
        <meta lang="pt-br">
        <title>Formulário de Login</title>
    </head>

    <body>
        <h3>Formulario Login</h3>       
        <form method="post" action="login_cript.php">
            
             <label>Email:</label>
            <input type="text" name="email"><br>
            <label>Senha:</label>
            <input type="text" name="senha"><br>
           <a href="esqueceSenha.php">Esqueceu a senha Senha</a><br>
            <input type="submit" name="logar">
            <a href="frmCadastro.php"> Cadastre-se </a><br>
        </form>
    </body>
</html>
