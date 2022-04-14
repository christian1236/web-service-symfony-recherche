SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `annuL`
--
CREATE DATABASE IF NOT EXISTS `annuL` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `annuL`;

-- --------------------------------------------------------

--
-- Structure de la table `base`
--

CREATE TABLE IF NOT EXISTS `base` (
 `civ` varchar(30) NOT NULL,
 `nom` varchar(150) NOT NULL,
 `prenom` varchar(150) NOT NULL,
 `adr1` varchar(38) NOT NULL,
 `adr2` varchar(38) NOT NULL,
 `adr3` varchar(38) NOT NULL,
 `adr4` varchar(38) NOT NULL,
 `cp` varchar(10) NOT NULL,
 `ville` varchar(32) NOT NULL,
 `pays` varchar(10) NOT NULL,
 `insee` varchar(5) NOT NULL,
 `iris` varchar(4) NOT NULL DEFAULT '000',
 `inseeIris` varchar(9) NOT NULL,
 `irisCanton` varchar(2) NOT NULL,
 `age` int(3) NOT NULL,
 `sexe` char(1) NOT NULL,
 `nfoyer` int(3) NOT NULL,
 `pro` varchar(5) NOT NULL,
 `opposeMD` varchar(3) NOT NULL DEFAULT 'Non',
 `matchmi` varchar(100) NOT NULL,
 `hexacle` varchar(50) NOT NULL,
 `tailleAglo` tinyint(1) NOT NULL,
 `DATEMODIF` varchar(10) NOT NULL,
 `TYPEMODIF` char(1) NOT NULL,
 `ORIGINE` varchar(50) NOT NULL,
 `F_NGROUP` varchar(50) NOT NULL,
 `I_NGroup` varchar(50) NOT NULL,
 `F_DUP` varchar(10) NOT NULL,
 `I_DUP` varchar(5) NOT NULL,
 `ident` int(11) NOT NULL AUTO_INCREMENT,
 KEY `idx_ident` (`ident`),
 KEY `idx_cp` (`cp`),
 KEY `idx_insee` (`insee`),
 KEY `idx_inseeIris` (`inseeIris`) USING BTREE,
 KEY `idx_iris` (`iris`) USING BTREE,
 KEY `idx_age` (`age`),
 KEY `idx_sex` (`sexe`),
 KEY `idx_nfoyer` (`nfoyer`),
 KEY `idx_pro` (`pro`),
 KEY `idx_TYPEMODIF` (`TYPEMODIF`) USING BTREE,
 KEY `idx_DATEMODIF` (`DATEMODIF`) USING BTREE,
 KEY `F_NGROUP` (`F_NGROUP`,`F_DUP`),
 KEY `I_NGROUP` (`I_NGroup`) USING BTREE,
 KEY `matchmi` (`matchmi`)
) ENGINE=InnoDB AUTO_INCREMENT=41037166 DEFAULT CHARSET=latin1 COMMENT='Contient les informations de base : nom/prenom, civ, adresse ...';

-- --------------------------------------------------------

--
-- Structure de la table `F_Complement`
--

CREATE TABLE IF NOT EXISTS `F_Complement` (
 `F_NGroup` varchar(50) NOT NULL,
 `postal_origine` varchar(50) NOT NULL,
 `Fix_valeur` varchar(32) NOT NULL,
 `fix_origine` varchar(50) NOT NULL,
 `fix_id` varchar(20) NOT NULL,
 `Fix2_valeur` varchar(32) NOT NULL,
 `fix2_origine` varchar(50) NOT NULL,
 `fix2_id` varchar(20) NOT NULL,
 `portable_valeur` varchar(32) NOT NULL,
 `portable_origine` varchar(50) NOT NULL,
 `portable_id` varchar(20) NOT NULL,
 `email_valeur` varchar(32) NOT NULL,
 `email_origine` varchar(50) NOT NULL,
 `email_id` varchar(20) NOT NULL,
 `statut_habitation_val` varchar(1) NOT NULL,
 `statut_habitation_origine` varchar(50) NOT NULL,
 `statut_habitation_id` varchar(20) NOT NULL,
 `type_habitat_val` varchar(1) NOT NULL,
 `type_habitat_origine` varchar(50) NOT NULL,
 `type_habitat_id` varchar(20) NOT NULL,
 `csp_val` varchar(1) NOT NULL,
 `csp_origine` varchar(50) NOT NULL,
 `csp_id` varchar(20) NOT NULL,
 PRIMARY KEY (`F_NGroup`),
 KEY `idx_fix_valeur` (`Fix_valeur`),
 KEY `idx_fix2_valeur` (`Fix2_valeur`),
 KEY `idx_email_valeur` (`email_valeur`),
 KEY `idx_portable_valeur` (`portable_valeur`),
 KEY `idx_fix_origine` (`fix_origine`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `I_Complement`
--

CREATE TABLE IF NOT EXISTS `I_Complement` (
 `I_NGroup` varchar(50) NOT NULL,
 `postal_origine` varchar(50) NOT NULL,
 `dnaiss` varchar(12) NOT NULL,
 `Fix_valeur` varchar(32) NOT NULL,
 `fix_origine` varchar(50) NOT NULL,
 `fix_id` varchar(20) NOT NULL,
 `Fix2_valeur` varchar(32) NOT NULL,
 `fix2_origine` varchar(50) NOT NULL,
 `fix2_id` varchar(20) NOT NULL,
 `portable_valeur` varchar(32) NOT NULL,
 `portable_origine` varchar(50) NOT NULL,
 `portable_id` varchar(20) NOT NULL,
 `email_valeur` varchar(32) NOT NULL,
 `email_origine` varchar(50) NOT NULL,
 `email_id` varchar(20) NOT NULL,
 `statut_habitation_val` varchar(1) NOT NULL,
 `statut_habitation_origine` varchar(50) NOT NULL,
 `statut_habitation_id` varchar(20) NOT NULL,
 `type_habitat_val` varchar(1) NOT NULL,
 `type_habitat_origine` varchar(50) NOT NULL,
 `type_habitat_id` varchar(20) NOT NULL,
 `csp_val` varchar(1) NOT NULL,
 `csp_origine` varchar(50) NOT NULL,
 `csp_id` varchar(20) NOT NULL,
 PRIMARY KEY (`I_NGroup`),
 KEY `idx_fix_valeur` (`Fix_valeur`),
 KEY `idx_fix2_valeur` (`Fix2_valeur`),
 KEY `idx_portable_valeur` (`portable_valeur`),
 KEY `idx_email_valeur` (`email_valeur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
