create database webcup;

use webcup;


create table user(
    id int auto_increment PRIMARY KEY,
    username varchar(255) not null,
    email varchar(255) not null,
    password varchar(255),
    idgoogleclient varchar(255)
);

create table typereve(
  id int auto_increment PRIMARY KEY,
  libele varchar(50) not null
);

create table motcle(
  id int auto_increment PRIMARY KEY,
  mot varchar(50) not null
);


create table categorieprediction(
  id int auto_increment PRIMARY KEY,
  nomcategorie varchar(50) not null
);

create table prediction(
  id int auto_increment PRIMARY KEY,
  prediction text not null,
  idtypereve int references typereve(id),
  idcategorieprediction int references categorieprediction(id)
);

create table prediction_motcle(
  idmotcle int references motcle(id),
  idprediction int references prediction(id)

);

create table historique(
  id int auto_increment PRIMARY KEY,
  iduser int references user(id),
  idprediction int references prediction(id)
);
 
