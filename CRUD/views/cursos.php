<a href="?pagina=inserir_curso" class="linkInserirDados">Inserir novo curso</a>

<table class="viewsTable" id="cursos">
   <thead>
      <tr>
         <th>Nome do Curso</th>
         <th>Carga Horária</th>
         <th>Editar</th>
         <th>Delete</th>
      </tr>
   </thead>

   <tbody>
      <?php
      while ($linha = mysqli_fetch_array($consulta_cursos)) {
         echo '
                     <td>' . $linha['nome_curso'] . '</td>
                     <td>' . $linha['carga_horaria'] . '</td>'
      ?>

         <td>
            <a href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso']; ?>">
               <span style="color:#262626">
                  <i class="fa-solid fa-user-pen"></i>
               </span>
            </a>
         </td>
         <td>
            <a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso']; ?>">
               <span style="color: #262626;">
                  <i class="fa-solid fa-trash-can"></i>
               </span>
            </a>
         </td>
         </tr>

      <?php
      }
      ?>
   </tbody>
</table>
