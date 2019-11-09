CREATE TABLE funcionarios (
  ID INT(11) NOT NULL AUTO_INCREMENT,
  FUNCIONARIO VARCHAR(255) NOT NULL,
  SENHA VARCHAR(255) NOT NULL,
  PRIMARY KEY(ID)
);

CREATE TABLE leitores (
  id_leitor INT(11) NOT NULL AUTO_INCREMENT,
  nome_leitor VARCHAR(255) NOT NULL,
  rg_leitor INT(7) NOT NULL,
  endereco_leitor VARCHAR(255) NOT NULL,
  email_leitor VARCHAR(255) NOT NULL,
  data_nascimento DATE NOT NULL,
  telefone_leitor INT(11) NOT NULL,
  PRIMARY KEY(id_leitor)
);

CREATE TABLE leitores_livros (
  id_leitor_livro INT(11) NOT NULL AUTO_INCREMENT,
  id_leitor INT(11) NOT NULL,
  id_livro INT(11) NOT NULL,
  PRIMARY KEY(id_leitor_livro)
);

CREATE TABLE livros (
  id_livro INT(11) NOT NULL AUTO_INCREMENT,
  nome_livro VARCHAR(255) NOT NULL,
  genero_livro VARCHAR(255) NOT NULL,
  editora_livro VARCHAR(255) NOT NULL,
  autor_livro VARCHAR(255) NOT NULL,
  quant_exemp INT(255) NOT NULL,
  PRIMARY KEY(id_livro)
);


