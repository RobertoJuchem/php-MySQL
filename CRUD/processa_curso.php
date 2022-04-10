<?php

include 'database.php';

$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];

$query = "INSERT INTO cursos(nome_curso, carga_horaria)
         values('$nome_curso', '$carga_horaria')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cursos');