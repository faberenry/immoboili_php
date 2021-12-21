-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Dic 21, 2021 alle 17:18
-- Versione del server: 10.1.31-MariaDB
-- Versione PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `immoboili`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `annuncio`
--

CREATE TABLE `annuncio` (
  `codAnnuncio` int(11) NOT NULL,
  `codLocatore` int(11) DEFAULT NULL,
  `costoMensile` decimal(7,2) DEFAULT NULL,
  `costoUtenze` decimal(7,2) DEFAULT NULL,
  `caparra` decimal(7,2) DEFAULT NULL,
  `speseAgenzia` decimal(7,2) DEFAULT NULL,
  `codLuogo` int(11) DEFAULT NULL,
  `numeroInquilini` int(11) DEFAULT NULL,
  `tipologiaAppartamento` varchar(50) DEFAULT NULL,
  `tipologiaContratto` varchar(50) DEFAULT NULL,
  `durataPerMinima` int(11) DEFAULT NULL,
  `tipoPerMinima` varchar(10) DEFAULT NULL,
  `metratura` decimal(7,2) DEFAULT NULL,
  `classeEnergetica` varchar(5) DEFAULT NULL,
  `speseCondominiali` decimal(7,2) DEFAULT NULL,
  `garage` int(11) DEFAULT '0',
  `animali` int(11) DEFAULT '0',
  `mezziDiTrasporto` longtext,
  `serviziVicini` longtext,
  `noteAggiuntive` longtext,
  `approvatoDa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `annuncio`
--

INSERT INTO `annuncio` (`codAnnuncio`, `codLocatore`, `costoMensile`, `costoUtenze`, `caparra`, `speseAgenzia`, `codLuogo`, `numeroInquilini`, `tipologiaAppartamento`, `tipologiaContratto`, `durataPerMinima`, `tipoPerMinima`, `metratura`, `classeEnergetica`, `speseCondominiali`, `garage`, `animali`, `mezziDiTrasporto`, `serviziVicini`, `noteAggiuntive`, `approvatoDa`) VALUES
(1, 2, '300.00', '0.00', '360.00', '0.00', 1, 4, 'Stanza', 'Studente', 12, 'mesi', '60.00', 'AA', '0.00', 1, 0, 'AUTOBUS\r\nLinea 3,8,13\r\nTRENO\r\nFermata S.Chiara', 'Eurospar\r\nLavanderia\r\nFarmacia\r\nErboresteria\r\nPiscine\r\n', '10 minuti dal centro a piedi', 1),
(3, 2, '300.00', '0.00', '360.00', '0.00', 2, 4, 'Stanza', 'Studente', 12, 'mesi', '60.00', 'AA', '0.00', 0, 0, 'AUTOBUS\r\nLinea 3,8,13\r\nTRENO\r\nFermata S.Chiara', 'Eurospar\r\nLavanderia\r\nFarmacia\r\nErboresteria\r\nPiscine\r\n', '10 minuti dal centro a piedi', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `certificazione`
--

CREATE TABLE `certificazione` (
  `codCertificazione` int(11) NOT NULL,
  `descrizione` varchar(255) DEFAULT NULL,
  `codLocatore` int(11) DEFAULT NULL,
  `ricevuta` int(11) DEFAULT NULL,
  `codModeratore` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `immagini`
--

CREATE TABLE `immagini` (
  `codImg` int(11) NOT NULL,
  `imagePath` varchar(255) DEFAULT NULL,
  `codAnnuncio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `locatore`
--

CREATE TABLE `locatore` (
  `codUtente` int(11) NOT NULL,
  `calendarioDisponibilita` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `locatore`
--

INSERT INTO `locatore` (`codUtente`, `calendarioDisponibilita`) VALUES
(2, '');

-- --------------------------------------------------------

--
-- Struttura della tabella `locazione`
--

CREATE TABLE `locazione` (
  `codLuogo` int(11) NOT NULL,
  `nomeVia` varchar(50) DEFAULT NULL,
  `numeroCivico` varchar(5) DEFAULT NULL,
  `citofono` varchar(30) DEFAULT NULL,
  `linkMaps` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `locazione`
--

INSERT INTO `locazione` (`codLuogo`, `nomeVia`, `numeroCivico`, `citofono`, `linkMaps`) VALUES
(1, 'via cagliari', '1', 'torti', ''),
(2, 'via cagliari', '1', 'turri', ''),
(3, 'Via palermo', '2', 'rossi', '');

-- --------------------------------------------------------

--
-- Struttura della tabella `messaggio`
--

CREATE TABLE `messaggio` (
  `codMessaggio` int(11) NOT NULL,
  `corpo` longtext,
  `destinatario` int(11) DEFAULT NULL,
  `mittente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `messaggio`
--

INSERT INTO `messaggio` (`codMessaggio`, `corpo`, `destinatario`, `mittente`) VALUES
(1, 'ciao', 1, 2),
(2, '', 1, 2),
(3, 'come va', 1, 2),
(4, 'ccc', 2, 2),
(5, '', 1, 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `recensioni`
--

CREATE TABLE `recensioni` (
  `codRecensione` int(11) NOT NULL,
  `titolo` varchar(60) DEFAULT NULL,
  `corpo` mediumtext,
  `valutazione` int(11) DEFAULT NULL,
  `proprietario` int(11) DEFAULT NULL,
  `codAnnuncio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `codUtente` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `cognome` varchar(30) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `numeroTelefono` varchar(14) DEFAULT NULL,
  `sospeso` int(11) DEFAULT '0',
  `password` varchar(255) DEFAULT NULL,
  `isModeratore` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`codUtente`, `nome`, `cognome`, `username`, `email`, `numeroTelefono`, `sospeso`, `password`, `isModeratore`) VALUES
(1, 'nome1', 'cognome1', 'username1', 'mail1', '', 0, 'ciao1', 0),
(2, 'nome2', 'cognome2', 'username2', 'mail2', '', 0, 'ciao2', 0);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `annuncio`
--
ALTER TABLE `annuncio`
  ADD PRIMARY KEY (`codAnnuncio`),
  ADD KEY `codLocatore` (`codLocatore`),
  ADD KEY `codLuogo` (`codLuogo`),
  ADD KEY `approvatoDa` (`approvatoDa`);

--
-- Indici per le tabelle `certificazione`
--
ALTER TABLE `certificazione`
  ADD PRIMARY KEY (`codCertificazione`),
  ADD KEY `codLocatore` (`codLocatore`),
  ADD KEY `codModeratore` (`codModeratore`);

--
-- Indici per le tabelle `immagini`
--
ALTER TABLE `immagini`
  ADD PRIMARY KEY (`codImg`,`codAnnuncio`),
  ADD KEY `codAnnuncio` (`codAnnuncio`);

--
-- Indici per le tabelle `locatore`
--
ALTER TABLE `locatore`
  ADD PRIMARY KEY (`codUtente`);

--
-- Indici per le tabelle `locazione`
--
ALTER TABLE `locazione`
  ADD PRIMARY KEY (`codLuogo`);

--
-- Indici per le tabelle `messaggio`
--
ALTER TABLE `messaggio`
  ADD PRIMARY KEY (`codMessaggio`),
  ADD KEY `destinatario` (`destinatario`),
  ADD KEY `mittente` (`mittente`);

--
-- Indici per le tabelle `recensioni`
--
ALTER TABLE `recensioni`
  ADD PRIMARY KEY (`codRecensione`),
  ADD KEY `proprietario` (`proprietario`),
  ADD KEY `codAnnuncio` (`codAnnuncio`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`codUtente`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `annuncio`
--
ALTER TABLE `annuncio`
  MODIFY `codAnnuncio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `certificazione`
--
ALTER TABLE `certificazione`
  MODIFY `codCertificazione` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `immagini`
--
ALTER TABLE `immagini`
  MODIFY `codImg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `locazione`
--
ALTER TABLE `locazione`
  MODIFY `codLuogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `messaggio`
--
ALTER TABLE `messaggio`
  MODIFY `codMessaggio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `recensioni`
--
ALTER TABLE `recensioni`
  MODIFY `codRecensione` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `codUtente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `annuncio`
--
ALTER TABLE `annuncio`
  ADD CONSTRAINT `annuncio_ibfk_1` FOREIGN KEY (`codLocatore`) REFERENCES `locatore` (`codUtente`),
  ADD CONSTRAINT `annuncio_ibfk_2` FOREIGN KEY (`codLuogo`) REFERENCES `locazione` (`codLuogo`),
  ADD CONSTRAINT `annuncio_ibfk_3` FOREIGN KEY (`approvatoDa`) REFERENCES `utente` (`codUtente`);

--
-- Limiti per la tabella `certificazione`
--
ALTER TABLE `certificazione`
  ADD CONSTRAINT `certificazione_ibfk_1` FOREIGN KEY (`codLocatore`) REFERENCES `locatore` (`codUtente`),
  ADD CONSTRAINT `certificazione_ibfk_2` FOREIGN KEY (`codModeratore`) REFERENCES `utente` (`codUtente`);

--
-- Limiti per la tabella `immagini`
--
ALTER TABLE `immagini`
  ADD CONSTRAINT `immagini_ibfk_1` FOREIGN KEY (`codAnnuncio`) REFERENCES `annuncio` (`codAnnuncio`);

--
-- Limiti per la tabella `locatore`
--
ALTER TABLE `locatore`
  ADD CONSTRAINT `locatore_ibfk_1` FOREIGN KEY (`codUtente`) REFERENCES `utente` (`codUtente`);

--
-- Limiti per la tabella `messaggio`
--
ALTER TABLE `messaggio`
  ADD CONSTRAINT `messaggio_ibfk_1` FOREIGN KEY (`destinatario`) REFERENCES `utente` (`codUtente`),
  ADD CONSTRAINT `messaggio_ibfk_2` FOREIGN KEY (`mittente`) REFERENCES `utente` (`codUtente`);

--
-- Limiti per la tabella `recensioni`
--
ALTER TABLE `recensioni`
  ADD CONSTRAINT `recensioni_ibfk_1` FOREIGN KEY (`proprietario`) REFERENCES `utente` (`codUtente`),
  ADD CONSTRAINT `recensioni_ibfk_2` FOREIGN KEY (`codAnnuncio`) REFERENCES `annuncio` (`codAnnuncio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
