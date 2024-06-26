create database aconchego;
use aconchego;

create table exame (
	id_exame bigint not null auto_increment,
	nome varchar(64) not null,
	data DATE not null,
	primary key (id_exame)
);

create table pessoa (
	id_pessoa bigint not null auto_increment,
	nome varchar(64) not null,
	genero varchar(64) not null,
	email varchar(64) not null,
	senha varchar(32) not null,	
	id_nivel_cocdutor bigint (19) not null,
	id_nivel_cocduzido bigint (19) not null,
foreign key id_nivel_condutor  references nivel (id_nivel),
foreign key id_nivel_professor references nivel (id_nivel),
	primary key (id_pessoa)
);
create table musica (
	id_musica bigint not null auto_increment,
	nome varchar(64) not null,
	primary key(id_musica)

);
create table habilidade (
	id_habilidade bigint not null auto_increment,
	nome varchar(64) not null,
	id_nivel BIGINT(19) not null,
	id_musica BIGINT(19) not null,
foreign key id_turma  references nivel (id_nivel);
foreign key id_musica references musica (id_musica);
primary key(id_habilidade)
);
create table avaliacao_corpo (
	id_avaliacao bigint not null auto_increment,
	id_habilidade BIGINT(19) not null,
	nota DOUBLE not null,
foreign key id_habilidade references habilidade (id_habilidade);
primary key(id_avaliacao_corpo)
);
create table avaliacao_cabecalho (
	id_avaliacao BIGINT(19) not null auto_increment,
	id_pessoa_aluno BIGINT(19) not null auto_increment,
	id_pessoa_professor BIGINT(19) not null auto_increment,
	id_nivel BIGINT(19) not null,
	id_exame BIGINT(19) not null,
	papel VARCHAR(50) not null,
foreign key  id_pessoa_aluno references pessoa (id_pessoa)
foreign key  id_turma  references nivel (id_nivel)
foreign key  id_pessoa_professor references pessoa (id_pessoa)
foreign key  id_exame references exame (id_exame)
primary key(id_avaliacao)
);


insert into exame (nome) values ('Estakazero');
insert into exame (nome) values ('Virgulino');

insert into pessoa (nome,genero, email, senha, id_nivel_condutor, id_nivel_cinduzido) values ('Cláudio Oliveira', 'masculino', 'claudio@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1);
insert into pessoa (nome,genero, email, senha, id_nivel_condutor, id_nivel_cinduzido) values ('Maria Santos', 'feminino', 'maria@gmail.com', '2d04dc20036dbd8313ed055', 2);
