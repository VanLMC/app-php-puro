<h1 style="text-align: center;">Inserir Novo matricula</h1>

<div class="container">
<form method="post" action="processa_matricula.php">
    <br>

        <select class="form-control" name="id_aluno" id="">
        <option value="">Selecione o Aluno</option>
            <?php 
                while($linha = mysqli_fetch_array($alunos)){
                    echo '<option value='. $linha['id'].'>'.$linha['nome_aluno'].'</option>';
                }
            ?>
        </select> <br><br>

<select class="form-control" name="id_curso" id="">
        <option value="">Selecione o Curso</option>
    <?php 
            while($linha = mysqli_fetch_array($cursos)){
                echo '<option value='. $linha['id'].'>'.$linha['nome_curso'].'</option>';
            }
        ?>

</select>   <br><br>


    <input class="btn btn-primary" type="submit" value="Inserir matricula">
</form>

</div>