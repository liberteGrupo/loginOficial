<?php
if($_SERVER['REQUEST_METHOD'] == "POST");
if(isset($_POST['logar']));
if(isset($_POST['lembrar']));
$dias = time() +3600;
setcookie("login_digitado",$_POST['login'],$dias);
setcookie("senha_digitada",$_POST['senha'],$dias)
?>
<form action ="" method="POST">
    
    Login: <input type="text" name="login" value="<?php echo isset($_COOKIE['login_digitado']) ? $_COOKIE['login_digitado']: ""; ?>"></input>
        Senha: <input type="text" name="login" value="<?php echo isset($_COOKIE['senha_digitada']) ? $_COOKIE['senha_digitada']: ""; ?>"></input> 
        <input type="submit" name="logar" value="ok"></input>
        <br />
         <input type="radio" name="lembrar">  Lembrar login
        
        </form>