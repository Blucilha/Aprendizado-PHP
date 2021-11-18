create database if not exists teste_db;

use teste_db;

create table produtos(
	id int not null auto_increment,
    descricao varchar(50) not null,
    
    primary key(id)
) engine=InnoDB;