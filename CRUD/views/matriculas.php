<a href="?pagina=inserir_matricula" class="linkInserirDados">Matricular aluno em um curso</a>

<table class="viewsTable">
   <tr>
      <th>Nome do Aluno</th>
      <th>Curso Matriculado</th>
   </tr>

   <?php

   while ($linha = mysqli_fetch_array($consulta_matriculas)) {
      echo '<tr>
               <td>' . $linha['nome'] . '</td>
               <td>' . $linha['nome_curso'] . '</td>'
   ?>

      <td><a href="deleta_matricula.php?id_matricula=<?php echo $linha['id_alunos_cursos']; ?>">🗑️</a></td>
      </tr>;

   <?php
   };
   ?>

</table>