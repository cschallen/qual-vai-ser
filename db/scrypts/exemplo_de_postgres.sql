CREATE TABLE evento
(
  idevento serial NOT NULL,
  nomepessoa character varying(100) NOT NULL,
  sexo character(1),
  dataevento date,
  idlivro integer NOT NULL,
  folha integer,
  termo integer,
  CONSTRAINT evento_pkey PRIMARY KEY (idevento),
  CONSTRAINT evento_idlivro_fkey FOREIGN KEY (idlivro)
      REFERENCES livro (idlivro) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT evento_sexo_check CHECK (sexo = ANY (ARRAY['M'::bpchar, 'F'::bpchar]))
)
WITH (
  OIDS=FALSE
);
ALTER TABLE evento
  OWNER TO postgres;
