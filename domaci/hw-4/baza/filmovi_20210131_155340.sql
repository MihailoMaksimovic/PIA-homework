-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE DATABASE "filmovi" -------------------------------
CREATE DATABASE IF NOT EXISTS `filmovi` CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `filmovi`;
-- ---------------------------------------------------------


-- CREATE TABLE "filmovi" --------------------------------------
CREATE TABLE `filmovi`( 
	`naslov` Text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`opis` Text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`zanr` Text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`scenarista` Text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`reziser` Text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`producentskaKuca` Text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`glumci` Text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`godinaIzdanja` Int( 11 ) NOT NULL,
	`poster` Text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`trajanje` Int( 11 ) NOT NULL,
	`ocena` Int( 255 ) NOT NULL DEFAULT 0,
	`brojOcena` VarChar( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0' )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------


-- Dump data of "filmovi" ----------------------------------
BEGIN;


COMMIT;
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


