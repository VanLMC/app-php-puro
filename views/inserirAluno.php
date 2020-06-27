<?php if(!isset($_GET['editar'])) {?>


<h1>Inserir Novo Aluno</h1>
<form method="post" action="processa_aluno.php">
    <br>
    <label for="">Nome Aluno</label> <br>
    <input type="text" name="nome_aluno" placeholder="insira o nome do aluno"> <br>
    <label for="">Data de nascimento</label> <br>
    <input type="date" name="data_nascimento" placeholder="0"><br>

    <input type="submit" value="Inserir Aluno">
</form>

<?php } else { ?>

    
    <?php while($linha = mysqli_fetch_array($alunos)) { if($linha['id'] == $_GET['editar']){ ?>

    <form method="post" name="id" action="edita_aluno.php">
    <br>
    <input type="hidden" name="id" value="<?php echo $linha['id'] ?>">
    <label for="">Nome Aluno</label> <br>
    <input type="text" name="nome_aluno" value="<?php echo $linha['nome_aluno'] ?>" placeholder="insira o nome do aluno"> <br>
    <label for="">Data de nascimento</label> <br>

    <input type="date" name="data_nascimento" value="<?php $linha['data_nascimento'];?> " placeholder="0"><br>

    <input type="submit" value="Inserir Aluno">

    <?php }} ?>

</form>




<?php } ?>