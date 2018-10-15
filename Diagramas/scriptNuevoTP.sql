-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema TpNuevo
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema TpNuevo
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `TpNuevo` DEFAULT CHARACTER SET utf8 ;
USE `TpNuevo` ;

-- -----------------------------------------------------
-- Table `TpNuevo`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TpNuevo`.`Usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `nombreUsuario` VARCHAR(45) NULL,
  `clave` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `nombre` VARCHAR(45) NULL,
  `apellido` VARCHAR(45) NULL,
  `telefono` BIGINT(12) NULL,
  `rol` VARCHAR(45) NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE INDEX `nombreUsuario_UNIQUE` (`nombreUsuario` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TpNuevo`.`PuntoDeVenta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TpNuevo`.`PuntoDeVenta` (
  `idPuntoDeVenta` INT NOT NULL AUTO_INCREMENT,
  `direccion` VARCHAR(45) NULL,
  PRIMARY KEY (`idPuntoDeVenta`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TpNuevo`.`Comercio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TpNuevo`.`Comercio` (
  `idComercio` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `PuntoDeVenta_idPuntoDeVenta` INT NOT NULL,
  PRIMARY KEY (`idComercio`),
  UNIQUE INDEX `nombre_UNIQUE` (`nombre` ASC),
  CONSTRAINT `fk_Comercio_PuntoDeVenta1`
    FOREIGN KEY (`PuntoDeVenta_idPuntoDeVenta`)
    REFERENCES `TpNuevo`.`PuntoDeVenta` (`idPuntoDeVenta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TpNuevo`.`Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TpNuevo`.`Cliente` (
  `idCliente` INT NOT NULL,
  `direccion` VARCHAR(45) NULL,
  `Usuario_idUsuario` INT NOT NULL,
  PRIMARY KEY (`idCliente`),
  CONSTRAINT `fk_Cliente_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `TpNuevo`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TpNuevo`.`Delivery`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TpNuevo`.`Delivery` (
  `idDelivery` INT NOT NULL,
  `ubicacion` VARCHAR(45) NULL,
  `estado` TINYINT(1) NULL,
  `Usuario_idUsuario` INT NOT NULL,
  PRIMARY KEY (`idDelivery`),
  CONSTRAINT `fk_Delivery_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `TpNuevo`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TpNuevo`.`Pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TpNuevo`.`Pedido` (
  `idPedido` INT NOT NULL AUTO_INCREMENT,
  `numero` INT NULL,
  `horaEntrega` VARCHAR(45) NULL,
  `horaRetiro` VARCHAR(45) NULL,
  `Cliente_idCliente` INT NOT NULL,
  `Delivery_idDelivery` INT NOT NULL,
  PRIMARY KEY (`idPedido`),
  CONSTRAINT `fk_Pedido_Cliente1`
    FOREIGN KEY (`Cliente_idCliente`)
    REFERENCES `TpNuevo`.`Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_Delivery1`
    FOREIGN KEY (`Delivery_idDelivery`)
    REFERENCES `TpNuevo`.`Delivery` (`idDelivery`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TpNuevo`.`Precio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TpNuevo`.`Precio` (
  `idPrecio` INT NOT NULL AUTO_INCREMENT,
  `monto` DOUBLE NULL,
  `porcDesc` INT NULL,
  PRIMARY KEY (`idPrecio`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TpNuevo`.`Menu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TpNuevo`.`Menu` (
  `idMenu` INT NOT NULL AUTO_INCREMENT,
  `foto` VARCHAR(45) NULL,
  `descripcion` VARCHAR(45) NULL,
  `Precio_idPrecio` INT NOT NULL,
  PRIMARY KEY (`idMenu`, `Precio_idPrecio`),
  CONSTRAINT `fk_Menu_Precio1`
    FOREIGN KEY (`Precio_idPrecio`)
    REFERENCES `TpNuevo`.`Precio` (`idPrecio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TpNuevo`.`Menu_has_Pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TpNuevo`.`Menu_has_Pedido` (
  `Menu_idMenu` INT NOT NULL,
  `Pedido_idPedido` INT NOT NULL,
  PRIMARY KEY (`Menu_idMenu`, `Pedido_idPedido`),
  CONSTRAINT `fk_Menu_has_Pedido_Menu1`
    FOREIGN KEY (`Menu_idMenu`)
    REFERENCES `TpNuevo`.`Menu` (`idMenu`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Menu_has_Pedido_Pedido1`
    FOREIGN KEY (`Pedido_idPedido`)
    REFERENCES `TpNuevo`.`Pedido` (`idPedido`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TpNuevo`.`PuntoDeVenta_has_Menu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TpNuevo`.`PuntoDeVenta_has_Menu` (
  `PuntoDeVenta_idPuntoDeVenta` INT NOT NULL,
  `Menu_idMenu` INT NOT NULL,
  `Menu_Precio_idPrecio` INT NOT NULL,
  PRIMARY KEY (`PuntoDeVenta_idPuntoDeVenta`, `Menu_idMenu`, `Menu_Precio_idPrecio`),
  CONSTRAINT `fk_PuntoDeVenta_has_Menu_PuntoDeVenta1`
    FOREIGN KEY (`PuntoDeVenta_idPuntoDeVenta`)
    REFERENCES `TpNuevo`.`PuntoDeVenta` (`idPuntoDeVenta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PuntoDeVenta_has_Menu_Menu1`
    FOREIGN KEY (`Menu_idMenu` , `Menu_Precio_idPrecio`)
    REFERENCES `TpNuevo`.`Menu` (`idMenu` , `Precio_idPrecio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TpNuevo`.`OpComercio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TpNuevo`.`OpComercio` (
  `idOpComercio` INT NOT NULL,
  `Usuario_idUsuario` INT NOT NULL,
  `Comercio_idComercio` INT NOT NULL,
  PRIMARY KEY (`idOpComercio`),
  CONSTRAINT `fk_OpComercio_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `TpNuevo`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_OpComercio_Comercio1`
    FOREIGN KEY (`Comercio_idComercio`)
    REFERENCES `TpNuevo`.`Comercio` (`idComercio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TpNuevo`.`Administrador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TpNuevo`.`Administrador` (
  `idAdministrador` INT NOT NULL,
  `Usuario_idUsuario` INT NOT NULL,
  PRIMARY KEY (`idAdministrador`),
  CONSTRAINT `fk_Administrador_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `TpNuevo`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


insert into Usuario (nombreUsuario, clave, rol)
values
('admin',md5('1111'),'admininstrador'),
('cliente1',md5('2222'),'cliente'),
('delivery1',md5('3333'),'delivery'),
('opcomercio1',md5('4444'),'opcomercio');
