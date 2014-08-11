<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

?>
<tr width="400px" border="1">
<td>NOME<td>
<td>EMAIL<td>
<td>SENHA<td>
</tr>
<tr>
<?php 
include 'conexao/conecta.inc';
$sql = "SELECT * FROM usuarios";
$result = mysql_query($sql);
?>
<table bgcolor="#CCC">
<tr>
<td>NOME</td>
<td>EMAIL</td>
<td>SENHA</td>
</tr>
<?php
while ($linha = mysql_fetch_assoc($result)){
	$nome  =  $linha['NOME_USUARIO'];
?>
<tr>
<td><?php echo$nome;?><td>
<td><?php echo $linha['EMAIL_USUARIO'];?><td>
<td><?php echo $linha['SENHA_USUARIO'];?><td>
</td>
<?php
}
?>
</tr>
</table>
</body>
</html>