DROP TABLE IF EXISTS `Client`;

CREATE TABLE `Client` (
    `ID` INT NOT NULL AUTO_INCREMENT,
    `Email` VARCHAR(50) NOT NULL,
    `Password` VARCHAR(255) NOT NULL,
    `First_Name` VARCHAR(255),
    `Last_Name` VARCHAR(255),
    `Active` CHAR(1),
    `Create_Date` TIMESTAMP,
    `Last_Update` TIMESTAMP,
    PRIMARY KEY (`ID`)
);

CREATE TABLE `Movie` (
    `ID` INT NOT NULL AUTO_INCREMENT,
    `Title` VARCHAR(255) NOT NULL,
    `Description` VARCHAR(255),
    `Release_Year` INT(4),
    `Rental_Duration` INT(10),
    `Rental_Rate` DECIMAL(19,0),
    `Length` INT(2),
    `Replacement_Cost` DECIMAL(19,0),
    `Rating` INT(10),
    `Last_Update` TIMESTAMP,
    `Special_Features` VARCHAR(255),
    `Fulltext` TEXT,
    PRIMARY KEY (`ID`)
);

CREATE TABLE `Actor` (
    `ID` INT NOT NULL AUTO_INCREMENT,
    `First_Name` VARCHAR(255) NOT NULL,
    `Last_Name` VARCHAR(255) NOT NULL,
    `Last_Update` TIMESTAMP,
    PRIMARY KEY (`ID`)
);

CREATE TABLE `Movie_Actor` (
    `Movie_ID` INT NOT NULL,
    `Actor_ID` INT NOT NULL,
    `Last_Update` TIMESTAMP
);

CREATE TABLE `Category` (
    `ID` INT NOT NULL AUTO_INCREMENT,
    `Name` VARCHAR(255) NOT NULL,
    `Last_Update` TIMESTAMP,
    PRIMARY KEY (`ID`)
);

CREATE TABLE `Movie_Category` (
    `Movie_ID` INT NOT NULL,
    `Category_ID` INT NOT NULL,
    `Last_Update` TIMESTAMP
);

INSERT INTO `Client` 
    (`ID`, `Email`, `Password`, `First_Name`, `Last_Name`, `Active`, `Create_Date`, `Last_Update`) 
VALUES 
    (NULL, 'admin@mrs.com', '$2y$10$7Mz4PQbrWLAbe9D0uwyY0eIruiW9TrHNQD4RFY4pYNmNJBRCnQvJu', 'Admin', NULL, 'y', NOW(), NOW());
