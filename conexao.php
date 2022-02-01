<?php 

$server = 'localhost';
$user = 'root';
$password = '';
$dbname = 'bootstrap';


$conn = mysqli_connect($server, $user, $password, $dbname);

if(!$conn) 
{
    die("A conexão com o banco de dados falhou!");
}
else {
    //echo "Conexão com o banco de dados realizada com sucesso!"; 
}


?>