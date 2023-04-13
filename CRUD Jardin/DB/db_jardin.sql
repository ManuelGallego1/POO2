Drop database if exists db_jardin;

create database db_jardin;

use db_jardin;

create table student(
id int auto_increment,
name varchar(100) not null,
first_sur varchar(100) not null,
second_sur varchar(100) not null,
ti int not null unique,
grp varchar(5) not null,
birth_date varchar(100) not null,
primary key(id)
);

create table attendant(
id int auto_increment,
name varchar(100) not null,
first_sur varchar(100) not null,
second_sur varchar(100) not null,
cc int not null,
phone varchar(15) not null,
id_son int not null,
primary key(id),
FOREIGN KEY (id_son) REFERENCES student(ti) ON UPDATE CASCADE
);
