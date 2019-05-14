create database jnmodas;

create table cliente(
idcliente integer not null auto_increment,
nomecompleto varchar(40) not null,
email varchar(40) not null,
cpf varchar(20) not null,
datanasci varchar(20) not null,
cel varchar(20) not null,
senha varchar(20) not null,
primary key (idcliente)
);

create database jnmodas;

create table produto (
        idProduto integer not null auto_increment,
        nomeProduto varchar (20) not  null,
        tamanho varchar (10) not null,
        descricao varchar (30) not null,
        preco varchar (10) not null,
        quantidade varchar (10) not null,
        primary key (idProduto)
);

