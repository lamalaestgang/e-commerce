### Serveur mySQL
##Hôte: localhost
##Usager: root

####BD pour Bonbon.com
## Nom de la base de donnée: Bonbon

create database bonbon
Default CHARACTER SET utf8;
USE bonbon;

###########################################################################

#drop table usager;
create table usager(
    idUsager SMALLINT NOT NULL AUTO_INCREMENT,
    prenom VARCHAR(25),
    nom VARCHAR(20) NOT NULL,
    motPasse VARCHAR(20) NOT NULL,
    courriel VARCHAR(50) NOT NULL,
    PRIMARY KEY (idUsager),
    UNIQUE (courriel)
);

insert into usager(prenom,nom,motPasse,courriel) values ('jean','Bonbons','4321','etudiant.info@collegealma.ca');
insert into usager(prenom,nom,motPasse,courriel) values('nancy','Bluteau','1234','nancy.bluteau@collegealma.ca');
