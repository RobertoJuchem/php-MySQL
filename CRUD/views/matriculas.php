<table class="viewsTable">
   <tr>
      <th>Nome do Aluno</th>
      <th>Curso Matriculado</th>
   </tr>

   <?php

   while($linha = mysqli_fetch_array($consulta_matriculas)){
      echo '<tr>
            <td>'.$linha['nome'].'</td>
            <td>'.$linha['nome_curso'].'</td>
            </tr>';
   }

   ?>

</table>