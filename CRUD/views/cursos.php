<a href="?pagina=inserir_curso" class="linkInserirDados">Inserir novo curso</a>

<table class="viewsTable">
   <tr>
      <th>Nome do Curso</th>
      <th>Carga Horária</th>
   </tr>

   <?php 
      while($linha = mysqli_fetch_array($consulta_cursos)){
         echo '<tr>
                  <td>'.$linha['nome_curso'].'</td>
                  <td>'.$linha['carga_horaria'].'</td>
               </tr>';
      }
   ?>
</table>