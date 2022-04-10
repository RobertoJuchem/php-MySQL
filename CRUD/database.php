<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'escola_programacao';

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

$query = 'SELECT * from cursos';
$consulta_cursos = mysqli_query($conexao, $query);

$query = 'SELECT * from alunos';
$consulta_alunos = mysqli_query($conexao, $query);

$query = 'SELECT alunos.nome, cursos.nome_curso
          from alunos, cursos, alunos_cursos
          where alunos_cursos.id_aluno = alunos.id_aluno
          and alunos_cursos.id_curso = cursos.id_curso
';
$consulta_matriculas = mysqli_query($conexao, $query);