   <?php 
   include 'conexao/conecta.inc';
include 'Bcrypt.class.php';
// Senha digitada pelo usuário (veio do formuário)
 if($_POST['logar']){
$senha = $_POST['senha'];
$email = $_POST['email'];
// Senha já criptografada (salva no banco)
$query = "SELECT * FROM usuarios WHERE EMAIL_USUARIO ='$email' ";
$result = mysql_query($query);
if(mysql_num_rows($result) === '0')
{
    echo 'senha Nao sencontrada';
}else{
$array = mysql_fetch_array($result);
$hash = $array['SENHA_USUARIO'];

if (Bcrypt::check($senha,$hash) === $hash) {
    header('Location:index.php');
}else {
    echo 'Senha incorreta!';
}
}
}

