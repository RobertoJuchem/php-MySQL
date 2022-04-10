<?php

include 'database.php';

include 'header.php';

// $pagina = $_GET['pagina'];

if(isset($_GET['pagina'])){
   $pagina = $_GET['pagina'];
} else{
   $pagina = 'home';
}

if($pagina === 'cursos'){
   include 'views/cursos.php';
}elseif($pagina === 'alunos'){
   include 'views/alunos.php';
}elseif($pagina === 'matriculas'){
   include 'views/matriculas.php';
}elseif($pagina === 'inserir_curso'){
   include 'views/inserir_curso.php';
}elseif($pagina === 'inserir_aluno'){
   include 'views/inserir_aluno.php';
}else{
   include './views/home.php';
}


include 'footer.php';

