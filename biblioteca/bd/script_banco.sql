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

create table produto (
        idProduto integer not null auto_increment,
        nome varchar (20) not  null,
        descricao varchar (30) not null,
        valor varchar (10) not null,
        primary key (idProduto)
);

create table enderecos (
idendereco integer not null auto_increment,
cidade varchar(20) not null,
bairro varchar(20) not null,
rua varchar(100) not null,
cep varchar(20) not null,
num varchar(20) not null,
primary key (idendereco)
);

create table categoria (
idcategoria integer not null auto_increment,
descricao varchar (50) not null,
primary key (idcategoria)
);

create table pedido (
idpedido int (11) not null auto_increment,
idcliente int (11) not null,
idendereco int (11) not null,
datacompra DATE not null,
primary key (idcliente)
primary key (idendereco)

);

create table pedido_produto (
idproduto int (11) not null,
idpedido int (11) not null,
quantidade int (11) not null,
primary key (idproduto)
primary key (idpedido)
);

create table estoque (
idestoque int (11) not null auto_increment,
id_produto int (11) not null,
qtde int (11) not null,
primary key (id_produto)
);

create table log_produto (
id_log int (11) not null auto_increment,
tabela varchar (45) not null,
cliente varchar (45) not null,
data_hora DATETIME not null,
dados varchar (100) not null,
primary key (id_log)
);

create table cupom (
idcupom int (11) not null,
nomecupom varchar (60) not null,
desconto int (11) not null,
primary key (idcupom)
);
