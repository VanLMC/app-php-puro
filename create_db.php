<?php

$host = "localhost";
$database = "appphp";
$user = "root";
$password = "";


$conexao = mysqli_connect($host, $user, $password, $database); 

$query = "CREATE TABLE IF NOT EXISTS ALUNOS(
    id INT PRIMARY KEY auto_increment,
    nome_aluno VARCHAR(155)  not null,
    data_nascimento VARCHAR(155)  not null)";



$executar = mysqli_query($conexao,$query);


$query = "CREATE TABLE IF NOT EXISTS CURSOS (
    id INT PRIMARY KEY auto_increment,
    nome_curso VARCHAR(155) not null,
    carga_horaria VARCHAR(155) not null)";

$executar = mysqli_query($conexao,$query);

$query = "CREATE TABLE ALUNOS_CURSOS(
    id int not null auto_increment,
    id_aluno int not null,
    id_curso int not null,
    primary key(id)
)
";

$executar = mysqli_query($conexao,$query);


$query = "CREATE TABLE USUARIOS(
    id INT PRIMARY KEY auto_increment,
    usuario varchar(255) not null unique,
    senha varchar(255) not null
)
";

$executar = mysqli_query($conexao,$query);


/*
$query = "SELECT * FROM CURSOS";
$cursos = mysqli_query($conexao,$query);


$query = "SELECT * FROM ALUNOS";
$alunos = mysqli_query($conexao,$query);



$query = "SELECT T1.nome_aluno, T2.nome_curso FROM alunos_cursos T0
            INNER JOIN alunos T1 ON T0.id_aluno = T1.id
            INNER JOIN cursos T2 ON T0.id_curso = T2.id
            ORDER BY T0.id";
*/

$matriculas = mysqli_query($conexao,$query);


