<h1>Fazer matrícula</h1>

<form method="POST" action="processa_matricula.php">

   <p style="margin: 10px 0 5px; font-size:larger;">Selecione o aluno</p>

   <select name="selecione_aluno">
      <option>Selecione um aluno</option>
      <?php
      while ($linha = mysqli_fetch_array($consulta_alunos)) {
         echo '<option value="' . $linha['id_aluno'] . '">
               ' . $linha['nome'] . '                 
               </option>';
      }
      ?>

   </select>

   <br><br>

   <p style="margin: 10px 0 5px; font-size:larger;">Selecione o curso</p>
   <select name="selecione_curso">
      <option>Selecione um curso</option>
      <?php

      while ($linha = mysqli_fetch_array($consulta_cursos)) {
         echo '<option value= "' . $linha['id_curso'] . '">
               ' . $linha['nome_curso'] . '
               </option>';
      }

      ?>
   </select>

   <br><br>

   <input type="submit" value="Matricular aluno no curso" class="linkInserirDados">

</form>