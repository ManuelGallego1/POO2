DROP database if exists db_eje1;

Create database db_eje1;

Use db_eje1;

create table Cuentas(
	id int auto_increment,
	Nombre varchar(100) NOT NULL,
    Apellido varchar(150) NOT NULL,
    CC int NOT NULL, 
    Num_cuenta int not null,
    Saldo int not null,
    primary key(id)
);
