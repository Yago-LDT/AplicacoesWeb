drop database testedeapw;
create schema if not exists testedeapw default character set utf8;

use testedeapw;

create table if not exists Produto(idproduto int not null auto_increment primary key, nomeproduto varchar(50), estoqueproduto int);

select * from Produto;

create table if not exists ItensVendas(iditensvendas integer not null auto_increment, produtoidproduto integer not null, quantitensvendas int, 
primary key (iditensvendas, produtoidproduto));

select * from itensvendas;

insert into Produto values (null, 'Feijão', 10);
insert into Produto values (null, 'Arroz', 5);
insert into Produto values (null, 'Farinha', 15);
 
 DELIMITER $
 CREATE TRIGGER Tgr_ItensVenda_Insert AFTER INSERT ON itensvendas
 FOR EACH ROW
 BEGIN
 UPDATE produto SET estoqueProduto = 
 estoqueProduto - new.quantitensvendas
 where idproduto = new.produtoidproduto;
 END$
DELIMITER $

DELIMITER $
CREATE TRIGGER Tgr_ItensVenda_Delete AFTER DELETE
ON itensVendas
FOR EACH ROW 
BEGIN
UPDATE produto SET estoqueProduto = estoqueProduto + OLD.quantitensvendas
WHERE idProduto = old.produtoidproduto;
END$
DELIMITER $
