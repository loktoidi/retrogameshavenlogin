drop database if EXISTS retrogamershavenlogin;

CREATE DATABASE retrogamershavenlogin;

USE retrogamershavenlogin;

/* ASIAKAS */

CREATE TABLE asiakas (
astunnus VARCHAR(18),
etunimi VARCHAR(20) NOT NULL,
sukunimi VARCHAR(20) NOT NULL,
email VARCHAR(50) NOT NULL,
Id int AUTO_INCREMENT,
salasana VARCHAR(255) NOT NULL,
created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
CONSTRAINT asiakas_pk PRIMARY KEY (Id)
) ;


