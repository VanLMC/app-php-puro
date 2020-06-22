<?php

include 'db.php';

$host = "localhost";
$database = "appphp";
$user = "root";
$password = "";


$conexao = mysqli_connect($host, $user, $password, $database); 

$id_curso = $_GET['id_curso'];

$query = "DELETE FROM CURSOS WHERE ID=".$id_curso;
$executar = mysqli_query($conexao, $query);

if ($executar){
    //metodo header é usado para redirecionar
    header('location:index.php?pagina=cursos');
    
}