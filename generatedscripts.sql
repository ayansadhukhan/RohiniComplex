-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema rohinicomplex
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema rohinicomplex
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `rohinicomplex` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `rohinicomplex` ;

-- -----------------------------------------------------
-- Table `rohinicomplex`.`GARRIAGETYPE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`GARRIAGETYPE` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `NAME` VARCHAR(20) NOT NULL,
  `DESCRIPTION` VARCHAR(200) NULL,
  `CODE` VARCHAR(20) NOT NULL,
  `RETIRED` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`BILLTYPE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`BILLTYPE` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `NAME` VARCHAR(20) NOT NULL,
  `DESCRIPTION` VARCHAR(200) NULL,
  `CODE` VARCHAR(20) NOT NULL,
  `RETIRED` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`ASSETTYPE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`ASSETTYPE` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `NAME` VARCHAR(20) NOT NULL,
  `DESCRIPTION` VARCHAR(200) NULL,
  `CODE` VARCHAR(20) NOT NULL,
  `RETIRED` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`WRITEOFFREASONTYPE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`WRITEOFFREASONTYPE` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `NAME` VARCHAR(20) NOT NULL,
  `DESCRIPTION` VARCHAR(200) NULL,
  `CODE` VARCHAR(20) NOT NULL,
  `RETIRED` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`USERDOCUMENTTYPE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`USERDOCUMENTTYPE` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `NAME` VARCHAR(20) NOT NULL,
  `DESCRIPTION` VARCHAR(200) NULL,
  `CODE` VARCHAR(20) NOT NULL,
  `RETIRED` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`VIDETYPE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`VIDETYPE` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `NAME` VARCHAR(20) NOT NULL,
  `DESCRIPTION` VARCHAR(200) NULL,
  `CODE` VARCHAR(20) NOT NULL,
  `RETIRED` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`TRANSACTIONTYPE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`TRANSACTIONTYPE` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `NAME` VARCHAR(20) NOT NULL,
  `DESCRIPTION` VARCHAR(200) NULL,
  `CODE` VARCHAR(20) NOT NULL,
  `RETIRED` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`CATEGORYTYPE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`CATEGORYTYPE` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `NAME` VARCHAR(20) NOT NULL,
  `DESCRIPTION` VARCHAR(200) NULL,
  `CODE` VARCHAR(20) NOT NULL,
  `RETIRED` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`PERCENTAGETYPE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`PERCENTAGETYPE` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `NAME` VARCHAR(20) NOT NULL,
  `DESCRIPTION` VARCHAR(200) NULL,
  `CODE` VARCHAR(20) NOT NULL,
  `RETIRED` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`ROLE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`ROLE` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `NAME` VARCHAR(20) NOT NULL,
  `DISPLAY_NAME` VARCHAR(50) NOT NULL,
  `RETIRED` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `NAME_UNIQUE` (`NAME` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`PERMISSION`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`PERMISSION` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `NAME` VARCHAR(20) NOT NULL,
  `DISPLAY_NAME` VARCHAR(50) NOT NULL,
  `RETIRED` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `NAME_UNIQUE` (`NAME` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`ROLEXPERMISSION`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`ROLEXPERMISSION` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `ROLE` INT NULL,
  `PERMISSION` INT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `ROLE_UNIQUE` (`ROLE` ASC),
  UNIQUE INDEX `PERMISSION_UNIQUE` (`PERMISSION` ASC),
  CONSTRAINT `ROLE`
    FOREIGN KEY (`ROLE`)
    REFERENCES `rohinicomplex`.`ROLE` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `PERMISSION`
    FOREIGN KEY (`PERMISSION`)
    REFERENCES `rohinicomplex`.`PERMISSION` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`USER`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`USER` (
  `ID` INT NOT NULL,
  `FNAME` VARCHAR(20) NOT NULL,
  `MNAME` VARCHAR(20) NULL,
  `LNAME` VARCHAR(20) NOT NULL,
  `SEX` CHAR(1) NOT NULL,
  `DOB` DATE NULL,
  `ADDRESS` VARCHAR(200) NULL,
  `PIN` CHAR(6) NULL,
  `MOBILENUMBER` CHAR(10) NULL,
  `PHONE` VARCHAR(15) NULL,
  `EMAIL` VARCHAR(45) NULL,
  `RETIRED` TINYINT(1) NOT NULL,
  `IMAGE` BLOB NULL,
  `VERIFIED` TINYINT(1) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`CREDENTIALS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`CREDENTIALS` (
  `ID` INT NOT NULL,
  `USERNAME` VARCHAR(45) NOT NULL,
  `PASSWORD` VARCHAR(100) NOT NULL,
  `RETIRED` TINYINT(1) NOT NULL DEFAULT 0,
  `RETRYCOUNT` INT NOT NULL,
  `LOCKED` TINYINT(1) NOT NULL DEFAULT 0,
  `USERID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `USERID_idx` (`USERID` ASC),
  CONSTRAINT `USERID`
    FOREIGN KEY (`USERID`)
    REFERENCES `rohinicomplex`.`USER` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`USERXROLE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`USERXROLE` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `ROLE` INT NULL,
  `USER` INT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `ROLE_UNIQUE` (`ROLE` ASC),
  UNIQUE INDEX `PERMISSION_UNIQUE` (`USER` ASC),
  CONSTRAINT `ROLE0`
    FOREIGN KEY (`ROLE`)
    REFERENCES `rohinicomplex`.`ROLE` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `USER`
    FOREIGN KEY (`USER`)
    REFERENCES `rohinicomplex`.`USER` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`USERVERIDOC`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`USERVERIDOC` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `USERID` INT NOT NULL,
  `USERDOCUMENTTYPE` INT NOT NULL,
  `DESCRIPTION` VARCHAR(200) NULL,
  `DCOUMENT` BLOB NULL,
  `UPLOADED` TINYINT(1) NOT NULL DEFAULT 0,
  `VERIFIED` TINYINT(1) NOT NULL DEFAULT 0,
  `UPLOADEDBY` INT NULL,
  `UPLOADTIME` DATETIME NULL,
  `VERFIEDBY` INT NULL,
  `VERIFIEDON` DATETIME NULL,
  PRIMARY KEY (`ID`),
  INDEX `USERID_idx` (`USERID` ASC),
  INDEX `VERIFIEDBY_idx` (`VERFIEDBY` ASC),
  INDEX `UPLOADEDBY_idx` (`UPLOADEDBY` ASC),
  INDEX `DOCUMENTTYPE_idx` (`USERDOCUMENTTYPE` ASC),
  CONSTRAINT `USERID`
    FOREIGN KEY (`USERID`)
    REFERENCES `rohinicomplex`.`USER` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `UPLOADEDBY`
    FOREIGN KEY (`UPLOADEDBY`)
    REFERENCES `rohinicomplex`.`USER` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `VERIFIEDBY`
    FOREIGN KEY (`VERFIEDBY`)
    REFERENCES `rohinicomplex`.`USER` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `DOCUMENTTYPE`
    FOREIGN KEY (`USERDOCUMENTTYPE`)
    REFERENCES `rohinicomplex`.`USERDOCUMENTTYPE` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`FLATDETAIL`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`FLATDETAIL` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `BLOCK` CHAR(1) NOT NULL,
  `FLATNUMBER` CHAR(3) NOT NULL,
  `SQFT` INT NOT NULL,
  `FLOOR` CHAR(1) NOT NULL,
  `DESCRIPTION` VARCHAR(200) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`GARRIAGEDETAIL`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`GARRIAGEDETAIL` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `GARRIAGENUMBER` VARCHAR(5) NOT NULL,
  `GARRIAGETYPEID` INT NULL,
  `SQFT` INT NULL,
  PRIMARY KEY (`ID`),
  INDEX `GARRIAGETYPEID_idx` (`GARRIAGETYPEID` ASC),
  CONSTRAINT `GARRIAGETYPEID`
    FOREIGN KEY (`GARRIAGETYPEID`)
    REFERENCES `rohinicomplex`.`GARRIAGETYPE` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`ASSET`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`ASSET` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `GARRIAGEID` INT NULL,
  `FLATID` INT NULL,
  `ASSETTYPEID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `GARRIAGEID_idx` (`GARRIAGEID` ASC),
  INDEX `FLATID_idx` (`FLATID` ASC),
  INDEX `ASSETTYPEID_idx` (`ASSETTYPEID` ASC),
  CONSTRAINT `GARRIAGEID`
    FOREIGN KEY (`GARRIAGEID`)
    REFERENCES `rohinicomplex`.`GARRIAGEDETAIL` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FLATID`
    FOREIGN KEY (`FLATID`)
    REFERENCES `rohinicomplex`.`FLATDETAIL` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `ASSETTYPEID`
    FOREIGN KEY (`ASSETTYPEID`)
    REFERENCES `rohinicomplex`.`ASSETTYPE` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`OWNERASSETMAPPING`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`OWNERASSETMAPPING` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `USERID` INT NOT NULL,
  `ASSETID` INT NULL,
  `STARTDATE` DATE NOT NULL,
  `ENDDATE` DATE NULL,
  PRIMARY KEY (`ID`),
  INDEX `USERID_idx` (`USERID` ASC),
  INDEX `ASSETID_idx` (`ASSETID` ASC),
  CONSTRAINT `USERID`
    FOREIGN KEY (`USERID`)
    REFERENCES `rohinicomplex`.`USER` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `ASSETID`
    FOREIGN KEY (`ASSETID`)
    REFERENCES `rohinicomplex`.`ASSET` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`TENANTASSETMAPPING`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`TENANTASSETMAPPING` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `USERID` INT NOT NULL,
  `ASSETID` INT NULL,
  `STARTDATE` DATE NOT NULL,
  `ENDDATE` DATE NULL,
  PRIMARY KEY (`ID`),
  INDEX `USERID_idx` (`USERID` ASC),
  INDEX `ASSETID_idx` (`ASSETID` ASC),
  CONSTRAINT `USERID0`
    FOREIGN KEY (`USERID`)
    REFERENCES `rohinicomplex`.`USER` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `ASSETID0`
    FOREIGN KEY (`ASSETID`)
    REFERENCES `rohinicomplex`.`ASSET` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`FACILITYDETAIL`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`FACILITYDETAIL` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `NAME` VARCHAR(5) NOT NULL,
  `DESCRIPTION` VARCHAR(200) NOT NULL,
  `BILLTYPEID` INT NOT NULL,
  `BILLFREQUENCY` INT NULL,
  PRIMARY KEY (`ID`),
  INDEX `BILLTYPEID_idx` (`BILLTYPEID` ASC),
  CONSTRAINT `BILLTYPEID`
    FOREIGN KEY (`BILLTYPEID`)
    REFERENCES `rohinicomplex`.`BILLTYPE` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`FACILITYMAPPING`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`FACILITYMAPPING` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `USERID` INT NOT NULL,
  `FACILITYID` INT NOT NULL,
  `STARTDATE` DATE NOT NULL,
  `ENDDATE` DATE NULL,
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `STARTDATE_UNIQUE` (`STARTDATE` ASC),
  INDEX `FACILITYID_idx` (`FACILITYID` ASC),
  INDEX `USERID_idx` (`USERID` ASC),
  CONSTRAINT `FACILITYID`
    FOREIGN KEY (`FACILITYID`)
    REFERENCES `rohinicomplex`.`FACILITYDETAIL` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `USERID`
    FOREIGN KEY (`USERID`)
    REFERENCES `rohinicomplex`.`USER` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`PAYMENT`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`PAYMENT` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `DATE` DATE NOT NULL,
  `VIDETYPEID` INT NOT NULL,
  `AMOUNT` DECIMAL NOT NULL,
  `USERID` INT NOT NULL,
  `RECEIVEDBY` INT NOT NULL,
  `REVERSED` TINYINT(1) NOT NULL DEFAULT 0,
  `REFNO` VARCHAR(20) NULL,
  PRIMARY KEY (`ID`),
  INDEX `VIDETYPEID_idx` (`VIDETYPEID` ASC),
  INDEX `USERID_idx` (`USERID` ASC),
  INDEX `RECEIVEDBY_idx` (`RECEIVEDBY` ASC),
  CONSTRAINT `VIDETYPEID`
    FOREIGN KEY (`VIDETYPEID`)
    REFERENCES `rohinicomplex`.`VIDETYPE` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `USERID`
    FOREIGN KEY (`USERID`)
    REFERENCES `rohinicomplex`.`USER` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `RECEIVEDBY`
    FOREIGN KEY (`RECEIVEDBY`)
    REFERENCES `rohinicomplex`.`USER` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`EXPENDATURE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`EXPENDATURE` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `DATE` DATE NOT NULL,
  `VIDETYPEID` INT NOT NULL,
  `CATEGORYTYPEID` INT NOT NULL,
  `AMOUNT` DECIMAL NOT NULL,
  `REFERENCE` VARCHAR(5) NULL,
  `DESCRIPTION` VARCHAR(200) NOT NULL,
  `PAIDBY` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `VIDETYPEID_idx` (`VIDETYPEID` ASC),
  INDEX `CATEGORYTYPEID_idx` (`CATEGORYTYPEID` ASC),
  INDEX `PAIDBY_idx` (`PAIDBY` ASC),
  CONSTRAINT `VIDETYPEID`
    FOREIGN KEY (`VIDETYPEID`)
    REFERENCES `rohinicomplex`.`VIDETYPE` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `CATEGORYTYPEID`
    FOREIGN KEY (`CATEGORYTYPEID`)
    REFERENCES `rohinicomplex`.`CATEGORYTYPE` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `PAIDBY`
    FOREIGN KEY (`PAIDBY`)
    REFERENCES `rohinicomplex`.`USER` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`CHARGEPATTERNDETAIL`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`CHARGEPATTERNDETAIL` (
  `ID` INT NOT NULL,
  `STARTDATE` DATE NOT NULL,
  `ENDDATE` DATE NULL,
  `PERCENTAGE` DECIMAL NULL,
  `FIXEDAMOUNT` DECIMAL NULL,
  `RETIRED` TINYINT(1) NOT NULL DEFAULT 0,
  `PERCENTAGEOF` INT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`CHARGEPATTERN`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`CHARGEPATTERN` (
  `ID` INT NOT NULL,
  `NAME` VARCHAR(50) NOT NULL,
  `DESCRIPTION` VARCHAR(50) NULL,
  `PATTERNDETAIL` INT NOT NULL,
  `PERIODICITY` INT NOT NULL,
  `CATEGORYTYPEID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `CATEGORYTYPEID_idx` (`CATEGORYTYPEID` ASC),
  INDEX `CHARGEPATTERNDETAIL_idx` (`PATTERNDETAIL` ASC),
  CONSTRAINT `CATEGORYTYPEID`
    FOREIGN KEY (`CATEGORYTYPEID`)
    REFERENCES `rohinicomplex`.`CATEGORYTYPE` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `CHARGEPATTERNDETAIL`
    FOREIGN KEY (`PATTERNDETAIL`)
    REFERENCES `rohinicomplex`.`CHARGEPATTERNDETAIL` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`CHARGE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`CHARGE` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `HOLD` TINYINT(1) NOT NULL DEFAULT 0,
  `AMOUNT` DECIMAL NULL,
  `ASSETID` INT NULL,
  `REVERSED` TINYINT(1) NOT NULL DEFAULT 0,
  `EVENTDATE` DATE NOT NULL,
  `DUEDATE` DATE NOT NULL,
  `CREATEDBY` INT NOT NULL,
  `FACILITYID` INT NULL,
  `CHARGEPATTERN` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `CHARGEPATTERN_idx` (`CHARGEPATTERN` ASC),
  INDEX `CREATEDBY_idx` (`CREATEDBY` ASC),
  INDEX `ASSETID_idx` (`ASSETID` ASC),
  INDEX `FACILITYID_idx` (`FACILITYID` ASC),
  CONSTRAINT `CHARGEPATTERN`
    FOREIGN KEY (`CHARGEPATTERN`)
    REFERENCES `rohinicomplex`.`CHARGEPATTERN` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `CREATEDBY`
    FOREIGN KEY (`CREATEDBY`)
    REFERENCES `rohinicomplex`.`USER` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `ASSETID`
    FOREIGN KEY (`ASSETID`)
    REFERENCES `rohinicomplex`.`ASSET` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FACILITYID`
    FOREIGN KEY (`FACILITYID`)
    REFERENCES `rohinicomplex`.`FACILITYDETAIL` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`PAYMENTITEM`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`PAYMENTITEM` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `PAYMENTID` INT NOT NULL,
  `AMOUNT` DECIMAL NOT NULL,
  `CHARGEID` INT NOT NULL,
  `REVERSED` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`),
  INDEX `PAYMENTID_idx` (`PAYMENTID` ASC),
  INDEX `CHARGEID_idx` (`CHARGEID` ASC),
  CONSTRAINT `PAYMENTID`
    FOREIGN KEY (`PAYMENTID`)
    REFERENCES `rohinicomplex`.`PAYMENT` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `CHARGEID`
    FOREIGN KEY (`CHARGEID`)
    REFERENCES `rohinicomplex`.`CHARGE` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`WRITEOFF`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`WRITEOFF` (
  `ID` INT NOT NULL,
  `DATE` DATE NOT NULL,
  `AMOUNT` DECIMAL NOT NULL,
  `BILLNUMBER` VARCHAR(5) NULL,
  `USERID` INT NOT NULL,
  `RECEIVEDBY` INT NOT NULL,
  `REVERSED` TINYINT(1) NOT NULL DEFAULT 0,
  `EBILLNO` INT NOT NULL AUTO_INCREMENT,
  `REASON` INT NULL,
  PRIMARY KEY (`ID`),
  INDEX `USERID_idx` (`USERID` ASC),
  INDEX `RECEIVEDBY_idx` (`RECEIVEDBY` ASC),
  INDEX `REASON_idx` (`REASON` ASC),
  CONSTRAINT `USERID`
    FOREIGN KEY (`USERID`)
    REFERENCES `rohinicomplex`.`USER` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `RECEIVEDBY`
    FOREIGN KEY (`RECEIVEDBY`)
    REFERENCES `rohinicomplex`.`USER` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `REASON`
    FOREIGN KEY (`REASON`)
    REFERENCES `rohinicomplex`.`WRITEOFFREASONTYPE` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`WRITEOFFITEM`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`WRITEOFFITEM` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `WRITEOFFID` INT NOT NULL,
  `AMOUNT` DECIMAL NOT NULL,
  `CHARGEID` INT NOT NULL,
  `REVERSED` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`),
  INDEX `WRITEOFFID_idx` (`WRITEOFFID` ASC),
  INDEX `CHARGEID_idx` (`CHARGEID` ASC),
  CONSTRAINT `WRITEOFFID`
    FOREIGN KEY (`WRITEOFFID`)
    REFERENCES `rohinicomplex`.`WRITEOFF` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `CHARGEID`
    FOREIGN KEY (`CHARGEID`)
    REFERENCES `rohinicomplex`.`CHARGE` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rohinicomplex`.`BILL`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rohinicomplex`.`BILL` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `EBILLNO` INT NOT NULL,
  `PAYMENTID` INT NOT NULL,
  `BILLEDTO` INT NOT NULL,
  `BILLDATE` DATE NOT NULL,
  `WRITEOFFID` INT NOT NULL,
  `BILLNUMBER` VARCHAR(5) NOT NULL,
  `GENERATEDBY` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `PAYMENTID_idx` (`PAYMENTID` ASC),
  INDEX `WRITEOFFID_idx` (`WRITEOFFID` ASC),
  INDEX `GENERATEDBY_idx` (`GENERATEDBY` ASC),
  INDEX `BILLEDTO_idx` (`BILLEDTO` ASC),
  CONSTRAINT `PAYMENTID`
    FOREIGN KEY (`PAYMENTID`)
    REFERENCES `rohinicomplex`.`PAYMENT` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `WRITEOFFID`
    FOREIGN KEY (`WRITEOFFID`)
    REFERENCES `rohinicomplex`.`WRITEOFF` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `GENERATEDBY`
    FOREIGN KEY (`GENERATEDBY`)
    REFERENCES `rohinicomplex`.`USER` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `BILLEDTO`
    FOREIGN KEY (`BILLEDTO`)
    REFERENCES `rohinicomplex`.`USER` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
