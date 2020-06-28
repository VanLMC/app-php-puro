<?php 

session_start();
//banco
include 'db.php';
include 'create_db.php';
//cabeçalho
include 'header.php';

//conteudo da pagina


//verifica se o usuario esta logado
if(isset($_SESSION['login']) == true){

    if(isset($_GET['pagina'])){
        $pagina = $_GET['pagina'];
    }
    else{
        $pagina = 'cursos';
    }

}
else {
    //se nao estiver logado volta a pagina inicial (de login)
    $pagina = 'home';
}


switch ($pagina) {
    case'cursos' : include 'views/cursos.php'; break;
    case'alunos' : include 'views/alunos.php'; break;
    case'matriculas' :include 'views/matriculas.php'; break;
    case'inserircurso' : include 'views/inserirCurso.php'; break;
    case'inseriraluno' :  include 'views/inserirAluno.php'; break;
    case'inserirmatricula' :  include 'views/inserirMatricula.php'; break;
    default : include 'views/home.php'; break;
    
}


//Rodapé
include 'footer.php';