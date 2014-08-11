l<?php
echo '<meta charset=utf-8>';
function  validaAutenticacao($tipoUser,$link)
{
    session_start();
if(!isset($_SESSION['email']))
    {
     session_destroy();
    echo '<script> 
         alert ("Voce nao efetuou o login");
         location.href="'.$link .'"   
</script>';
     
}  else {
/* fazer validadacao para que usuarios x nao entre em  ambiente de usuario y */
    if($tipoUser == 'RES'){
        include_once 'conexao/conecta.inc';
    }else{
        include_once '../conexao/conecta.inc';
    }
    $email =isset($_SESSION['email'])?$_SESSION['email']:null;
    $senha = isset($_SESSION['senha'])?$_SESSION['senha']:null;
   // $nomeUsuario = isset($_SESSION['nomeUsuario'])?$_SESSION['nomeUsuario']:null;
    $query =  "SELECT * FROM  usuarios WHERE EMAIL_USUARIO='$email'";
    $acao = mysql_query($query);
    $usuarios = mysql_fetch_array($acao);
    $senhaUsuario =  $usuarios['SENHA_USUARIO'];
    $emailUsuarios =  $usuarios['EMAIL_USUARIO'];
    $tipoUsuario   =  $usuarios['TIPO_USUARIO'];
   if($tipoUsuario  !== $tipoUser){
       session_destroy();
          echo '<script> 
          alert("Acesso negado para o seu tipo de usuario");
          location.href="'.$link .'"   
</script>';
      /// echo "<a href=$link> Acesso Negado para seu tipo de usuario </a>";  
        }elseif($email !== $emailUsuarios){
            session_destroy();
              echo '<script> 
         alert ("Acesso negado para o email de usuario invalido");
         location.href="'.$link .'"   
</script>';
        }elseif($senha !== $senhaUsuario)
            {
            session_destroy();
                  echo '<script> 
         alert ("Acesso negado senha incorreta!");
         location.href="'.$link .'"   
</script>';
           }
        }
   }


 