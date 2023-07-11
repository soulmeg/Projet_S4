drop database projet_S4;
create database projet_S4;
use projet_S4 

create table users(
    idUser int primary key auto_increment ,
    Nom varchar(150),
    Prenom varchar(150),
    DateNaissance date,
    sexe varchar(4),
    email varchar(50),
    password varchar(100),
    estAdmin boolean,
    poids double precision,
    taille double precision
);

create table categorie(
    idCategorie int primary key auto_increment,
    nom varchar(50)
);


create table ingredients(
    idIngredient int primary key auto_increment,
    idCategorie int,
    nom varchar(150),
    unite varchar(10),
    apport double precision,
    foreign key(idCategorie) references categorie(idCategorie)
);


create table Plat(
    idPlat int primary key auto_increment,
    nom varchar(150),
    apport double precision
);


create table detailsPlat(
    idDetailsPlat int primary key auto_increment,
    idPlat int,
    idIngredient int,
    foreign key (idPlat) references Plat(idPlat),
    foreign key (idIngredient) references ingredients(idIngredient)
);  

create table Regime(
    idRegime int primary key auto_increment,
    nom varchar(150)
);

create table DetailsRegime(
    idDetailRegime int primary key auto_increment,    
    idRegime int,
    idPlat int,
    foreign key(idRegime) references Regime(idRegime),
    foreign key(idPlat) references Plat(idPlat)
);

create table code (
    idCode int primary key auto_increment,
    nom varchar(150),
    valeur double precision,
    etat int
);

create table validation(
    idValidation int primary key auto_increment,
    idCode int,
    idUser int,
    etat int,
    foreign key(idCode) references code(idCode),
    foreign key(idUser) references users(idUser)
);

create table porteMonnaie(
    idPorteMonnaie int primary key auto_increment,
    idUser int,
    argent double precision,
    foreign key(idUser) references users(idUser)
);

create table activite(
    idActivite int primary key auto_increment,
    nom varchar(150),
    perte double precision
);

create table DetailsRegimeSport(
    idRegimeSport int primary key auto_increment,
    idRegime int,
    idActivite int,
    foreign key(idRegime) references Regime(idRegime),
    foreign key(idActivite) references activite(idActivite)
);


create table PrixRegime(
    id int primary key auto_increment,
    duree int,
    idRegime int,
    apport double precision,
    PrixRegime double precision,
    foreign key(idRegime) references Regime(idRegime) 
);

create table Paiement(
    idPaiement int primary key auto_increment,
    idUser int,
    idRegime int,
    idPrix int,
    foreign key(idUser) references users(idUser),
    foreign key(idRegime) references Regime(idRegime),
    foreign key(idPrix) references PrixRegime(id)
);



alter table code modify column nom varchar(150) unique;
alter table activite add column duree int;
insert into activite values(default,'Natation',1000,3);
insert into activite values(default,'Musculation',1500,7);
insert into activite values(default,'Footing',700,5);
insert into activite values(default,'Vitesse',800,2);
insert into activite values(default,'Endurance',1300,4);


