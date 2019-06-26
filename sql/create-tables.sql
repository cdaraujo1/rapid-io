create database rapidio;

use rapidio;

create table customer (
	idCustomer SERIAL not null auto_increment,
    name varchar(100) not null,
    birth date,
    phone varchar(50) not null,
    email varchar(255) not null,
    primary key (idCustomer)
);

create table address (
	idCustomer serial not null,
    l1Add varchar(255) not null,
    l2Add varchar(255) not null,
    stNum numeric not null,
    district varchar(100) not null,
    city varchar(100) not null,
    state varchar(100) not null,
    CC varchar(2) not null,
    zip numeric not null,
    foreign key (idCustomer) references customer (idCustomer) 
);

create table warehouse (
	idWarehouse serial not null,
    wName varchar(255) not null,
    l1Add varchar(255) not null,
    l2Add varchar(255) not null,
    stNum numeric not null,
    district varchar(100) not null,
    city varchar(100) not null,
    state varchar(100) not null,
    CC varchar(2) not null,
    zip numeric not null,
    primary key (idWarehouse)
);

create table deliverers (
	register SERIAL NOT NULL auto_increment,
    name varchar(255) NOT NULL,
    username varchar(255) NOT NULL,
    phone varchar(100) NOT NULL,
    passwd varchar(100) NOT NULL,
    role integer NOT NULL,
    wid integer
    );


drop table deliverers;

drop table address, customer; 