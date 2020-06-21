<table >
    <tr>
        <th>Aluno</th>
        <th>Curso</th>
    </tr>
    
    
    <?php 
        while($linha = mysqli_fetch_array($matriculas)){
            echo '<tr>
                    <td>'.$linha['nome_aluno'].'</td>';
            echo    '<td>'.$linha['nome_curso'].'</td>
                  </tr>';
        }
    ?>

    
</table>