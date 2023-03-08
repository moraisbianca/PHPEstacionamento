create database db_estacionamento;
use db_estacionamento;

create table if not exists fabricante(
	id int auto_increment,
	descricao varchar(40),
	primary key (id)
);

create table if not exists marca(
	id int auto_increment,
	descricao varchar(40),
	primary key (id)
);

create table if not exists combustivel(
	id int auto_increment,
	descricao varchar(40),
	primary key (id)
);

create table if not exists tipo(
	id int auto_increment,
	descricao varchar(40),
	primary key (id)
);

create table veiculo(
	id int auto_increment,
	placa char(7),
	modelo varchar(100),
	ano char(4),
	cor varchar(50),
	chassi char(17),
	quilometragem int(15),
	revisao boolean,
	sinistro boolean,
	roubo_furto boolean,
	aluguel boolean,
	venda boolean,
	particular boolean,
	obs varchar(255),
	id_fabricante int,
	id_marca int,
	id_combustivel int,
	id_tipo int,
	foreign key (id_fabricante) references fabricante(id),
	foreign key (id_marca) references marca(id),
	foreign key (id_combustivel) references combustivel(id),
	foreign key (id_tipo) references tipo(id),
	primary key (id)
);