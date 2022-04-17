<?php

include 'database.php';

$usuario = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);

$query = "SELECT * from usuarios
            where email = '$usuario'
            and senha = '$senha'  
";

$consulta = mysqli_query($conexao, $query);

if(mysqli_num_rows($consulta) == 1){
   session_start();
   $_SESSION['valida_login'] = true;
   $_SESSION['email'] = $usuario;
   header('location:home.php');
}else{
   header('location:index.php?loginInvalido=erro');
}
