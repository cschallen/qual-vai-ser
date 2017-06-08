Create table Estabelecimento
(
	id_estabelecimento serial NOT NULL,
	descricao character varying(100) NOT NULL,
	rua character varying(100) NOT NULL,
	cep character varying(15) NOT NULL,
	cnpj character varying(25) NOT NULL UNIQUE,
	nome character varying(100) NOT NULL,

 	CONSTRAINT Estabelecimento_pkey primary key (id_estabelecimento)
)
WITH (
  OIDS=FALSE
);

Create table Avaliacao
(
	id_avaliacao serial NOT NULL,
	nota integer NOT NULL,
	id_estabelecimento integer NOT NULL,

 CONSTRAINT Avaliacao_pkey primary key (id_avaliacao),
 CONSTRAINT Avaliacao_id_estabelecimento_fkey foreign key(id_estabelecimento)
 REFERENCES Estabelecimento (id_estabelecimento)
)
WITH (
  OIDS=FALSE
);

Create table Cardapio
(
	id_cardapio serial NOT NULL,
	dia integer NOT NULL,
	id_estabelecimento integer NOT NULL,

 CONSTRAINT Cardapio_pkey primary key (id_cardapio),
 CONSTRAINT Cardapio_id_estabelecimento_fkey foreign key(id_estabelecimento)
 REFERENCES Estabelecimento (id_estabelecimento)
)
WITH (
  OIDS=FALSE
);

-- inserts

INSERT INTO Estabelecimento (descricao, rua, cep, cnpj, nome, cardapio)
VALUES ('sempre bem animado esse lugar', 'rua dos manos', '875645', '777777', 'bar do tonhao');

INSERT INTO Estabelecimento (descricao, rua, cep, cnpj, nome, cardapio)
VALUES ('meu lugar é muito legal', 'rua dos caras', '91120564', '465789123', 'bar do zé');

INSERT INTO Cardapio (dia, id_estabelecimento)
VALUES (1, 1);

INSERT INTO Cardapio (dia, id_estabelecimento)
VALUES (2, 2);

INSERT INTO Cardapio (dia, id_estabelecimento)
VALUES (3, 2);

INSERT INTO Cardapio (dia, id_estabelecimento)
VALUES (4, 1);

INSERT INTO Cardapio (dia, id_estabelecimento)
VALUES (5, 1);

INSERT INTO Cardapio (dia, id_estabelecimento)
VALUES (6, 2);

INSERT INTO Cardapio (dia, id_estabelecimento)
VALUES (7, 1);

INSERT INTO Cardapio (dia, id_estabelecimento)
VALUES (3, 1);

INSERT INTO Cardapio (dia, id_estabelecimento)
VALUES (4, 2);


INSERT INTO Avaliacao (nota, id_estabelecimento)
VALUES (5, 1);
INSERT INTO Avaliacao (nota, id_estabelecimento)
VALUES (3, 1);
INSERT INTO Avaliacao (nota, id_estabelecimento)
VALUES (5, 1);
INSERT INTO Avaliacao (nota, id_estabelecimento)
VALUES (3, 1);
INSERT INTO Avaliacao (nota, id_estabelecimento)
VALUES (4, 1);
INSERT INTO Avaliacao (nota, id_estabelecimento)
VALUES (1, 1);
INSERT INTO Avaliacao (nota, id_estabelecimento)
VALUES (2, 2);
INSERT INTO Avaliacao (nota, id_estabelecimento)
VALUES (3, 2);
INSERT INTO Avaliacao (nota, id_estabelecimento)
VALUES (3, 2);
INSERT INTO Avaliacao (nota, id_estabelecimento)
VALUES (5, 2);
INSERT INTO Avaliacao (nota, id_estabelecimento)
VALUES (5, 2);
INSERT INTO Avaliacao (nota, id_estabelecimento)
VALUES (5, 2);
INSERT INTO Avaliacao (nota, id_estabelecimento)
VALUES (4, 2);
