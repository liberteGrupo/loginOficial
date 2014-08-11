<?php
include_once 'conexao/conecta.inc';
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$confirme_email = $_REQUEST['confirme_email'];
$senha =  $_REQUEST['senha'];
$confirmeSenha = $_REQUEST['confirme_senha'];
$tipoUsuario = $_REQUEST['tipo'];
$cod_usuario= $_REQUEST['codigo'];
$sql = " UPDATE usuarios SET NOME_USUARIO = '$nome',EMAIL_USUARIO='$email',
  SENHA_USUARIO='$senha',TIPO_USUARIO='$tipoUsuario'
WHERE ID_USUARIO ='$cod_usuario'
    
";
 if(mysql_query($sql)){  
            echo '<script language="Javascript">
location.href="indexrestrito.php"
</script>';
}else{
    echo '<script>
    alert("Não  foi  possivel atualizar seus Dados !")
    location.href=indexrestrito.php
            </script>';
}   


/*if(mysql_query($sql)){
        echo 'Dados Atualizados com Sucesso !';
     echo '<script language="Javascript">
location.href="indexrestrito.php"
</script>';
         
                          }else{
                              echo mysql_error() . '<br/>'; 
                              echo '<script language="Javascript">
location.href="indexrestrito.php"
</script>';
                          }
        

}*/