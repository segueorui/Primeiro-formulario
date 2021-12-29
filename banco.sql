drop database if exists formulario;
create database if not exists formulario;
use formulario;

create table cadastro(
	PersonID int,
	nome varchar(80),
	email varchar(80),
	estadoCivil varchar(10),
	nomeConjuge varchar(80)
);