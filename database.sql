
CREATE TABLE `recommender`.`posts` (
    `Id` INT NOT NULL AUTO_INCREMENT ,
    `From` VARCHAR(300) NOT NULL ,
    `Content` LONGTEXT NOT NULL ,
    `Category` VARCHAR(50) NOT NULL ,
    PRIMARY KEY (`Id`)
) ENGINE = InnoDB;


CREATE TABLE `recommender`.`users` (
    `Id` INT NOT NULL AUTO_INCREMENT,
    `Username` VARCHAR(50) NOT NULL ,
    `Password` VARCHAR(300) NOT NULL,
    PRIMARY KEY (`Id`)
) ENGINE = InnoDB


CREATE TABLE `inter` (
    `Id` bigint(20) NOT NULL AUTO_INCREMENT,
    `userId` int(11) NOT NULL,
    `postId` bigint(20) NOT NULL,
    PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1