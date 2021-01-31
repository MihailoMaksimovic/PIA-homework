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

INSERT INTO `filmovi`(`naslov`,`opis`,`zanr`,`scenarista`,`reziser`,`producentskaKuca`,`glumci`,`godinaIzdanja`,`poster`,`trajanje`,`ocena`,`brojOcena`) VALUES 
( 'Herkules', 'mitologija ', 'crtani', 'nemam pojma', 'nemam pojma', 'disney', 'izmisljeni', '1999', 'https://img.discogs.com/fZB0ibtDh9jdG6dYhGTUURM_AEA=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-7617405-1445246773-3555.jpeg.jpg', '120', '0', '' ),
( 'petar pan', 'decak koji leti', 'crtani ', 'nemam pojma', 'nemam pojma', 'disney', 'izmisljeni', '1989', 'https://lumiere-a.akamaihd.net/v1/images/p_peterpan_homeentertainment_97494bba.jpeg?region=0%2C0%2C300%2C450', '120', '0', '' );
COMMIT;
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


