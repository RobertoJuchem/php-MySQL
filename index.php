<?php

#mysqli =======================================================================

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'shadow_dev';

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

if($conexao){
   echo 'Conectado com Sucesso!';
}

# Criando tabelas com PHP ########################################################################
#Tabela cursos (nome do curso, carga horária)

$query = 'CREATE TABLE CURSOS(
   id_curso int not null auto_increment,
   nome_curso varchar(255) not null,
   carga_horaria int not null,
   primary key(id_curso)
)';

$executar = mysqli_query($conexao, $query);


#Tabela alunos (nome do aluno, data nascimento) ###################################################

$query = 'CREATE TABLE ALUNOS(
   id_aluno int not null auto_increment,
   nome varchar(255) not null,
   data_nascimento date,
   primary key (id_aluno)
)';

$executar = mysqli_query($conexao,$query);


#Tabela alunos_cursos (aluno, curso) ###############################################################

$query = 'CREATE TABLE ALUNOS_CURSOS(
   id_alunos_cursos int not null auto_increment,
   id_aluno int not null,
   id_curso int not null,
   primary key (id_alunos_cursos)
)';

$executar = mysqli_query($conexao,$query);


#Inserindo dados nas tabelas *****************************************************************

$query = "INSERT INTO ALUNOS(nome, data_nascimento)
values('Alana', '1988-04-16')";

$executar = mysqli_query($conexao,$query);

$query = "INSERT INTO CURSOS(nome_curso, carga_horaria)
values('php + mysql', '8')";

$executar = mysqli_query($conexao,$query);


$query = "INSERT INTO CURSOS(nome_curso, carga_horaria)
value('javascript + react', '20')";

$executar = mysqli_query($conexao, $query);


$query = "INSERT INTO ALUNOS_CURSOS(id_aluno, id_curso)
value(1,2),(2,1)";

$executar = mysqli_query($conexao,$query);

mysqli_query($conexao, "INSERT INTO ALUNOS(nome, data_nascimento)
value('Isabela', '2007-06-27')
");

mysqli_query($conexao, "UPDATE ALUNOS SET NOME = 'Isabela Fell Juchem' where id_aluno = 4");

echo '<table border=1>
         <tr>
            <th>id</th>
            <th>Nome</th>
            <th>Data de nascimento</>
         </tr>   
';

$consulta = mysqli_query($conexao, "SELECT * FROM ALUNOS");

while($linha = mysqli_fetch_array($consulta)){
   echo '<tr>
            <td>'.$linha['id_aluno'].'</td>
            <td>'.$linha['nome'].'</td>
            <td>'.$linha['data_nascimento'].'</td>
         </tr>';
};

echo '</table>';


$consulta = mysqli_query($conexao, "SELECT * FROM ALUNOS");

?>
