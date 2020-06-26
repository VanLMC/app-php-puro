<?php

include 'db.php';

$host = "localhost";
$database = "appphp";
$user = "root";
$password = "";


$conexao = mysqli_connect($host, $user, $password, $database); 


$nome_aluno = $_POST['nome_aluno'];
$data_nascimento = $_POST['data_nascimento'];

$query = "INSERT INTO ALUNOS (nome_aluno, data_nascimento) VALUES ('$nome_aluno', '$data_nascimento')";
$executar = mysqli_query($conexao, $query);

echo $query;

if ($executar){
    //metodo header é usado para redirecionar
    header('location:index.php?pagina=alunos');
    
}

