Create table DonoEstabelecimento
(
	id_dono_estabelecimento serial NOT NULL,
	nome character varying(100) NOT NULL,
	cpf character varying(15) NOT NULL UNIQUE,
	email character varying(100) NOT NULL UNIQUE,
	senha character varying(100) NOT NULL,
	tipo integer NOT NULL,

	CONSTRAINT DonoEstabelecimento_pkey primary key (id_dono_estabelecimento)
)
WITH(
	OIDS=FALSE
);

Create table Estabelecimento
(
	id_estabelecimento serial NOT NULL,
	descricao character varying(100) NOT NULL,
	rua character varying(100) NOT NULL,
	cep character varying(15) NOT NULL,
	lat numeric (10,8) NOT NULL,
	lng numeric (11,8) NOT NULL,
	cnpj character varying(25) NOT NULL UNIQUE,
	nome character varying(100) NOT NULL,
	id_dono_estabelecimento integer NOT NULL,

	CONSTRAINT Estabelecimento_pkey primary key (id_estabelecimento),
	CONSTRAINT Estabelecimento_id_dono_fkey foreign key(id_dono_estabelecimento)
	REFERENCES DonoEstabelecimento (id_dono_estabelecimento)
)
WITH (
	OIDS=FALSE
);

Create table Avaliacao
(
	id_avaliacao serial NOT NULL,
	nota integer NOT NULL,
	cpf character varying(15) NOT NULL,
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
	descricao character varying(500) NOT NULL,
	id_estabelecimento integer NOT NULL,

	CONSTRAINT Cardapio_pkey primary key (id_cardapio),
	CONSTRAINT Cardapio_id_estabelecimento_fkey foreign key(id_estabelecimento)
	REFERENCES Estabelecimento (id_estabelecimento)
)
WITH (
	OIDS=FALSE
);

-- inserts

INSERT INTO DonoEstabelecimento(nome, cpf, email, senha, tipo)
VALUES('Maria', '147.521.985-95', 'maria@marial.com', '045d92694b819b16e93b58d63565988e',1);

INSERT INTO DonoEstabelecimento(nome, cpf, email, senha, tipo)
VALUES('Jose', '124.521.693-25', 'jose@jose.com', '045d92694b819b16e93b58d63565988e',1);

INSERT INTO DonoEstabelecimento(nome, cpf, email, senha, tipo)
VALUES('Magnolia', '521.523.854-96', 'mag@mag.com', '7d0fdb9d1d1211ab739990af8ae959dd',1);



INSERT INTO Estabelecimento (descricao, rua, cep, lat, lng, cnpj, nome, id_dono_estabelecimento)
VALUES ('sempre bem animado esse lugar', 'rua dos manos', '91110-080', '-30.0016887', '-51.1362590', '777777', 'bar da maria', 1);

INSERT INTO Estabelecimento (descricao, rua, cep, lat, lng, cnpj, nome, id_dono_estabelecimento)
VALUES ('meu lugar é muito legal', 'rua dos caras', '90620-170', '-30.0509683','-51.2022014', '465789123', 'bar do zé', 2);

INSERT INTO Estabelecimento (descricao, rua, cep, lat, lng, cnpj, nome, id_dono_estabelecimento)
VALUES ('um lugar para comer', 'rua x', '90870-310', '-30.0697428', '-51.2114579', '465789121', 'bar da mag', 3);




INSERT INTO Cardapio (dia, id_estabelecimento, descricao)
VALUES (1, 1, 'beterraba, aipim, feijão');

INSERT INTO Cardapio (dia, id_estabelecimento, descricao)
VALUES (2, 2, 'arroz, batata frita');

INSERT INTO Cardapio (dia, id_estabelecimento, descricao)
VALUES (3, 2, 'xis, polenta frita');

INSERT INTO Cardapio (dia, id_estabelecimento, descricao)
VALUES (4, 1, 'macarrão, polenta cozida');

INSERT INTO Cardapio (dia, id_estabelecimento, descricao)
VALUES (5, 1, 'macarrão quatro queijos, hamburguer');

INSERT INTO Cardapio (dia, id_estabelecimento, descricao)
VALUES (6, 2, 'arroz de leite, ovo');

INSERT INTO Cardapio (dia, id_estabelecimento, descricao)
VALUES (7, 1, 'sagu, churrascco');

INSERT INTO Cardapio (dia, id_estabelecimento, descricao)
VALUES (3, 1, 'pudim, miojo');

INSERT INTO Cardapio (dia, id_estabelecimento, descricao)
VALUES (4, 2, 'carnes, mais carnes');



INSERT INTO Avaliacao (nota, id_estabelecimento, cpf)
VALUES (5, 1, '147.521.985-95');
INSERT INTO Avaliacao (nota, id_estabelecimento, cpf)
VALUES (3, 1, '425.552.175-17');
INSERT INTO Avaliacao (nota, id_estabelecimento, cpf)
VALUES (4, 3, '988.415.200-43');
INSERT INTO Avaliacao (nota, id_estabelecimento, cpf)
VALUES (1, 3, '860.545.477-63');
INSERT INTO Avaliacao (nota, id_estabelecimento, cpf)
VALUES (2, 2, '050.403.968-72');
INSERT INTO Avaliacao (nota, id_estabelecimento, cpf)
VALUES (3, 2,'848.226.833-38');
INSERT INTO Avaliacao (nota, id_estabelecimento, cpf)
VALUES (3, 2, '036.949.470-94');
