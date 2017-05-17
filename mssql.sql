/*
Created		16/05/2017
Modified		16/05/2017
Project		
Model		
Company		
Author		
Version		
Database		MS SQL 7 
*/


Create table [Estabelecimento] (
	[id_estabelecimento] Integer NOT NULL UNIQUE,
	[descricao] Varchar(500) NOT NULL,
	[rua] Varchar(200) NOT NULL,
	[cep] Varchar(20) NOT NULL,
	[cnpj] Varchar(20) NOT NULL UNIQUE,
	[nome] Varchar(200) NOT NULL,
	[id_dono] Integer NOT NULL,
Primary Key  ([id_estabelecimento])
) 
go

Create table [Dono_Estabelecimento] (
	[id_dono] Integer NOT NULL,
	[nome] Varchar(200) NOT NULL,
	[cpf] Varchar(20) NOT NULL UNIQUE,
	[email] Varchar(80) NOT NULL UNIQUE,
Primary Key  ([id_dono])
) 
go

Create table [Cardapio] (
	[id_cardapio] Integer NOT NULL UNIQUE,
	[dia_semana] Varchar(20) NOT NULL,
	[cardapio] Varchar(1000) NOT NULL,
	[id_estabelecimento] Integer NOT NULL,
Primary Key  ([id_cardapio])
) 
go

Create table [Avaliacao] (
	[id_avaliacao] Integer NOT NULL UNIQUE,
	[descricao] Varchar(500) NULL,
	[nota] Datetime NOT NULL,
	[id_estabelecimento] Integer NOT NULL,
Primary Key  ([id_avaliacao])
) 
go


Alter table [Cardapio] add  foreign key([id_estabelecimento]) references [Estabelecimento] ([id_estabelecimento]) 
go
Alter table [Avaliacao] add  foreign key([id_estabelecimento]) references [Estabelecimento] ([id_estabelecimento]) 
go
Alter table [Estabelecimento] add  foreign key([id_dono]) references [Dono_Estabelecimento] ([id_dono]) 
go


Set quoted_identifier on
go

Set quoted_identifier off
go


