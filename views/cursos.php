<a href="?pagina=inserircurso">Inserir Novo Curso</a>
<table >
    <tr>
        <th>Curso</th>
        <th>Carga Horaria</th>
        <th>Deletar</th>
    </tr>
    
    
    <?php 
        while($linha = mysqli_fetch_array($cursos)){
            echo '<tr>
                    <td>'.$linha['nome_curso'].'</td>';
            echo    '<td>'.$linha['carga_horaria'].'</td>';
            
                  
        ?>
        <td> <a href="deleta_curso.php?id_curso=<?php echo $linha['id']; ?>">Deletar</a> </td> </tr>
    <?php
        }
    ?>
    

    
</table>