<?php

$host = "localhost";
$database = "appphp";
$user = "root";
$password = "";



$conexao = mysqli_connect($host, $user, $password, $database); 

$query = "SELECT * FROM CURSOS";
$cursos = mysqli_query($conexao,$query);


$query = "SELECT * FROM ALUNOS";
$alunos = mysqli_query($conexao,$query);






