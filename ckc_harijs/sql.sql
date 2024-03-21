CREATE DATABASE ckc_kelpins;
USE ckc_kelpins;
CREATE TABLE `Pasākumi` (
    `Datums un laiks` INT,
    `Nosaukums` TEXT,
    `Norises vieta` TEXT
);
INSERT INTO `Pasākumi` (`Datums un laiks`) VALUES
('2024-03-31 13:00'), ('2024-04-04 18:00'), ('2024-07-19 18:00');
	