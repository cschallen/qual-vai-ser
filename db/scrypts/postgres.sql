Create table Estabelecimento
(
	id_estabelecimento serial NOT NULL,
	descricao character varying(100) NOT NULL,
	rua character varying(100) NOT NULL,
	cep character varying(15) NOT NULL,
	cnpj character varying(25) NOT NULL UNIQUE,
	nome character varying(100) NOT NULL,
	id_dono Integer NOT NULL,

 	CONSTRAINT Estabelecimento_pkey primary key (id_estabelecimento),
	CONSTRAINT Estabelecimento_id_dono_fkey FOREIGN KEY (id_dono)
	REFERENCES Dono_Estabelecimento (id_dono)
)
WITH (
  OIDS=FALSE
);

Create table Dono_Estabelecimento
(
	id_dono serial NOT NULL,
	nome character varying(100) NOT NULL,
	cpf character varying(100) NOT NULL UNIQUE,
	email character varying(100) NOT NULL UNIQUE,
	CONSTRAINT Dono_Estabelecimentopkey primary key (id_dono)
)
WITH (
	OIDS=FALSE
);

Create table Cardapio
(
	id_cardapio serial NOT NULL UNIQUE,
	dia_semana character varying(100) NOT NULL,
	cardapio character varying(200) NOT NULL,
	id_estabelecimento Integer NOT NULL,

	CONSTRAINT Cardapio_pkey PRIMARY KEY (id_cardapio),
	CONSTRAINT cardapio_id_estabelecimento_fkey FOREIGN KEY(id_estabelecimento)
	REFERENCES Estabelecimento (id_estabelecimento)
)
WITH (
	OIDS=FALSE
);

Create table Avaliacao
(
	id_avaliacao serial NOT NULL,
	descricao character varying(200),
	nota integer NOT NULL,
	id_estabelecimento integer NOT NULL,

 CONSTRAINT Avaliacao_pkey primary key (id_avaliacao),
 CONSTRAINT Avaliacao_id_estabelecimento_fkey foreign key(id_estabelecimento)
 REFERENCES Estabelecimento (id_estabelecimento)
)
WITH (
  OIDS=FALSE
);
