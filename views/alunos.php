<a class="btn btn-primary mb-5" href="?pagina=inseriraluno">inserir novo aluno</a>
<table class="table">
    <tr>
        <th>Aluno</th>
        <th>Data de nascimento</th>
    </tr>
    
    
    <?php 
        while($linha = mysqli_fetch_array($alunos)){
            echo '<tr>
                    <td>'.$linha['nome_aluno'].'</td>';
            echo    '<td>'.$linha['data_nascimento'].'</td>';

            ?>
            <td> <a href="?pagina=inseriraluno&editar=<?php echo $linha['id'];?>" >Editar</a></td>
            <td> <a href="deleta_aluno.php?id_aluno=<?php echo $linha['id']; ?>">Deletar</a> </td> </tr> 
    <?php
        }
    ?>

    
</table>