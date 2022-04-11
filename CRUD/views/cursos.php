<a href="?pagina=inserir_curso" class="linkInserirDados">Inserir novo curso</a>

<table class="viewsTable">
   <tr>
      <th>Nome do Curso</th>
      <th>Carga Horária</th>
      <th>Editar</th>
      <th>Delete</th>
   </tr>

   <?php 
      while($linha = mysqli_fetch_array($consulta_cursos)){
         echo '
                  <td>'.$linha['nome_curso'].'</td>
                  <td>'.$linha['carga_horaria'].'</td>'
   ?>
   
   <td><a href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso']; ?>">🖉</a></td>
   <td><a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso']; ?>">🗑️</a></td></tr>

   <?php
      }
   ?>
</table>
