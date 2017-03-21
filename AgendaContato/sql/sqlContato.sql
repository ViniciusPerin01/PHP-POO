CREATE DATABASE agenda;


CREATE TABLE contato (

 id int not null auto_increment primary key,
 nome varchar(200) not null,
 email varchar(150) not null,
 celular varchar(30),
 telefone varchar(30),
 endereco varchar(300)
);


INSERT INTO contato( nome, email, celular, telefone, endereco )
VALUES (
"NOME DE TESTE", "nomedeteste@gmail.com", "(41) 99785-1020", "(41) 3524-7896", "RUA TESTE"
);

