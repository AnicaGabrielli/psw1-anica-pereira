create database sisaluno;
use sisaluno;
create table aluno(

id smallint primary key auto_increment,
  nome varchar(100),
  idade  smallint,
  datanascimento  date,
  endereco varchar(100),
   estatus   char(2)

);
create table professor(
  id smallint primary key auto_increment,
  nome varchar(100),
  cpf varchar(11),
  idade smallint,
  datanascimento  date,
  endereco varchar(100),
   estatus   bool
);

create table disciplina( 
   id smallint primary key auto_increment,
  nomedisciplina varchar(100),
  ch varchar(3),
  semestre varchar(5),
  idprofessor smallint
  );
  
insert INTO A	
  
  select * from aluno;
