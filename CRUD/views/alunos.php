<a href="?pagina=inserir_aluno" class="linkInserirDados">Inserir novo aluno</a>

<table class="viewsTable">

   <tr>
      <th>Nome do Aluno</th>
      <th>Data de Nascimento</th>
   </tr>

   <?php

      while($linha = mysqli_fetch_array($consulta_alunos)){
         echo '<tr>
                  <td>'.$linha['nome'].'</td>
                  <td>'.$linha['data_nascimento'].'</td>
               </tr>';
      }

   ?>

</table>