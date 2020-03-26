-- MySQL Script generated by MySQL Workbench
-- Thu Mar 26 11:23:31 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Users` (
  `idUsers` INT NOT NULL AUTO_INCREMENT,
  `Username` VARCHAR(20) NULL,
  `Password` VARCHAR(100) NULL,
  `Name` VARCHAR(100) NULL,
  `Firstname` VARCHAR(100) NULL,
  `Email` VARCHAR(254) NULL,
  PRIMARY KEY (`idUsers`),
  UNIQUE INDEX `idUsers_UNIQUE` (`idUsers` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Recipe`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Recipe` (
  `idRecette` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(100) NULL,
  `Description` VARCHAR(2000) NULL,
  `Quantity` INT NULL,
  `CookingTime` INT NULL,
  `PreparationTime` INT NULL,
  `Difficulty` INT NULL,
  `ImageSRC` VARCHAR(256) NULL,
  PRIMARY KEY (`idRecette`),
  UNIQUE INDEX `idRecette_UNIQUE` (`idRecette` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Users_has_Recette`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Users_has_Recette` (
  `Users_idUsers` INT NOT NULL,
  `Recette_idRecette` INT NOT NULL,
  PRIMARY KEY (`Users_idUsers`, `Recette_idRecette`),
  INDEX `fk_Users_has_Recette_Recette1_idx` (`Recette_idRecette` ASC) VISIBLE,
  INDEX `fk_Users_has_Recette_Users_idx` (`Users_idUsers` ASC) VISIBLE,
  CONSTRAINT `fk_Users_has_Recette_Users`
    FOREIGN KEY (`Users_idUsers`)
    REFERENCES `mydb`.`Users` (`idUsers`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Users_has_Recette_Recette1`
    FOREIGN KEY (`Recette_idRecette`)
    REFERENCES `mydb`.`Recipe` (`idRecette`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Aliments_copy1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Aliments_copy1` (
  `idAliment` INT NOT NULL,
  `Nom_Aliment` VARCHAR(45) NOT NULL,
  `Calories` VARCHAR(45) NULL,
  `Proteines` VARCHAR(45) NULL,
  PRIMARY KEY (`idAliment`, `Nom_Aliment`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Ingredient`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Ingredient` (
  `idAliment` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(50) NULL,
  `Proteins` INT NULL,
  `Calories` INT NULL,
  PRIMARY KEY (`idAliment`),
  UNIQUE INDEX `idAliment_UNIQUE` (`idAliment` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Recette_has_Aliment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Recette_has_Aliment` (
  `Recette_idRecette` INT NOT NULL,
  `Aliment_idAliment` INT NOT NULL,
  PRIMARY KEY (`Recette_idRecette`, `Aliment_idAliment`),
  INDEX `fk_Recette_has_Aliment_Aliment1_idx` (`Aliment_idAliment` ASC) VISIBLE,
  INDEX `fk_Recette_has_Aliment_Recette1_idx` (`Recette_idRecette` ASC) VISIBLE,
  CONSTRAINT `fk_Recette_has_Aliment_Recette1`
    FOREIGN KEY (`Recette_idRecette`)
    REFERENCES `mydb`.`Recipe` (`idRecette`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Recette_has_Aliment_Aliment1`
    FOREIGN KEY (`Aliment_idAliment`)
    REFERENCES `mydb`.`Ingredient` (`idAliment`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`SavedMeals`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`SavedMeals` (
  `idSavedMeal` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(100) NULL,
  `TotCalories` INT NULL,
  PRIMARY KEY (`idSavedMeal`),
  UNIQUE INDEX `idSavedMeal_UNIQUE` (`idSavedMeal` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`SavedMealsByUsers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`SavedMealsByUsers` (
  `Users_idUsers` INT NOT NULL,
  `SavedMeals_idSavedMeal` INT NOT NULL,
  PRIMARY KEY (`Users_idUsers`, `SavedMeals_idSavedMeal`),
  INDEX `fk_Users_has_SavedMeals_SavedMeals1_idx` (`SavedMeals_idSavedMeal` ASC) VISIBLE,
  INDEX `fk_Users_has_SavedMeals_Users1_idx` (`Users_idUsers` ASC) VISIBLE,
  CONSTRAINT `fk_Users_has_SavedMeals_Users1`
    FOREIGN KEY (`Users_idUsers`)
    REFERENCES `mydb`.`Users` (`idUsers`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Users_has_SavedMeals_SavedMeals1`
    FOREIGN KEY (`SavedMeals_idSavedMeal`)
    REFERENCES `mydb`.`SavedMeals` (`idSavedMeal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Ingredients_Saved`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Ingredients_Saved` (
  `SavedMeals_idSavedMeal` INT NOT NULL,
  `Ingredient_idAliment` INT NOT NULL,
  PRIMARY KEY (`SavedMeals_idSavedMeal`, `Ingredient_idAliment`),
  INDEX `fk_SavedMeals_has_Ingredient_Ingredient1_idx` (`Ingredient_idAliment` ASC) VISIBLE,
  INDEX `fk_SavedMeals_has_Ingredient_SavedMeals1_idx` (`SavedMeals_idSavedMeal` ASC) VISIBLE,
  CONSTRAINT `fk_SavedMeals_has_Ingredient_SavedMeals1`
    FOREIGN KEY (`SavedMeals_idSavedMeal`)
    REFERENCES `mydb`.`SavedMeals` (`idSavedMeal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_SavedMeals_has_Ingredient_Ingredient1`
    FOREIGN KEY (`Ingredient_idAliment`)
    REFERENCES `mydb`.`Ingredient` (`idAliment`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Type` (
  `idType` INT NOT NULL AUTO_INCREMENT,
  `Type` VARCHAR(30) NULL,
  PRIMARY KEY (`idType`),
  UNIQUE INDEX `idType_UNIQUE` (`idType` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Recipe_Type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Recipe_Type` (
  `Recette_idRecette` INT NOT NULL,
  `Type_idType` INT NOT NULL,
  PRIMARY KEY (`Recette_idRecette`, `Type_idType`),
  INDEX `fk_Recette_has_Type_Type1_idx` (`Type_idType` ASC) VISIBLE,
  INDEX `fk_Recette_has_Type_Recette1_idx` (`Recette_idRecette` ASC) VISIBLE,
  CONSTRAINT `fk_Recette_has_Type_Recette1`
    FOREIGN KEY (`Recette_idRecette`)
    REFERENCES `mydb`.`Recipe` (`idRecette`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Recette_has_Type_Type1`
    FOREIGN KEY (`Type_idType`)
    REFERENCES `mydb`.`Type` (`idType`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
