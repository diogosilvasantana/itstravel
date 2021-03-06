CREATE DATABASE ITSTRAVEL;

USE ITSTRAVEL;

CREATE TABLE VIAGENS (
	ID_VIAGEM INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NOME_VIAGEM VARCHAR(100) NOT NULL,
    FOTO_VIAGEM VARCHAR(200) NOT NULL,
    SUBTITULO_VIAGEM VARCHAR(100) NOT NULL,
    TIPO_VIAGEM VARCHAR(20) NOT NULL,
    DESC_VIAGEM TEXT NOT NULL,
    DATA_VIAGEM DATE NOT NULL,
    PRECO_VIAGEM DECIMAL(10,2) NOT NULL,
    PARCELAMENTO CHAR(2) NOT NULL
    LINK_VIAGEM VARCHAR(255) NOT NULL;
);

INSERT INTO VIAGENS (NOME_VIAGEM, FOTO_VIAGEM, SUBTITULO_VIAGEM, TIPO_VIAGEM, DESC_VIAGEM, DATA_VIAGEM, PRECO_VIAGEM, PARCELAMENTO, LINK_VIAGEM)
VALUES ('Beto Carrero World', 123456, 'teste','Passeio','testando viagem', '2018-08-19', '139.99', '5x', 'teste'); 

SELECT * FROM VIAGENS;

ALTER TABLE VIAGENS
ADD COLUMN FOTO_VIAGEM VARCHAR(200) NOT NULL
AFTER NOME_VIAGEM;

CREATE TABLE INFOS_EMPRESA(
	ID_EMPRESA INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	NOME VARCHAR(100) NOT NULL,
    CNPJ VARCHAR(30) NOT NULL,
    EMAIL VARCHAR(100),
    ENDERECO VARCHAR(100) NOT NULL,
    NUMERO VARCHAR(10) NOT NULL,
    BAIRRO VARCHAR(50) NOT NULL,
    CIDADE VARCHAR(50) NOT NULL,
    ESTADO CHAR(2) NOT NULL,
    CEP VARCHAR(9)
);

CREATE TABLE TELEFONE(

usuariosusuarios    TIPO ENUM('COM','CEL','RES') NOT NULL,
    NUMERO VARCHAR(10),
    ID_EMPRESA_TEL INT,
    FOREIGN KEY(ID_EMPRESA_TEL) REFERENCES INFOS_EMPRESA(ID_EMPRESA)
);

CREATE TABLE USUARIOS(
	ID_USUARIO INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NOME_USUARIO VARCHAR(100) NOT NULL,
    EMAIL_USUARIO VARCHAR(100) NOT NULL,
    LOGIN_USUARIO VARCHAR(30) NOT NULL,
    SENHA_USUARIO VARCHAR(100) NOT NULL
);

INSERT INTO USUARIOS (NOME_USUARIO, EMAIL_USUARIO, LOGIN_USUARIO, SENHA_USUARIO)
VALUES ('Usuario Exemplo', 'admin@admin.com.br', 'usuario', sha1(md5('admin')));




