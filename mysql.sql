CREATE DATABASE if not EXISTS salao
DEFAULT CHARACTER set utf8
DEFAULT COLLATE utf8_general_ci

---

CREATE TABLE if not EXISTS usuarios (
	id_usuario int not null AUTO_INCREMENT,
	user varchar(20) not null unique,
	senha varchar(8) not null,
	PRIMARY KEY (id_usuario)
)
DEFAULT charset=utf8;

---

CREATE TABLE if not EXISTS profissionais (
	id_profissional int not null AUTO_INCREMENT,
	nome_profissional varchar(60) not null,
	email_profissional varchar(80) not null unique,
	telefone_profissional varchar(15) not null,
	PRIMARY KEY (id_profissional)
)
DEFAULT charset=utf8;

---

CREATE TABLE if not EXISTS servicos (
	id_servico int not null AUTO_INCREMENT,
	nome_servico varchar(30) not null,
	descricao_servico varchar(100) not null unique,
	preco_servico varchar(10) not null,
	tempomedio_servico varchar(10) not null,
	PRIMARY KEY (id_servico)
)
DEFAULT charset=utf8;

---

CREATE TABLE if not EXISTS salao (
	id_salao int not null AUTO_INCREMENT,
	nome_salao varchar(80) not null,
	documento_salao varchar(15) not null,
	endereco_salao varchar(100) not null,
	telefone_salao varchar(15) not null,
	email_salao varchar(80) not null,
	PRIMARY KEY (id_salao)
)
DEFAULT charset=utf8;

---

insert into usuarios values (1, 'mira', '123456');
insert into usuarios (user, senha) values ('romulo', '123456');