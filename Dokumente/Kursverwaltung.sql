DROP schema if exists PuffinAir;

CREATE SCHEMA IF NOT EXISTS PuffinAir
	DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;
    
USE PuffinAir;

CREATE TABLE Fluege (
	PK_Fluege						INTEGER PRIMARY KEY,
	Abflugszeit						VARCHAR (10),
    Ankunftszeit					VARCHAR (10),
    Abflugsort						DATE,
    Ankunftsort						DATE
);


INSERT INTO Fluege VALUES
(1, 2018-12-12, 2018-12-12, 'Keflavik', 'London Heathrow');



-- Abfragen
SELECT Abflugszeit, Ankunftszeit FROM Fluege; 
SELECT Abflugsort, Abflugszeit FROM Fluege; 
