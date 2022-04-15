<?php if (!isset($_GET['editar'])) { ?>

   <h1>Inscreva o novo aluno</h1>
   <hr><br>
   <form method="post" action="processa_aluno.php">
      <label><strong>Nome Aluno:</strong></label>
      <br>
      <input type="text" name="nome_aluno" placeholder="Insira o nome do aluno">
      <br><br>
      <label><strong>Data Nascimento:</strong></label>
      <br>
      <input class="teste" type="text" name="data_nascimento" placeholder="Insira a data de nascimento">
      <br><br>
      <input type="submit" value="Adicionar aluno" class="linkInserirDados">
   </form>

<?php

} else { ?>

   <?php while ($linha = mysqli_fetch_array($consulta_alunos)) { ?>
      <?php if ($linha['id_aluno'] == $_GET['editar']) { ?>

         <h1>Editar aluno</h1>
         <hr><br>
         <form method="post" action="edita_aluno.php">
            <input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno']; ?>">
            <label><strong>Nome Aluno:</strong></label>
            <br>
            <input type="text" name="nome_aluno" placeholder="Insira o nome do aluno" value="<?php echo $linha['nome']; ?>">
            <br><br>
            <label><strong>Data Nascimento:</strong></label>
            <br>
            <input type="text" name="data_nascimento" placeholder="Insira a data de nascimento" value="<?php echo $linha['data_nascimento']; ?>">
            <br><br>
            <input type="submit" value="Editar aluno" class="linkInserirDados">
         </form>

      <?php } ?>
   <?php } ?>
<?php } ?>
