/*
Created		16/05/2017
Modified		16/05/2017
Project		
Model			
Company		
Author		
Version		
Database		PostgreSQL 8.1 
*/


/* Create Tables */


Create table "Estabelecimento"
(
	"id_estabelecimento" Integer NOT NULL,
	"descricao" Varchar(500) NOT NULL,
	"rua" Varchar(200) NOT NULL,
	"cep" Varchar(20) NOT NULL,
	"cnpj" Varchar(20) NOT NULL UNIQUE,
	"nome" Varchar(200) NOT NULL,
	"id_dono" Integer NOT NULL,
 primary key ("id_estabelecimento")
) Without Oids;

Alter Table "Estabelecimento" add UNIQUE ("id_estabelecimento");

Create table "Dono_Estabelecimento"
(
	"id_dono" Integer NOT NULL,
	"nome" Varchar(200) NOT NULL,
	"cpf" Varchar(20) NOT NULL UNIQUE,
	"email" Varchar(80) NOT NULL UNIQUE,
 primary key ("id_dono")
) Without Oids;


Create table "Cardapio"
(
	"id_cardapio" Integer NOT NULL,
	"dia_semana" Varchar(20) NOT NULL,
	"cardapio" Varchar(1000) NOT NULL,
	"id_estabelecimento" Integer NOT NULL,
 primary key ("id_cardapio")
) Without Oids;

Alter Table "Cardapio" add UNIQUE ("id_cardapio");

Create table "Avaliacao"
(
	"id_avaliacao" Integer NOT NULL,
	"descricao" Varchar(500),
	"nota" Interval(1) NOT NULL,
	"id_estabelecimento" Integer NOT NULL,
 primary key ("id_avaliacao")
) Without Oids;

Alter Table "Avaliacao" add UNIQUE ("id_avaliacao");


/* Create Foreign Keys */

Alter table "Cardapio" add  foreign key ("id_estabelecimento") references "Estabelecimento" ("id_estabelecimento") on update restrict on delete restrict;

Alter table "Avaliacao" add  foreign key ("id_estabelecimento") references "Estabelecimento" ("id_estabelecimento") on update restrict on delete restrict;

Alter table "Estabelecimento" add  foreign key ("id_dono") references "Dono_Estabelecimento" ("id_dono") on update restrict on delete restrict;


