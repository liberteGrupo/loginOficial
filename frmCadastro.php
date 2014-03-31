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
        <form action="inserirUsuario.php" method="post">
             Email :<input type="email" name="email"><br>
             Nome :<input type="name" name="nome"> <br> 
             Senha :<input type="password" name="senha"><br>
             Confirme Senha :<input type="password" name="confirme_senha">
            <br><br>
           <select name='tipoUsuario'>
               <option name="RES" >RES </option>
           </select> <br>
           <input type="submit" name="logar" >
   
        </form>        
</body>
</html>