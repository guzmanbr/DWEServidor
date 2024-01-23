create table Cita(
    id int primary key auto_increment,
    especialista varchar(25) not null,
    motivo varchar(200) not null,
    fecha date not null,
    activo boolean default true,
    paciente varchar (15)
)engine=innodb;

alter table Cita
add constraint paciente_fk
foreign key (paciente)
references Usuario (codUsuario);

insert into Cita values (null,'Otorrino','Tengo el oido hinchado.','2025-12-01',true,'1');
update Usuarios set perfil = 'administrador' where codUsuario =1;