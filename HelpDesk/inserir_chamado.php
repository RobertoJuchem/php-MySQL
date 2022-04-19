<?php

include 'database.php';

$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];

$query = "INSERT into formularios (titulo, categoria, descricao)
            values('$titulo', '$categoria', '$descricao')";

mysqli_query($conexao, $query);

header('location:abrir_chamado.php');
