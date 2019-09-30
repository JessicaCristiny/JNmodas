create database jnmodas;
use jnmodas;

create table cliente(
idcliente integer not null auto_increment,
nomecompleto varchar(40) not null,
email varchar(40) not null,
cpf varchar(20) not null,
datanasci varchar(20) not null,
cel varchar(20) not null,
senha varchar(20) not null,
papel varchar(20) not null,
primary key (idcliente)
);

create table produto (
        idProduto int not null auto_increment,
        nome varchar (20) not  null,
        descricao varchar (230) not null,
        valor varchar (10) not null,
        categoria int (8) not null,
        estoqueMinimo int(11) NOT NULL,
        estoqueMaximo int(11) NOT NULL,
        primary key(idProduto),
        foreign key(categoria) references categoria(idcategoria)
);
      
create table enderecos (
idendereco integer not null auto_increment,
idcliente  integer not null,
cidade varchar(20) not null,
bairro varchar(20) not null,
rua varchar(100) not null,
cep varchar(20) not null,
num varchar(20) not null,
primary key (idendereco),
foreign key(idcliente) references cliente(idcliente) on delete cascade on update cascade
);

create table categoria (
idcategoria int (8) not null auto_increment,
descricao varchar (50) not null,
primary key (idcategoria)
);

create table log_produto(
id_Log int (11) auto_increment  not null,
tabela varchar (45) not null,
usuario varchar (45) not null,
data_Hora Datetime not null,
acao varchar (45) not null,
dados varchar (100) not null,
primary key (id_Log)
);


create table cupom(
idcupom int (11) auto_increment  not null,
nomecupom varchar (60) not null,
desconto int (11) not null,
primary key (idcupom)
);

create table estoque(
id int (11) auto_increment  not null,
idProduto int (11) not null,
qtde int (11) not null,
primary key (id),
foreign key(idProduto) references Produto(codigo) on delete cascade on update cascade
);

create table pedido (
idPedido int (11) auto_increment  not null,
idUsuario int(11) not null,
idendereco int(11) not null,
datacompra date not null,
primary key (idPedido),
foreign key(idusuario) references cliente (id) on delete cascade on update cascade,
foreign key(idendereco) references endereco(idendereco) on delete cascade on update cascade
);

create table pedido_produto (
idproduto int(11) auto_increment not null,
idpedido int (11)  not null,
quantidade int(11) not null,
foreign key(idProduto) references produto(codigo) on delete cascade on update cascade,
foreign key(idpedido) references produto(codigo) on delete cascade on update cascade
);

create table formadepagamento (
idFormadePagamento int auto_increment not null,
descricao varchar(45) not null,
primary key (idFormadePagamento)
);

create table carrinho (
idcarrinho int (12) auto_increment not null,
resumo int (60) not null,
valortotal int (30) not null,
primary key (idcarrinho)
);

insert into cliente (nomecompleto, email, cpf, datanasci, cel, senha, papel) values ('jessica ','jessicacristny.ballet@gmail.com', '505.970.698-24','21082002', '981067837', '21182002if', 'adm'); 






