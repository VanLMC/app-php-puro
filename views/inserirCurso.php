<?php if(!isset($_GET['editar'])){ ?>

<h1 style="text-align: center;">Inserir Novo Curso</h1>
<div class="container">
    <form method="post" action="processa_curso.php">
        <br>
        <div class="form-group">
            <label for="">Nome Curso</label> <br>
            <input type="text" class="form-control" name="nome_curso" placeholder="insira o nome do curso"> <br>
        </div>
        <div class="form-group">
            <label for="">Carga Horaria</label> <br>
            <input type="text" class="form-control" name="carga_horaria" placeholder="0"><br>
        </div>

        <input class="btn btn-primary" type="submit" value="Inserir Curso">
    </form>
</div>

<?php } else { ?>

<?php while($linha = mysqli_fetch_array($cursos)){  ?>
    <?php if($linha['id'] == $_GET['editar']) { ?>

        <h1>Editar Curso</h1>
    <div class="container">
        <form  method="post" action="edita_curso.php">
            <br>
            <input type="hidden" name="id_curso" value="<?php echo $linha['id']; ?>" >
            <label for="">Nome Curso</label> <br>
            <input type="text" class="form-control" name="nome_curso" value="<?php echo $linha['nome_curso']; ?>" placeholder="insira o nome do curso"> <br>
            <label for="">Carga Horaria</label> <br>
            <input type="text" class="form-control" name="carga_horaria" value="<?php echo $linha['carga_horaria']; ?>" placeholder="0"><br>

            <input type="submit" value="Editar Curso">
        </form>
    </div>

<?php } ?>
<?php  } ?>

<?php } ?>