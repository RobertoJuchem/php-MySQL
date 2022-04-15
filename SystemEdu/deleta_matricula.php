<?php

include 'database.php';

$id_matricula = $_GET['id_matricula'];

$query = "DELETE from alunos_cursos where id_alunos_cursos = $id_matricula";

mysqli_query($conexao, $query);

header('location:index.php?pagina=matriculas');
