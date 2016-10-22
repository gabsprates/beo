SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `curriculoFacomp` ;
CREATE SCHEMA IF NOT EXISTS `curriculoFacomp` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `curriculoFacomp` ;

-- -----------------------------------------------------
-- Table `curriculoFacomp`.`Curriculo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `curriculoFacomp`.`Curriculo` ;

CREATE TABLE IF NOT EXISTS `curriculoFacomp`.`Curriculo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(45) NULL,
  `senha` VARCHAR(45) NULL,
  `matricula` VARCHAR(45) NULL,
  `nome` VARCHAR(90) NULL,
  `endereco` VARCHAR(150) NULL,
  `telefone` VARCHAR(45) NULL,
  `telefone2` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `datanascimento` DATE NULL,
  `resumoqualificacao` MEDIUMTEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `curriculoFacomp`.`FormacaoAcademica`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `curriculoFacomp`.`FormacaoAcademica` ;

CREATE TABLE IF NOT EXISTS `curriculoFacomp`.`FormacaoAcademica` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `curso` VARCHAR(60) NULL,
  `conclusao` YEAR NULL,
  `instituicao` VARCHAR(90) NULL,
  `FormacaoAcademicacol` VARCHAR(45) NULL,
  `Curriculo_id` INT NOT NULL,
  PRIMARY KEY (`id`, `Curriculo_id`),
  INDEX `fk_FormacaoAcademica_Curriculo_idx` (`Curriculo_id` ASC),
  CONSTRAINT `fk_FormacaoAcademica_Curriculo`
    FOREIGN KEY (`Curriculo_id`)
    REFERENCES `curriculoFacomp`.`Curriculo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `curriculoFacomp`.`FormaçãoComplementar`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `curriculoFacomp`.`FormaçãoComplementar` ;

CREATE TABLE IF NOT EXISTS `curriculoFacomp`.`FormaçãoComplementar` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `curso` VARCHAR(60) NULL,
  `conteudo` TEXT NULL,
  `nivel` VARCHAR(50) NULL,
  `cargahoraria` VARCHAR(8) NULL,
  `instituicao` VARCHAR(90) NULL,
  `ano` INT NULL,
  `Curriculo_id` INT NOT NULL,
  PRIMARY KEY (`id`, `Curriculo_id`),
  INDEX `fk_FormaçãoComplementar_Curriculo1_idx` (`Curriculo_id` ASC),
  CONSTRAINT `fk_FormaçãoComplementar_Curriculo1`
    FOREIGN KEY (`Curriculo_id`)
    REFERENCES `curriculoFacomp`.`Curriculo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `curriculoFacomp`.`idioma`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `curriculoFacomp`.`idioma` ;

CREATE TABLE IF NOT EXISTS `curriculoFacomp`.`idioma` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `nivel_leitura` VARCHAR(45) NULL,
  `nivel_escrita` VARCHAR(45) NULL,
  `idiomacol` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `curriculoFacomp`.`Curriculo_has_idioma`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `curriculoFacomp`.`Curriculo_has_idioma` ;

CREATE TABLE IF NOT EXISTS `curriculoFacomp`.`Curriculo_has_idioma` (
  `Curriculo_id` INT NOT NULL,
  `idioma_id` INT NOT NULL,
  PRIMARY KEY (`Curriculo_id`, `idioma_id`),
  INDEX `fk_Curriculo_has_idioma_idioma1_idx` (`idioma_id` ASC),
  INDEX `fk_Curriculo_has_idioma_Curriculo1_idx` (`Curriculo_id` ASC),
  CONSTRAINT `fk_Curriculo_has_idioma_Curriculo1`
    FOREIGN KEY (`Curriculo_id`)
    REFERENCES `curriculoFacomp`.`Curriculo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Curriculo_has_idioma_idioma1`
    FOREIGN KEY (`idioma_id`)
    REFERENCES `curriculoFacomp`.`idioma` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `curriculoFacomp`.`ExperienciaProfissional`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `curriculoFacomp`.`ExperienciaProfissional` ;

CREATE TABLE IF NOT EXISTS `curriculoFacomp`.`ExperienciaProfissional` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `empresa` VARCHAR(45) NULL,
  `anoinicio` YEAR NULL,
  `anofim` YEAR NULL,
  `cargo` VARCHAR(45) NULL,
  `descricaoAtividades` MEDIUMTEXT NULL,
  `Curriculo_id` INT NOT NULL,
  PRIMARY KEY (`id`, `Curriculo_id`),
  INDEX `fk_ExperienciaProfissional_Curriculo1_idx` (`Curriculo_id` ASC),
  CONSTRAINT `fk_ExperienciaProfissional_Curriculo1`
    FOREIGN KEY (`Curriculo_id`)
    REFERENCES `curriculoFacomp`.`Curriculo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `curriculoFacomp`.`Empresa`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `curriculoFacomp`.`Empresa` ;

CREATE TABLE IF NOT EXISTS `curriculoFacomp`.`Empresa` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(90) NULL,
  `cnpj` VARCHAR(45) NULL,
  `telefone` VARCHAR(45) NULL,
  `telefone2` VARCHAR(45) NULL,
  `endereco` VARCHAR(150) NULL,
  `email` VARCHAR(90) NULL,
  `atuacao` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `curriculoFacomp`.`PerfilEmpregado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `curriculoFacomp`.`PerfilEmpregado` ;

CREATE TABLE IF NOT EXISTS `curriculoFacomp`.`PerfilEmpregado` (
  `id` INT NOT NULL,
  `perfl` VARCHAR(90) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `curriculoFacomp`.`PerfilEmpregado_has_Empresa`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `curriculoFacomp`.`PerfilEmpregado_has_Empresa` ;

CREATE TABLE IF NOT EXISTS `curriculoFacomp`.`PerfilEmpregado_has_Empresa` (
  `PerfilEmpregado_id` INT NOT NULL,
  `Empresa_id` INT NOT NULL,
  PRIMARY KEY (`PerfilEmpregado_id`, `Empresa_id`),
  INDEX `fk_PerfilEmpregado_has_Empresa_Empresa1_idx` (`Empresa_id` ASC),
  INDEX `fk_PerfilEmpregado_has_Empresa_PerfilEmpregado1_idx` (`PerfilEmpregado_id` ASC),
  CONSTRAINT `fk_PerfilEmpregado_has_Empresa_PerfilEmpregado1`
    FOREIGN KEY (`PerfilEmpregado_id`)
    REFERENCES `curriculoFacomp`.`PerfilEmpregado` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PerfilEmpregado_has_Empresa_Empresa1`
    FOREIGN KEY (`Empresa_id`)
    REFERENCES `curriculoFacomp`.`Empresa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `curriculoFacomp`.`vagas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `curriculoFacomp`.`vagas` ;

CREATE TABLE IF NOT EXISTS `curriculoFacomp`.`vagas` (
  `id` INT NOT NULL,
  `titulo` VARCHAR(100) NULL,
  `descricao` TEXT NULL,
  `Empresa_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_vagas_Empresa1_idx` (`Empresa_id` ASC),
  CONSTRAINT `fk_vagas_Empresa1`
    FOREIGN KEY (`Empresa_id`)
    REFERENCES `curriculoFacomp`.`Empresa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
