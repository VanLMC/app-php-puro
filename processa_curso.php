<?php

include 'db.php';

$host = "localhost";
$database = "appphp";
$user = "root";
$password = "";


$conexao = mysqli_connect($host, $user, $password, $database); 


$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];

$query = "INSERT INTO CURSOS (nome_curso, carga_horaria) VALUES ('$nome_curso', $carga_horaria.)";
$executar = mysqli_query($conexao, $query);

if ($executar){
    //metodo header é usado para redirecionar
    header('location:index.php?pagina=cursos');
    
}