<?php

include 'db.php';

$host = "localhost";
$database = "appphp";
$user = "root";
$password = "";

$conexao = mysqli_connect($host, $user, $password, $database);

$id_aluno = $_POST['id'];
$nome_aluno = $_POST['nome_aluno'];
$data_nascimento = $_POST['data_nascimento'];


$query = "UPDATE ALUNOS SET nome_aluno = '$nome_aluno', data_nascimento = '$data_nascimento' WHERE id = $id_aluno";

$executar = mysqli_query($conexao, $query);

if($executar){
    header("location:index.php?pagina=alunos");
}