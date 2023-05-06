create database webcup;

use webcup;


create table user(
    id int auto_increment PRIMARY KEY,
    username varchar(255) not null,
    email varchar(255) not null,
    password varchar(255),
    idgoogleclient varchar(255)
);