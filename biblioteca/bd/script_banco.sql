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

create table enderecos (
idendereco integer not null auto_increment,
cidade varchar(20) not null,
bairro varchar(20) not null,
endereco varchar(40) not null,
rua varchar(10) not null,
cep varchar(20) not null,
num varchar(20) not null,
primary key (idendereco)
);