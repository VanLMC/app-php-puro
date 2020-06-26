<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir Novo Curso</h1>
<form method="post" action="processa_curso.php">
    <br>
    <label for="">Nome Curso</label> <br>
    <input type="text" name="nome_curso" placeholder="insira o nome do curso"> <br>
    <label for="">Carga Horaria</label> <br>
    <input type="text" name="carga_horaria" placeholder="0"><br>

    <input type="submit" value="Inserir Curso">
</form>

<?php } else { ?>

<?php while($linha = mysqli_fetch_array($cursos)){  ?>
    <?php if($linha['id'] == $_GET['editar']) { ?>

        <h1>Editar Curso</h1>
    <form method="post" action="processa_curso.php">
        <br>
        <label for="">Nome Curso</label> <br>
        <input type="text" name="nome_curso" value="<?php echo $linha['nome_curso']; ?>" placeholder="insira o nome do curso"> <br>
        <label for="">Carga Horaria</label> <br>
        <input type="text" name="carga_horaria" value="<?php echo $linha['carga_horaria']; ?>" placeholder="0"><br>

        <input type="submit" value="Editar Curso">
    </form>

<?php } ?>
<?php  } ?>

<?php } ?>