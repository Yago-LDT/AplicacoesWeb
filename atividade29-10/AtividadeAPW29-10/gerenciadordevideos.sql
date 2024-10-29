create schema if not exists gerenciadordevideos default character set utf8;
use gerenciadordevideos;

drop schema gerenciadordevideos;

create table if not exists videos (id int not null auto_increment primary key, nome varchar(255), link varchar(255));

select * from videos;