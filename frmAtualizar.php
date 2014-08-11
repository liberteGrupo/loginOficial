<?php 
require_once 'conexao/conecta.inc';

    $codigo_usuario = mysql_real_escape_string($_GET['codigo']);
            if(isset($_POST['acao']) && $_POST['acao'] =='update' ):
              $recuperNome = mysql_real_escape_string($_POST['nome']);
              $recuperEmail = mysql_real_escape_string($_POST['email']);
              $recuperSenha = mysql_real_escape_string($_POST['senha']);
              $recuperTipo  = mysql_real_escape_string($_POST['tipo']);
 
 $update = mysql_query(" UPDATE usuarios SET  NOME_USUARIO = '$recuperNome',EMAIL_USUARIO='$recuperEmail',
                SENHA_USUARIO='$recuperSenha',TIPO_USUARIO='$recuperTipo'
           WHERE ID_USUARIO ='$codigo_usuario'");
  if($update):
    echo '<script language="Javascript">
  alert("Dados atulizados com sucesso !")
</script>';
    else:
  echo '<script>
    alert("Não  foi  possivel atualizar seus Dados !")
    location.href=indexrestrito.php
            </script>';
      endif;
endif;
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Atualizar</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="#">
    </head>    
    <body>
      <?php
              
            //echo '<h1>'.$codigo_usuario.'</h1>';
            

             
              $sql = mysql_query("SELECT * FROM usuarios WHERE ID_USUARIO ='$codigo_usuario'");
              $result = mysql_num_rows($sql);
              if($result <= 0):
echo "Usuario não encontrado!";
exit();
              endif;

              
             $usuarios = mysql_fetch_assoc($sql);

             $nome = ($usuarios['NOME_USUARIO']!='') ? $usuarios['NOME_USUARIO'] :'';
             $email = ($usuarios['EMAIL_USUARIO']!='') ? $usuarios['EMAIL_USUARIO'] :'';
        ?>

        <form name="atualizar" action="" method="post">
           Nome: <input type="text" name="nome" required  value="<?php echo $nome;  ?>" > <br/>
           Email: <input type="email" name="email" required value="<?php echo$email; ?>"> <br/>
           Confirma Email : <input type="email" name="confirme_email" required><br/>
           Senha: <input type="password" name="senha" required > <br/>
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
             <input name="acao" type="hidden" value="update" >
           <input  type="submit" value="Atualizar dados" >
           </form>
        
        
    </body>
</html>