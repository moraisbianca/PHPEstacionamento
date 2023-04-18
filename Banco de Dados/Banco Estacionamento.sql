create database db_estacionamento;
use db_estacionamento;

create table if not exists fabricante(
	id int auto_increment not null,
	descricao varchar(40) not null,
	primary key (id)
);

create table if not exists marca(
	id int auto_increment not null,
	descricao varchar(40) not null,
	primary key (id)
);

create table if not exists combustivel(
	id int auto_increment not null,
	descricao varchar(40) not null,
	primary key (id)
);

create table if not exists tipo(
	id int auto_increment not null,
	descricao varchar(40) not null,
	primary key (id)
);

create table veiculo(
	id int auto_increment not null,
	placa char(7) not null,
	modelo varchar(100) not null,
	ano char(4) not null,
	cor varchar(50) not null,
	chassi char(17) not null,
	quilometragem int(15) not null,
	revisao boolean,
	sinistro boolean,
	roubo_furto boolean,
	aluguel boolean,
	venda boolean,
	particular boolean,
	obs varchar(255),
	id_fabricante int not null,
	id_marca int not null,
	id_combustivel int not null,
	id_tipo int not null,
	foreign key (id_fabricante) references fabricante(id),
	foreign key (id_marca) references marca(id),
	foreign key (id_combustivel) references combustivel(id),
	foreign key (id_tipo) references tipo(id),
	primary key (id)
);