<!DOCTYPE html>
<html>
    <head>
        <title> Atualizar</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="#">
    </head>    
    <body>
      <?php
              include 'conexao/conecta.inc';
              $codigo_usuario = $_REQUEST['codigo'];
              //echo '<h1>'.$codigo_usuario.'</h1>';
              $sql = "SELECT * FROM usuarios WHERE COD_USUARIO ='$codigo_usuario'";
              $result = mysql_query($sql);
              $usuarios = mysql_fetch_array($result);
        ?>

        <form action="atualizar.php" method="post">
           Nome: <input type="text" name="nome" required  value="<?php echo $usuarios['NOME_USUARIO'] ?>"> <br/>
           Email: <input type="email" name="email" required value="<?php echo $usuarios['EMAIL_USUARIO']?>"> <br/>
           Confirma Email : <input type="email" name="confirme_email" required><br/>
           Senha: <input type="password" name="senha" required value="<?php echo $usuarios['SENHA_USUARIO']?>"> <br/>
                     Confirme Senha : <input type="password" name="confirme_senha" required><br/>
           <select name="tipo" hidden="">
           <?php 
            $tipo = $usuarios['TIPO_USUARIO'];
               if($tipo === 'ADM')
               {
                   echo '<option selected> ADM </option>';
                   echo '<option> RES </option>';
               }
               else
               {
                 echo '<option selected> RES </option>';  
                 echo '<option> ADM </option>';
               }
              ?>
            </select> <br/>
           <input type="submit" value="Atualizar" >
           </form>
        
        
    </body>
</html>