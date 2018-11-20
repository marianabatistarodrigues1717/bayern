-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Nov-2018 às 02:54
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mariana`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id_mensagem` int(11) NOT NULL,
  `nome_mens` varchar(50) NOT NULL,
  `email_mens` varchar(100) NOT NULL,
  `mensagem` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`id_mensagem`, `nome_mens`, `email_mens`, `mensagem`) VALUES
(1, 'Mariana', 'mari@gmail.com', 'Esse site tá qualidade viu...'),
(2, 'Gabriel', 'g@g', 'Testando de novo. Só pra ter certeza msm.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre`
--

CREATE TABLE `sobre` (
  `id_s` int(10) NOT NULL,
  `sobre` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sobre`
--

INSERT INTO `sobre` (`id_s`, `sobre`) VALUES
(1, '<p> Fußball-Club Bayern München, comumente referido como Bayern ou Bayern de Munique, é um agremiação poliesportiva alemã sediada na cidade de Munique, Baviera. O estado no qual se localiza dá nome ao time, já que em alemão, o mesmo é chamado de Bayern.</p>\r\n\r\n<p> O clube foi fundado em 1900 por onze jogadores de futebol, inicialmente com o nome de “Schwabinger Bayern”, o qual foi modificado alguns anos depois para o nome atual. </p>\r\n\r\n <p> Embora tenha outros departamentos para xadrez, handebol, basquetebol, ginástica, boliche, ténis de mesa, foi no futebol que a agremiação se tornou mais famosa, de maior torcida e o mais bem sucedido da Alemanha. O Bayern tem seus times de base: Bayern Sub-19, e Bayern Feminino.[1] Suas cores tradicionais são vermelho e branco, e o escudo mostra a bandeira branca e azul da Baviera. Desde o início da temporada 2005-06, o clube atua como mandante no Allianz Arena, cuja capacidade é para atender 71 137 espectadores. Antigamente, o Bayern realizava seus jogos no Estádio Olímpico de Munique, estádio que o abrigou durante 33 anos. <p>\r\n\r\n<p> No futebol, o Bayern já conquistou 28 títulos do Campeonato Alemão e 18 da Copa da Alemanha. Em nível internacional, o Bayern venceu 5 edições da Taça dos Clubes Campeões Europeus/Liga dos Campeões da UEFA, 1 da Liga da Europa da UEFA, 1 da Recopa Europeia e 1 da Supercopa Europeia, sendo um dos cinco únicos times (junto com Ajax, Juventus, Chelsea e Manchester United) a ganhar as três principais competições da Europa (Liga dos Campeões, Liga Europa, e a Recopa Europeia).[4] Somam-se a sua galeria 2 Taças Intercontinentais e 1 Campeonato do Mundo de Clubes da FIFA. Seu período de maior sucesso foi em meados da década de 1970, quando, sob a capitania de Franz Beckenbauer, ganhou por três vezes seguidas a Liga dos campeões da UEFA (entre 1974 e 1976). Aquele time é reconhecido até hoje como uma das maiores equipes de todos os tempos do futebol mundial. Em 2013, o clube conquistou uma tríplice coroa (venceu a Liga dos Campeões da UEFA, a Bundesliga e a Copa da Alemanha), tornando-se o primeiro clube alemão e o sétimo da Europa a conquistar esse feito. <p>\r\n\r\n<p> Tem atualmente uma torcida constituída por quase 285 000 membros associados e organizados. Tem como rivalidades locais tradicionais o TSV 1860 München, com quem disputa o Dérbi de Munique, e o 1. FC Nürnberg, assim como uma rivalidade contemporânea com o Borussia Dortmund. Foi eleita pela FIFA o 3° maior clube de futebol do século XX e o primeiro entre todos clubes alemães. Com base nos resultados de uma pesquisa da empresa Brand Finance em fevereiro de 2012, o Fußball-Club Bayern München é o quarto clube mais rico do mundo, com um valor estimado de € 367 milhões. <p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(10) NOT NULL,
  `nome_usuario` varchar(100) NOT NULL,
  `email` varchar(70) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `email`, `senha`) VALUES
(1, 'Mariana', 'mariana@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id_mensagem`);

--
-- Indexes for table `sobre`
--
ALTER TABLE `sobre`
  ADD PRIMARY KEY (`id_s`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id_mensagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sobre`
--
ALTER TABLE `sobre`
  MODIFY `id_s` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
