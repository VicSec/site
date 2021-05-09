/* SQL Exemple*/

CREATE DATABASE testeDB;

CREATE TABLE testeTabela (
    id int AUTO_INCREMENT, 
    nome varchar(30),
    email varchar(30) NOT NULL,
    login varchar(30),
    senha varchar(30) NOT NULL,
);

ALTER TABLE testeTabela
ADD UNIQUE (email);

ALTER TABLE testeTabela
ADD PRIMARY KEY (id);

INSERT INTO testeTabela (nome, email, login, senha)
VALUES (Vitoria, virosa@email.com, rosa, 9485ez);

INSERT INTO testeTabela (nome, email, login, senha)
VALUES (Tcheska, IunaTreska@email.com, Treska, jfe82424);

SELECT * FROM testeTabela;