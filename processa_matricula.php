<?php

include 'db.php';

$host = "localhost";
$database = "appphp";
$user = "root";
$password = "";


$conexao = mysqli_connect($host, $user, $password, $database); 


$id_aluno = $_POST['id_aluno'];
$id_curso = $_POST['id_curso'];

$query = "INSERT INTO ALUNOS_CURSOS (id_aluno, id_curso) VALUES ('$id_aluno', $id_curso.)";
$executar = mysqli_query($conexao, $query);

if ($executar){
    //metodo header é usado para redirecionar
    header('location:index.php?pagina=matriculas');
    
}