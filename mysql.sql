/*
Created		16/05/2017
Modified		16/05/2017
Project		
Model		
Company		
Author		
Version		
Database		mySQL 5 
*/


Create table Estabelecimento (
	id_estabelecimento Int NOT NULL,
	descricao Varchar(500) NOT NULL,
	rua Varchar(200) NOT NULL,
	cep Varchar(20) NOT NULL,
	cnpj Varchar(20) NOT NULL,
	nome Varchar(200) NOT NULL,
	id_dono Int NOT NULL,
	UNIQUE (id_estabelecimento),
	UNIQUE (cnpj),
 Primary Key (id_estabelecimento)) ENGINE = MyISAM;

Create table Dono_Estabelecimento (
	id_dono Int NOT NULL,
	nome Varchar(200) NOT NULL,
	cpf Varchar(20) NOT NULL,
	email Varchar(80) NOT NULL,
	UNIQUE (cpf),
	UNIQUE (email),
 Primary Key (id_dono)) ENGINE = MyISAM;

Create table Cardapio (
	id_cardapio Int NOT NULL,
	dia_semana Varchar(20) NOT NULL,
	cardapio Varchar(1000) NOT NULL,
	id_estabelecimento Int NOT NULL,
	UNIQUE (id_cardapio),
 Primary Key (id_cardapio)) ENGINE = MyISAM;

Create table Avaliacao (
	id_avaliacao Int NOT NULL,
	descricao Varchar(500),
	nota Datetime NOT NULL,
	id_estabelecimento Int NOT NULL,
	UNIQUE (id_avaliacao),
 Primary Key (id_avaliacao)) ENGINE = MyISAM;


Alter table Cardapio add Foreign Key (id_estabelecimento) references Estabelecimento (id_estabelecimento) on delete  restrict on update  restrict;
Alter table Avaliacao add Foreign Key (id_estabelecimento) references Estabelecimento (id_estabelecimento) on delete  restrict on update  restrict;
Alter table Estabelecimento add Foreign Key (id_dono) references Dono_Estabelecimento (id_dono) on delete  restrict on update  restrict;


