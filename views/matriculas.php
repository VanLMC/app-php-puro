<table class="table">
    <a class="btn btn-primary mb-5" href="?pagina=inserirmatricula">Inserir nova matricula</a>
    <tr>
        <th>Aluno</th>
        <th>Curso</th>
    </tr>
    
    
    <?php 

        $query = "SELECT T1.nome_aluno, T2.nome_curso FROM alunos_cursos T0
        INNER JOIN alunos T1 ON T0.id_aluno = T1.id
        INNER JOIN cursos T2 ON T0.id_curso = T2.id
        ORDER BY T0.id";

        $matriculas = mysqli_query($conexao,$query) or die( "erro".mysqli_error($conexao) );
        
        while($linha = mysqli_fetch_array($matriculas)){
            echo '<tr>
                    <td>'.$linha['nome_aluno'].'</td>';
            echo    '<td>'.$linha['nome_curso'].'</td>';
                  '</tr>';
        }
    ?>

    
</table>