CREATE TABLE `produtos` (
  `produtoID` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `quantidade` int(10) NOT NULL,
  `preco` int(50) NOT NULL,
  `caracteristica` varchar(255) NOT NULL,
  PRIMARY KEY (`produtoID`)
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;

INSERT INTO `produtos` (`produtoID`, `nome`, `quantidade`, `preco`, `caracteristica`) VALUES
(1, 'Fórmula Natural', 15, 356, 'Ração Super Premium');

CREATE TABLE `usuarios` (
	`userID` INT(11) NOT NULL,
	`username` VARCHAR (200) NOT NULL,
	`password` VARCHAR (100) NOT NULL,
	PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;