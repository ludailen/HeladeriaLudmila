-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema usuarios
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `usuarios` ;

-- -----------------------------------------------------
-- Schema usuarios
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `usuarios` DEFAULT CHARACTER SET utf8 ;
USE `usuarios` ;

-- -----------------------------------------------------
-- Table `usuarios`.`usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `usuarios`.`usuario` ;

CREATE TABLE IF NOT EXISTS `usuarios`.`usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NULL,
  `email` VARCHAR(45) NOT NULL,
  `contra` VARCHAR(45) NOT NULL,
  `nivel` VARCHAR(20) NOT NULL,
  `fecha_alta` DATETIME NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
