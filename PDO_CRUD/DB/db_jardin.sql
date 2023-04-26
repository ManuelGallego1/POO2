Drop database if exists db_jardin;

create database db_jardin;

use db_jardin;

create table student(
id int auto_increment,
name varchar(100) not null,
f_surname varchar(100) not null,
s_surname varchar(100) not null,
dni int not null unique,
program varchar(100) not null,
birth_date varchar(100) not null,
primary key(id)
);

create table accudent(
id int auto_increment,
name varchar(100) not null,
f_surname varchar(100) not null,
s_surname varchar(100) not null,
dni int not null unique,
phone varchar(15) not null,
primary key(id)
);

create table user(
id int auto_increment,
user varchar(100) not null unique,
pass varchar(100) not null unique,
primary key(id)
);

insert into user values(0,"admin","12345");
