<?php

include 'db.php';

$host = "localhost";
$database = "appphp";
$user = "root";
$password = "";

$conexao = mysqli_connect($host, $user, $password, $database);


$id_curso = $_POST['id_curso'];
$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];


$query = "UPDATE CURSOS SET nome_curso = '$nome_curso', carga_horaria = $carga_horaria WHERE id= $id_curso";


$executar = mysqli_query($conexao, $query);

if($executar){
    header("location:index.php?pagina=cursos");
}
