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
primary key (idcliente)
);

create table produto (
        idProduto integer not null auto_increment,
        nome varchar (20) not  null,
        descricao varchar (230) not null,
        valor varchar (10) not null,
        categoria varchar(8) not null,
        estoqueMinimo int(11) NOT NULL,
        estoqueMaximo int(11) NOT NULL,
        primary key(idProduto),
        foreign key(categoria) references categoria(idcategoria)
);
      
create table enderecos (
idendereco integer not null auto_increment,
cidade varchar(20) not null,
bairro varchar(20) not null,
rua varchar(100) not null,
cep varchar(20) not null,
num varchar(20) not null,
primary key (idendereco)
foreign key(idcliente) references cliente(id) on delete cascade on update cascade
);
);

create table categoria (
idcategoria integer not null auto_increment,
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
id int (11) auto_increment  not null,
nome_cupom varchar (60) not null,
desconto int (11) not null,
primary key (id)
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








