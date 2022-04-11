<a href="?pagina=inserir_aluno" class="linkInserirDados">Inserir novo aluno</a>

<table class="viewsTable" id="alunos">

   <thead>
      <tr>
         <th>Nome do Aluno</th>
         <th>Data de Nascimento</th>
         <th>Editar</th>
         <th>Deletar</th>
      </tr>
   </thead>

   <tbody>
      <?php

      while ($linha = mysqli_fetch_array($consulta_alunos)) {
         echo '<tr>
                        <td>' . $linha['nome'] . '</td>
                        <td>' . $linha['data_nascimento'] . '</td>';
      ?>

         <td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno']; ?>">🖉</a></td>
         <td><a href="deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno']; ?>">🗑️</a></td>
         </tr>

      <?php
      }
      ?>

   </tbody>

</table>