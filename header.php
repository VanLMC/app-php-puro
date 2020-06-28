<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos PHP&MYSQL</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
    <header>
        <div class="container">
            <a href="?pagina=home">
                <img src="img/logo.png" alt="" title="Logo">
            </a>
            <div id="menu">
                    <a href="?pagina=cursos">Cursos</a>
                    <a href="?pagina=alunos">Alunos</a>
                    <a href="?pagina=matriculas">Matrículas</a>

                    <?php if (isset($_SESSION['login']) ){ ?>
                    <a href="logout.php">
                    <?php echo $_SESSION['usuario'] ?>    
                    (Sair)</a>
                     <?php } ?>
            </div>

        </div>
    </header>

    <div id="conteudo" class="container"> <!-- essa div é aberta aqui mas será continuada no home e fechada no footer -->

