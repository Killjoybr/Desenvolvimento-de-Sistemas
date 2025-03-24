create database if not exists desenvolvimento;

use desenvolvimento;

create table if not exists usuario(
	id int auto_increment not null primary key,
	nome varchar(150) not null,
	email varchar(150) not null,
	senha varchar(100) not null
);

alter table usuario
add unique (email), add unique (ID); 
