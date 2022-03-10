create database ForcaDeHabito;
-- drop database ForcaDeHabito;
use ForcaDeHabito;
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
values('Diego Rodrigues Joaquim','diego','123','a');

insert into usuario(nomeUsuario,loginUsuario,senhaUsuario,perfilUsuario)
values('Jhenny Silva','Jhenny','123','v');

insert into usuario(nomeUsuario,loginUsuario,senhaUsuario,perfilUsuario)
values('Poliana Silva','Polly','123','v');



insert into cliente(nomeCliente, perfilCliente, idCategoria)values("Nina Rodrigues Silva","grátis",1);
insert into cliente(nomeCliente, perfilCliente, idCategoria)values("Lucy Rodrigues Silva","Premio",2);



SELECT *
FROM  categoria AS CT
JOIN cliente AS C ON CT.idCategoria = C.idCategoria where C.idCategoria = 3;

SELECT * FROM cliente;

-- INSERT INTO cliente (nomeCliente, perfilCliente,idCategoria)VALUES('cliente numero 1', 'Cliente','Prêmio');

-- select * from usuario where loginUsuario = 'diego' and senhaUsuario = '123'