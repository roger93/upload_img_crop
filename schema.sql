create database uploadncrop;
use uploadncrop;

create table image(
	id int not null auto_increment primary key,
	folder varchar(255),
	src varchar(255),
	created_at datetime not null
);