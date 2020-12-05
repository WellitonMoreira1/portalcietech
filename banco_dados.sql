create table usuarios(
id integer not null auto_increment,
nome varchar(70) not null,
curso varchar(50) not null,
cidade varchar(70) not null,
modulo char(1) not null,
usuario varchar(50) not null,
senha varchar(255) not null,
situacao char(1) not null,
nivel char(1) not null,

CONSTRAINT pk_id PRIMARY KEY(id)
);