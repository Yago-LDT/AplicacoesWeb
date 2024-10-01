show databases;

create schema if not exists vendas_crud_php;

use vendas_crud_php;

create table vendas(id int not null auto_increment primary key, produto varchar(50), valor double, quantidade int);

show tables;