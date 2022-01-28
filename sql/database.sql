drop database if exists avion_bdd; 
create database avion_bdd; 
use avion_bdd; 

create table pilote (
    idpilote int(3) not null auto_increment,
    nom varchar(50) not null,
    prenom varchar(50) not null,
    age varchar(2) not null,
    email varchar(50) not null,
    adresse varchar(50) not null,
    grade varchar(50) not null,
    primary key (idpilote)
);

create table avion (
    idavion int(3) not null auto_increment, 
    marque varchar(50) not null,
    etat varchar(50) not null,
    nbplaces int(3) not null,
    typeavion varchar(50) not null,
    primary key (idavion)
);

create table aeroport (
    idaeroport int(3) not null auto_increment,
    desiaero varchar(50) not null,
    adresse varchar(50) not null,
    statut varchar(20) not null,
    primary key (idaeroport)

);


create table vol (
    idvol int(10) not null auto_increment,
    desivol varchar(50) not null,
    duree varchar(50) not null,
    datevole date,
    idavion int(10) not null,
    idaeroport1 int(10) not null,
    idaeroport2 int(10) not null,
    idpilote1 int(10) not null,
    idpilote2 int(10) not null,
    foreign key(idaeroport1) references aeroport(idaeroport),
    foreign key(idaeroport2) references aeroport(idaeroport),
    foreign key(idpilote1) references pilote(idpilote),
    foreign key(idpilote2) references pilote(idpilote),
    foreign key(idavion) references avion(idavion),
    primary key (idvol)
);


