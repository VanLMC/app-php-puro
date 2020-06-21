<table >
    <tr>
        <th>Aluno</th>
        <th>Data de nascimento</th>
    </tr>
    
    
    <?php 
        while($linha = mysqli_fetch_array($alunos)){
            echo '<tr>
                    <td>'.$linha['nome_aluno'].'</td>';
            echo    '<td>'.$linha['data_nascimento'].'</td>
                  </tr>';
        }
    ?>

    
</table>