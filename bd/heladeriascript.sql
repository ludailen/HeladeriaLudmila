-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema heladeria
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `heladeria` ;

-- -----------------------------------------------------
-- Schema heladeria
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `heladeria` DEFAULT CHARACTER SET utf8 ;
USE `heladeria` ;

-- -----------------------------------------------------
-- Table `heladeria`.`categoria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `heladeria`.`categoria` ;

CREATE TABLE IF NOT EXISTS `heladeria`.`categoria` (
  `id_categoria` INT NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`id_categoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `heladeria`.`tipo_helado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `heladeria`.`tipo_helado` ;

CREATE TABLE IF NOT EXISTS `heladeria`.`tipo_helado` (
  `id_tipo_helado` INT NOT NULL AUTO_INCREMENT,
  `tipo_helado` VARCHAR(45) NOT NULL,
  `categoria_id_categoria` INT NOT NULL,
  PRIMARY KEY (`id_tipo_helado`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `heladeria`.`sabor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `heladeria`.`sabor` ;

CREATE TABLE IF NOT EXISTS `heladeria`.`sabor` (
  `id_sabor` INT NOT NULL AUTO_INCREMENT,
  `sabores` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(60) NULL,
  `tipo_helado_id_tipo_helado` INT NOT NULL,
  PRIMARY KEY (`id_sabor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `heladeria`.`producto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `heladeria`.`producto` ;

CREATE TABLE IF NOT EXISTS `heladeria`.`producto` (
  `id_producto` INT NOT NULL AUTO_INCREMENT,
  `producto` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(45) NULL,
  `precio` INT NOT NULL,
  `foto` VARCHAR(100) NULL,
  `categoria_id_categoria` INT NOT NULL,
  PRIMARY KEY (`id_producto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Data for table `heladeria`.`categoria`
-- -----------------------------------------------------
START TRANSACTION;
USE `heladeria`;
INSERT INTO `heladeria`.`categoria` (`id_categoria`, `categoria`) VALUES (1000, 'helado');
INSERT INTO `heladeria`.`categoria` (`id_categoria`, `categoria`) VALUES (1001, 'producto');

COMMIT;


-- -----------------------------------------------------
-- Data for table `heladeria`.`tipo_helado`
-- -----------------------------------------------------
START TRANSACTION;
USE `heladeria`;
INSERT INTO `heladeria`.`tipo_helado` (`id_tipo_helado`, `tipo_helado`, `categoria_id_categoria`) VALUES (2000, 'crema', 1000);
INSERT INTO `heladeria`.`tipo_helado` (`id_tipo_helado`, `tipo_helado`, `categoria_id_categoria`) VALUES (2001, 'chocolate', 1000);
INSERT INTO `heladeria`.`tipo_helado` (`id_tipo_helado`, `tipo_helado`, `categoria_id_categoria`) VALUES (2002, 'dulce de leche', 1000);
INSERT INTO `heladeria`.`tipo_helado` (`id_tipo_helado`, `tipo_helado`, `categoria_id_categoria`) VALUES (2003, 'al agua', 1000);
INSERT INTO `heladeria`.`tipo_helado` (`id_tipo_helado`, `tipo_helado`, `categoria_id_categoria`) VALUES (2004, 'sin tacc', 1000);

COMMIT;


-- -----------------------------------------------------
-- Data for table `heladeria`.`sabor`
-- -----------------------------------------------------
START TRANSACTION;
USE `heladeria`;
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (1, 'Crema americana', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (2, 'Almendrado', 'Con almendras y maní crocante', 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (3, 'Baileys', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (4, 'Bananita dolca', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (5, 'Café italiano', 'Con crema chantilly y pedacitos de chocolate', 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (6, 'Cereza', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (7, 'Crema del cielo', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (8, 'Crema Ludmila', 'Americana con bombones y dulce repostero', 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (9, 'Crema rusa', 'Con nueces', 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (10, 'Flan con dulce de leche', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (11, 'Frutilla', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (12, 'Frutos del bosque', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (13, 'Granizado', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (14, 'Kinder', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (15, 'Kinotos al whisky', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (16, 'Lemon pie', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (17, 'Mantecol', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (18, 'Maracuyá', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (19, 'Mascarpone con frutos del bosque', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (20, 'Menta granizada', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (21, 'Mix frutal', 'Americana con pedacitos de frutilla ananá y durazno', 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (22, 'Mousse de limón', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (23, 'Oreo', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (24, 'Pico dulce', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (25, 'Pistacho', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (26, 'Postre chocolinas', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (27, 'Sambayón', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (28, 'Sambayón con almendras', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (29, 'Tiramisú', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (30, 'Tramontana', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (31, 'Vainilla', NULL, 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (32, 'Vainutella', 'Vainilla con nutella', 2000);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (33, 'Capitán del espacio', NULL, 2001);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (34, 'Chocolate', NULL, 2001);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (35, 'Chocolate al tía María', 'Con maní crocante y licor Tía María', 2001);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (36, 'Chocolate amargo', NULL, 2001);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (37, 'Chocolate blanco', NULL, 2001);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (38, 'Chocolate con almendras', NULL, 2001);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (39, 'Chocolate con marroc', NULL, 2001);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (40, 'Chocolate con pasas al rhum', NULL, 2001);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (41, 'Chocolate Ludmila', 'Con crema chantilly y frutillas', 2001);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (42, 'Chocolate rocher', 'Con maní crocante y pasta de nutella', 2001);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (43, 'Chocolate shot', 'Con pedacitos de chocolate shot', 2001);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (44, 'Chocolate suizo', 'Con dulce repostero y pedacitos de chocolate', 2001);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (45, 'Mousse de chocolate', 'Más suave que el chocolate común', 2001);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (46, 'Dulce de leche', NULL, 2002);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (47, 'Dulce de leche bombón', 'Con bombones', 2002);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (48, 'Dulce de leche con nuez', NULL, 2002);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (49, 'Dulce de leche granizado', NULL, 2002);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (50, 'Dulce de leche Ludmila', 'Con brownie', 2002);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (51, 'Súper dulce de leche', 'Con dulce repostero', 2002);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (52, 'Ananá', NULL, 2003);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (53, 'Arándanos', NULL, 2003);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (54, 'Durazno', NULL, 2003);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (55, 'Frutilla', NULL, 2003);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (56, 'Limón', NULL, 2003);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (57, 'Naranja', NULL, 2003);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (59, 'Banana', NULL, 2004);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (58, 'Dulce de leche', NULL, 2004);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (60, 'Durazno H2O', NULL, 2004);
INSERT INTO `heladeria`.`sabor` (`id_sabor`, `sabores`, `descripcion`, `tipo_helado_id_tipo_helado`) VALUES (61, 'Frutilla', NULL, 2004);

COMMIT;


-- -----------------------------------------------------
-- Data for table `heladeria`.`producto`
-- -----------------------------------------------------
START TRANSACTION;
USE `heladeria`;
INSERT INTO `heladeria`.`producto` (`id_producto`, `producto`, `descripcion`, `precio`, `foto`, `categoria_id_categoria`) VALUES (3000, 'Un kilo', 'Cuatro sabores', 1900, NULL, 1001);
INSERT INTO `heladeria`.`producto` (`id_producto`, `producto`, `descripcion`, `precio`, `foto`, `categoria_id_categoria`) VALUES (3001, 'Medio kilo', 'Tres sabores', 1000, NULL, 1001);
INSERT INTO `heladeria`.`producto` (`id_producto`, `producto`, `descripcion`, `precio`, `foto`, `categoria_id_categoria`) VALUES (3002, 'Un cuarto', 'Tres sabores', 550, NULL, 1001);
INSERT INTO `heladeria`.`producto` (`id_producto`, `producto`, `descripcion`, `precio`, `foto`, `categoria_id_categoria`) VALUES (3003, 'Batido', 'Helado con leche', 550, NULL, 1001);
INSERT INTO `heladeria`.`producto` (`id_producto`, `producto`, `descripcion`, `precio`, `foto`, `categoria_id_categoria`) VALUES (3004, 'Frappé', 'Helado con leche y café', 600, NULL, 1001);
INSERT INTO `heladeria`.`producto` (`id_producto`, `producto`, `descripcion`, `precio`, `foto`, `categoria_id_categoria`) VALUES (3005, 'Torta tricolor', 'Tres sabores a elección y diez porciones', 2300, NULL, 1001);
INSERT INTO `heladeria`.`producto` (`id_producto`, `producto`, `descripcion`, `precio`, `foto`, `categoria_id_categoria`) VALUES (3006, 'Torta almendrado', 'Sabor almendrado de diez porciones', 2800, NULL, 1001);

COMMIT;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
