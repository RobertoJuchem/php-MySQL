<?php if (!isset($_GET['editar'])) { ?>

   <h1>Adicione um Novo Curso</h1>
   <hr><br>
   <form method="post" action="processa_curso.php">
      <label><strong>Nome Curso:</strong></label>
      <br>
      <input type="text" name="nome_curso" placeholder="Insira o nome do curso">
      <br><br>
      <label><strong>Carga Horária:</strong></label>
      <br>
      <input type="text" name="carga_horaria" placeholder="Insira a carga horária">
      <br><br>
      <input type="submit" value="Adicionar curso" class="linkInserirDados">
   </form>

<?php

} else { ?>

   <?php while ($linha = mysqli_fetch_array($consulta_cursos)) { ?>
      <?php if ($linha['id_curso'] == $_GET['editar']) { ?>
         <h1>Editar Curso</h1>
         <hr><br>
         <form method="post" action="edita_curso.php">
            <input type="hidden" name="id_curso" value="<?php echo $linha['id_curso']; ?>">
            <label><strong>Nome Curso:</strong></label>
            <br>
            <input
               type="text"
               name="nome_curso"
               placeholder="Insira o nome do curso"
               value="<?php echo $linha['nome_curso']; ?>">
            <br><br>
            <label><strong>Carga Horária:</strong></label>
            <br>
            <input
               type="text"
               name="carga_horaria"
               placeholder="Insira a carga horária"
               value="<?php echo $linha['carga_horaria']; ?>">
            <br><br>
            <input type="submit" value="Editar curso" class="linkInserirDados">
         </form>

      <?php } ?>
   <?php } ?>
<?php } ?>