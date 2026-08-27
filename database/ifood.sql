create database if not exists ifood;
use ifood;

create table if not exists restaurante (
    id int primary key auto_increment,
    nome varchar(100) not null,
    categoria varchar(50) not null,
    endereco varchar(200) not null,.+
    
    telefone varchar(15) not null
);

create table if not exists cliente (
    id int primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null unique,
    telefone varchar(15) not null,
    endereco varchar(200) not null
    
);

create table if not exists pedido (
    id int primary key auto_increment,
    cliente_id int not null,
    restaurante_id int not null,
    data_pedido datetime not null,
    valor decimal(10,2) not null,
    status varchar(20) not null,
    foreign key (cliente_id) references cliente(id),
    foreign key (restaurante_id) references restaurante(id)
);