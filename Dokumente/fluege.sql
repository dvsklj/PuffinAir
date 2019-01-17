DROP schema if exists PuffinAir;

CREATE SCHEMA IF NOT EXISTS PuffinAir
	DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;
    
USE PuffinAir;

CREATE TABLE Flugroute (
	Flugroute_ID					INTEGER PRIMARY KEY,
	Flugnummer						VARCHAR (5),
    Abflugsort						VARCHAR (15),
    Ankunftsort						VARCHAR (15),
    Abflugszeit						TIME,
    Flugzeugtyp						VARCHAR (20),
    Preis							INTEGER
);

INSERT INTO Flugroute VALUES
(1, 'FI001', 'Keflavik', 'Zurich', '07:15', 'Boeing 757-200', 399),
(2, 'FI002', 'Zurich', 'Keflavik', '14:00', 'Boeing 757-200', 399),
(3, 'FI003', 'Keflavik', 'London Heathrow', '08:00', 'Boeing 777-300ER', 329),
(4, 'FI004', 'London Heathrow', 'Keflavik', '13:30', 'Boeing 777-300ER', 329),
(5, 'FI005', 'Keflavik', 'Anchorage', '09:20', 'Boeing 777-300ER', 599),
(6, 'FI006', 'Anchorage', 'Keflavik', '21:40', 'Boeing 777-300ER', 599),
(7, 'FI007', 'Keflavik', 'New York', '10:10', 'Boeing 777-300ER', 499),
(8, 'FI008', 'New York', 'Keflavik', '16:50', 'Boeing 777-300ER', 499),
(9, 'FI009', 'Keflavik', 'Los Angeles', '12:30', 'Boeing 777-300ER', 649),
(10, 'FI010', 'Los Angeles', 'Keflavik', '17:10', 'Boeing 777-300ER', 649),
(11,'FI011', 'Keflavik', 'San Francisco', '12:50', 'Boeing 777-300ER', 629),
(12, 'FI012', 'San Francisco', 'Keflavik', '16:50', 'Boeing 777-300ER', 629),
(13, 'FI013', 'Keflavik', 'Chicago', '14:40', 'Boeing 757-200', 549),
(14,'FI014', 'Chicago', 'Keflavik', '16:00', 'Boeing 757-200', 549),
(15, 'FI015', 'Keflavik', 'Denver', '15:30', 'Boeing 757-200', 589),
(16, 'FI016', 'Denver', 'Keflavik', '19:20', 'Boeing 757-200', 589),
(17, 'FI017', 'Keflavik', 'Miami', '13:10', 'Boeing 757-200', 579),
(18, 'FI018', 'Miami', 'Keflavik', '18:40', 'Boeing 757-200', 579),
(19, 'FI019', 'Keflavik', 'Frankfurt', '11:00', 'Airbus A220-300', 299),
(20, 'FI020', 'Frankfurt', 'Keflavik', '15:30', 'Airbus A220-300', 299),
(21, 'FI021', 'Keflavik', 'Oslo', '11:20', 'Airbus A220-300', 289),
(22, 'FI022', 'Oslo', 'Keflavik', '15:50', 'Airbus A220-300', 289),
(23, 'FI023', 'Keflavik', 'Shanghai', '15:40', 'Boeing 777-300ER', 799),
(24, 'FI024', 'Shanghai', 'Keflavik', '06:15', 'Boeing 777-300ER', 799),
(25, 'FI025', 'Keflavik', 'Tokyo', '16:10', 'Boeing 777-300ER', 839),
(26, 'FI026', 'Tokyo', 'Keflavik', '21:10', 'Boeing 777-300ER', 839),
(27, 'FI027', 'Keflavik', 'Johannesburg', '20:30', 'Boeing 777-300ER', 669),
(28, 'FI028', 'Johannesburg', 'Keflavik', '07:15', 'Boeing 777-300ER', 669),
(29, 'FI028', 'Keflavik', 'Madrid', '06:20', 'Airbus A220-300', 319),
(30, 'FI030', 'Madrid', 'Keflavik', '11:15', 'Airbus A220-300', 319),
(31, 'FI031', 'Keflavik', 'Moskau', '07:45', 'Airbus A220-300', 299),
(32, 'FI032', 'Moskau', 'Keflavik', '13:30', 'Airbus A220-300', 299),
(33, 'FI033', 'Keflavik', 'Peking', '11:15', 'Boeing 777-300ER', 719),
(34, 'FI034', 'Peking', 'Keflavik', '21:10', 'Boeing 777-300ER', 719),
(35, 'FI035', 'Keflavik', 'Kapstadt', '10:30', 'Boeing 777-300ER', 639),
(36, 'FI036', 'Kapstadt', 'Keflavik', '17:10', 'Boeing 777-300ER', 639),
(37, 'FI037', 'Keflavik', 'Bangkok', '14:00', 'Boeing 777-300ER', 759),
(38, 'FI038', 'Bangkok', 'Keflavik', '22:30', 'Boeing 777-300ER', 759)