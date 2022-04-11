<?php 

include 'database.php';

$id_aluno = $_POST['selecione_aluno'];
$id_curso = $_POST['selecione_curso'];

$query = "INSERT INTO  alunos_cursos(id_aluno, id_curso)
         values('$id_aluno', '$id_curso')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=matriculas');

?>