create database ForcaDeHabito;
-- drop database ForcaDeHabito;
use ForcaDeHabito;
ALTER DATABASE `ForcaDeHabito` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci; 
create table usuario(
idUsuario int primary key auto_increment,
nomeUsuario varchar(150),
loginUsuario varchar(100),
senhaUsuario varchar(50),
perfilUsuario varchar(10)
);

create table cliente(
idCliente int primary key auto_increment,
nomeCliente varchar(150),
perfilCliente varchar(20),
idCategoria int
);
create table categoria(
idCategoria int primary key auto_increment,
nomeCategoria varchar(20)
);

insert into usuario(nomeUsuario,loginUsuario,senhaUsuario,perfilUsuario)
values('Diego Rodrigues Joaquim','admin','21232f297a57a5a743894a0e4a801fc3','a');

insert into usuario(nomeUsuario,loginUsuario,senhaUsuario,perfilUsuario)
values('Jhenny Silva','Jhenny','21232f297a57a5a743894a0e4a801fc3','v');

insert into usuario(nomeUsuario,loginUsuario,senhaUsuario,perfilUsuario)
values('Poliana Silva','Polly','21232f297a57a5a743894a0e4a801fc3','v');



insert into cliente(nomeCliente, perfilCliente, idCategoria)values("Nina Rodrigues Silva","Cliente",1);
insert into cliente(nomeCliente, perfilCliente, idCategoria)values("Lucy Rodrigues Silva","Cliente",2);

INSERT INTO categoria (nomeCategoria)VALUES('Grátis');
INSERT INTO categoria (nomeCategoria)VALUES('Normal');
INSERT INTO categoria (nomeCategoria)VALUES('Prêmio');

SELECT *
FROM  categoria AS CT
JOIN cliente AS C ON CT.idCategoria = C.idCategoria where C.idCategoria = 1;

SELECT count(*)
FROM  categoria AS CT
JOIN cliente AS C ON CT.idCategoria = C.idCategoria where C.idCategoria = 2;

SELECT *
FROM  categoria AS CT
JOIN cliente AS C ON CT.idCategoria = C.idCategoria where C.idCategoria = 3;

SELECT count(nomeCategoria)
FROM  categoria AS CT
JOIN cliente AS C ON CT.idCategoria = C.idCategoria where C.idCategoria = 2;

SELECT * FROM cliente;
SELECT * FROM usuario;
SELECT * FROM categoria;

-- INSERT INTO cliente (nomeCliente, perfilCliente,idCategoria)VALUES('cliente numero 1', 'Cliente','Prêmio');

-- select * from usuario where loginUsuario = 'diego' and senhaUsuario = '123'

select * from categoria where idCategoria = '4';

SELECT COUNT(*) FROM cliente