<?php 

include_once("conexao.php");

//Pegar as informações do input
$nome = mysqli_real_escape_string($conn, $_POST["nome"]);
$endereco = mysqli_real_escape_string($conn, $_POST["endereco"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$senha = mysqli_real_escape_string($conn, $_POST["senha"]);

//Montar a instrução do banco de dados
$queryCad = " INSERT INTO usuario (nome, endereco, email, senha) VALUES ('$nome', '$endereco', '$email', '$senha')";

//Executar e verificar se a instrução deu certo
if(!mysqli_query($conn, $queryCad)) {
    die("Falha no cadastro de usuário!");
}


$id = mysqli_insert_id($conn);

$queryLogin = " INSERT INTO login_usuario (email, senha, idUsuario) VALUES ('$email', '$senha', '$id')";

if(!mysqli_query($conn, $queryLogin)) {
    
    die("Falha no cadastro de login!");
}
else {
    header("Location: login.php");
}

mysqli_close($conn);



?>