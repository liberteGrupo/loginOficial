<?php
echo '<meta charset=utf-8>';
$hostName ='localhost';
$userName = 'root';
$passHost = '12345678';
$dbName ='loginoficial3f' ;

$connection = mysql_connect($hostName,$userName,$passHost);

if($connection === FALSE){
    echo'nao foi possivel conectar com o banco de dados';
    mysql_error(); 
}else{
    $db_select = mysql_select_db($dbName,$connection);
    if(!$db_select){
    echo 'Nao foi possivel conectar com o banco de dados selecinado'.$dbName;
    mysql_error();
        
    }
    
}