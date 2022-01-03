use laravel;
create table Users(
id int(11) not null auto_increment primary key, -- PK 
name varchar(255) not null,
email varchar(255),
email_verified_at timestamp not null,
password text not null,
remember_token varchar(100),
created_at timestamp not null,
updated_at timestamp not null
);

create table Personal(
id_personal int(3)  not null , -- PK 
id int(11)  not null); -- PK

alter table Personal add primary key auto_increment (id_personal,id);

alter table Personal add constraint fk_Personal_usuario
foreign key (id) 
references Users(id) on update cascade; 


create table Documento_venta(
id_venta int(6) primary key not null , -- PK 
nombre_cliente varchar(15) not null, 
DNI_cliente varchar(15) not null,
fecha_emision varchar(15) not null,
cantidad_producto int (10) not null,
id_personal int(3)  not null , -- FK
id_producto int(6) not null ); -- FK

alter table Documento_venta add constraint fk_Documento_venta_personal
foreign key (id_personal)
references Personal(id_personal) on update cascade;

create table Productos(
id_producto int(6) auto_increment primary key, -- PK 
nombre_producto varchar(20)  not null, -- FK
precio_unit int(6)  not null, 
marca varchar (20) not null,
tipo varchar (20) not null,
created_at timestamp not null,
updated_at timestamp not null); 

alter table Documento_venta add constraint fk_Documento_venta_producto
foreign key (id_producto)
references Productos(id_producto) on update cascade;

create table Stock(
id_stock int(6) primary key not null , -- PK 
id_producto int(6)  not null, -- FK
cantidad_stock int(6)  not null); 

alter table Stock add constraint fk_Stock_Productos
foreign key (id_producto)
references Productos(id_producto) on update cascade;

