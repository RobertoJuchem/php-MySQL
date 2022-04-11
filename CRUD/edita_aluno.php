<?php

include 'database.php';

$id_aluno = $_POST['id_aluno'];

$nome_curso = $_POST['nome_aluno'];

$data_nascimento = $_POST['carga_horaria'];

$query = "UPDATE alunos set nome = '$nome_curso', data_nascimento = '$data_nascimento'
            where id_aluno = $id_aluno";

mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');

?>