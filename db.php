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


$query = "SELECT T1.nome_aluno, T2.nome_curso FROM alunos_cursos T0
            INNER JOIN alunos T1 ON T0.id_aluno = T1.id
            INNER JOIN cursos T2 ON T0.id_curso = T2.id
            ORDER BY T0.id";

$matriculas = mysqli_query($conexao,$query);


