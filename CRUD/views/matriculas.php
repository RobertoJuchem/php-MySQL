<a href="?pagina=inserir_matricula" class="linkInserirDados">Matricular aluno</a>

<table class="viewsTable" id="matriculas">

   <thead>
      <tr>
         <th>Nome do Aluno</th>
         <th>Curso Matriculado</th>
         <th>Deletar</th>
      </tr>
   </thead>

   <tbody>
      <?php

      while ($linha = mysqli_fetch_array($consulta_matriculas)) {
         echo '<tr>
               <td>' . $linha['nome'] . '</td>
               <td>' . $linha['nome_curso'] . '</td>'
      ?>

         <td><a href="deleta_matricula.php?id_matricula=<?php echo $linha['id_alunos_cursos'];?>">🗑️</a></td></tr>

      <?php
      };
      ?>
   </tbody>

</table>