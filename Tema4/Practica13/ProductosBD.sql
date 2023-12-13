drop database if exists productos;
create database productos;
drop user if exists guzman;
create user guzman identified by 'guzman';
use productos;
grant all on productos.* to guzman;

create TABLE zapatillas(
    id int primary key auto_increment,
    nombre VARCHAR(40) NOT NULL,
    precio FLOAT NOT NULL,
    fecha VARCHAR(40) NOT NULL
) engine=innodb;

INSERT INTO zapatillas (nombre, precio, fecha) VALUES
('Nike Airforce 1', 129.90, '2020-12-23'),
('Nike Air Max 95', 180.90, '2022-06-10'),
('Adidas Forum', 99.90, '2023-11-25'),
('Reebok Classic', 70.95, '2020-02-15'),
('Adidas Samba', 80.90, '2021-10-22');
