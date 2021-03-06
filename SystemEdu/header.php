<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="./css/style.css">
   <script src="https://kit.fontawesome.com/ba0adca63c.js" crossorigin="anonymous"></script>
   <title>php + MySQL</title>
</head>

<body>
   <header>
      <div class="container">

         <div id="menu">
            <a href="?pagina=home">Home</a>

            <?php if (isset($_SESSION['login'])) { ?>
               <a href="?pagina=cursos">Cursos</a>
               <a href="?pagina=alunos">Alunos</a>
               <a href="?pagina=matriculas">Matrículas</a>
               <a href="logout.php">
                  <?php echo $_SESSION['usuario']; ?>(Sair)
               </a>
            <?php } ?>
         </div>
      </div>
   </header>

   <div id="conteudo" class="container">
