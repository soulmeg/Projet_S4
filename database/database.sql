create database projet_S4;
use projet_S4

create table user(
    idUser int primary key,
    Nom varchar(150),
    Prenom varchar(150),
    DateNaissance date,
    sexe varchar(1),
    email varchar(50),
    password varchar(100),
    estAdmin boolean
);