<table >
    <tr>
        <th>Curso</th>
        <th>Carga Horaria</th>
    </tr>
    
    
    <?php 
        while($linha = mysqli_fetch_array($cursos)){
            echo '<tr>
                    <td>'.$linha['nome_curso'].'</td>';
            echo    '<td>'.$linha['carga_horaria'].'</td>
                  </tr>';
        }
    ?>

    
</table>