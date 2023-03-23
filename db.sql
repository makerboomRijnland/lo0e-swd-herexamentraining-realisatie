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

INSERT INTO `Client` 
    (`ID`, `Email`, `Password`, `First_Name`, `Last_Name`, `Active`, `Create_Date`, `Last_Update`) 
VALUES 
    (NULL, 'admin@mrs.com', '$2y$10$7Mz4PQbrWLAbe9D0uwyY0eIruiW9TrHNQD4RFY4pYNmNJBRCnQvJu', 'Admin', NULL, 'y', NOW(), NOW());