-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema amiGo
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema amiGo
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `amiGo` DEFAULT CHARACTER SET utf8 ;
USE `amiGo` ;

-- -----------------------------------------------------
-- Table `amiGo`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amiGo`.`usuarios` (
  `idusuarios` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(300) NOT NULL,
  `foto` VARCHAR(300) NOT NULL,
  `email` VARCHAR(300) NOT NULL,
  `senha` VARCHAR(300) NOT NULL,
  PRIMARY KEY (`idusuarios`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `amiGo`.`posts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amiGo`.`posts` (
  `idposts` INT NOT NULL AUTO_INCREMENT,
  `texto` VARCHAR(300) NULL,
  `imagem` VARCHAR(300) NULL,
  `usuarios_idusuarios` INT NOT NULL,
  `like` INT NULL,
  PRIMARY KEY (`idposts`, `usuarios_idusuarios`),
  CONSTRAINT `fk_posts_usuarios1`
    FOREIGN KEY (`usuarios_idusuarios`)
    REFERENCES `amiGo`.`usuarios` (`idusuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `amiGo`.`comentarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amiGo`.`comentarios` (
  `idcomentarios` INT NOT NULL AUTO_INCREMENT,
  `texto` VARCHAR(300) NULL,
  `imagem` VARCHAR(300) NULL,
  `idposts_fk` INT NOT NULL,
  `like` INT NULL,
  PRIMARY KEY (`idcomentarios`, `idposts_fk`),
  CONSTRAINT `fk_comentarios_posts1`
    FOREIGN KEY (`idposts_fk`)
    REFERENCES `amiGo`.`posts` (`idposts`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `amiGo`.`sequirs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `amiGo`.`sequirs` (
  `idsequirs` INT NOT NULL AUTO_INCREMENT,
  `sequido_fk` INT NOT NULL,
  `sequidor_fk` INT NOT NULL,
  PRIMARY KEY (`idsequirs`, `sequido_fk`, `sequidor_fk`),
  CONSTRAINT `fk_sequirs_usuarios`
    FOREIGN KEY (`sequido_fk`)
    REFERENCES `amiGo`.`usuarios` (`idusuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_sequirs_usuarios1`
    FOREIGN KEY (`sequidor_fk`)
    REFERENCES `amiGo`.`usuarios` (`idusuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
