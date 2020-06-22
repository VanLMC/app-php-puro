<h1>Inserir Novo matricula</h1>
<form method="post" action="processa_matricula.php">
    <br>

        <select name="id_aluno" id="">
        <option value="">Selecione o Aluno</option>
            <?php 
                while($linha = mysqli_fetch_array($alunos)){
                    echo '<option value='. $linha['id'].'>'.$linha['nome_aluno'].'</option>';
                }
            ?>
        </select> <br><br>

<select name="id_curso" id="">
        <option value="">Selecione o Curso</option>
    <?php 
            while($linha = mysqli_fetch_array($cursos)){
                echo '<option value='. $linha['id'].'>'.$linha['nome_curso'].'</option>';
            }
        ?>

</select>   <br><br>


    <input type="submit" value="Inserir matricula">
</form>