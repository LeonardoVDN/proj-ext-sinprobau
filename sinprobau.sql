-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/11/2023 às 19:47
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sinprobau`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `idlogin` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro`
--

INSERT INTO `cadastro` (`idlogin`, `nome`, `email`, `senha`) VALUES
(1, 'Nathany', 'nat@gmail.com', 'corintia');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato`
--

CREATE TABLE `contato` (
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `celular` varchar(100) NOT NULL,
  `observacao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `contato`
--

INSERT INTO `contato` (`nome`, `email`, `telefone`, `celular`, `observacao`) VALUES
('Maria Lurdes dos Santos', 'lulu@gmail.com', '32635555', '1455679898', 'Denuncia tal'),
('Maria Lurdes dos Santos', 'lulu@gmail.com', '32635555', '1455679898', 'Denuncia tal');

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `titulo` varchar(255) NOT NULL,
  `noticia` text NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `noticias`
--

INSERT INTO `noticias` (`id`, `data`, `titulo`, `noticia`, `imagem`, `link`) VALUES
(1, '2023-09-12', 'Ferramenta ajuda a calcular diferenças salariais', 'As Convenções Coletivas assinadas garantem o pagamento retroativo das diferenças salariais relativas ao período de março de 2022 a agosto de 2023, de acordo com a situação de cada instituição de ensino.\r\nPara que você possa saber com precisão se e quanto ainda tem a receber, o SinproSP preparou uma planilha que ajuda nesses cálculos.\r\nA ferramenta foi desenvolvida pela equipe do Sindicato e disponibilizada para os outros Sindicatos da Fepesp.\r\nAcesse a calculadora pelo link:\r\n', '1.jpg', 'bit.ly/CalculadoraSinproSP'),
(2, '2023-09-13', 'CCTs atualizadas no site!', 'As Convenções Coletivas de Trabalho (CCT) do Ensino Superior de 2022/2023 e para o ano de 2024 já estão atualizadas no site, e você já pode consultar o texto na íntegra acessando a aba convenções e depois, ensino superior!', '2.jpg', ''),
(3, '2023-09-15', 'Professor Macalé visita UNINOVE para afixar as conquistas do sindicato', 'Hoje, nosso presidente, Professor Macalé, também esteve presente na Uninove para uma visita aos professores e também para afixar as conquistas do sindicato!\r\nSeguimos firmes na luta por melhorias!', '3.jpg', ''),
(4, '2023-09-15', 'Professor Macalé visita FACOP para afixar comunicado sobre as Convenções Coletivas', 'Hoje, nosso presidente, Professor Macalé, esteve presente na Faculdade do Centro Oeste Paulista - FACOP, para uma visita aos professores e também, para afixar as conquistas do sindicato!', '4.jpg', ''),
(5, '2023-10-04', 'PLR deve ser paga até dia 15 de outubro', 'FONTE FEPESP\r\nProfessoras e professores da Educação Básica devem receber, até 15 de outubro, a Participação nos Lucros e Resultados (PLR), que corresponde a 18% do salário e pode ser paga também como abono.\r\nO Comunicado Conjunto 2/2023 divulgado pela FEPESP, Sindicatos integrantes e o Sieeesp também aborda que não terão direito os profissionais que estão em licença não-remunerada, como descrito nas Convenções: Cláusula 44ª (Professores), e Cláusula 37ª (Auxiliares).\r\nPara saber mais sobre o comunicado e detalhes, acesse a matéria completa no link : ', '5.jpg', 'http://fepesp.org.br/noticia/plr-tem-que-ser-paga-ate-o-dia-15-conquista-e-conquista/'),
(6, '2023-10-05', 'Atenção professor do ensino superior: confira sua folha de pagamento', 'ENSINO SUPERIOR\r\nGraças à campanha salarial e à determinação da nossa categoria, alcançamos um significativo reajuste salarial e a manutenção das cláusulas sociais. O aumento de 6,09%, referente à 1º de março de 2023, será efetivamente recebido em outubro.\r\nÉ importante destacar que esse aumento se acumula com o reajuste conquistado na Campanha Salarial de 2022, que foi de 10,57%. Esse aumento também será incorporado aos salários, juntamente com o pagamento das diferenças salariais, conforme estipulado na Convenção Coletiva aprovada pela nossa categoria.\r\nCaso você, professor, identifique qualquer irregularidade no pagamento do reajuste, entre em contato com o SinproBau: (14) 3879-5313', '6.jpg', ''),
(7, '2023-10-10', 'Professor Macalé visita Escola Tesla', 'Nosso presidente Professor Macalé esteve hoje na Escola Tesla para esclarecer ao proprietário sr. Marcelo acerca da PLR (Participação de Lucros e Resultados) dos professores da Educação Básica.', '7.jpg', ''),
(8, '2023-10-25', 'Professor: Você conhece a composição do seu salário?', 'Dar aula vai além de apenas o professor dentro da sala de aula, por isso, as Convenções Coletivas definem o pagamento da Hora-Atividade, que é uma porcentagem da soma de salário-base e DSR.\r\nApoie seu sindicato!\r\nAcesse a CCT em vigência e confira todas as informações sobre o pagamento da hora-atividade!', '8.jpg', ''),
(9, '2023-11-08', 'Descontos especiais no planejamento previdenciário para professores', 'Atenção, professor!\r\nNo mês de novembro, o escritório Ferreguti & Munhoz está com 50% de desconto no planejamento previdenciário!\r\nSaiba mais no telefone: (14) 99129-9329', '9.jpg', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `socio`
--

CREATE TABLE `socio` (
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `nascimento` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cidadania` varchar(100) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `tipolocal` varchar(100) NOT NULL,
  `estadocivil` varchar(50) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `rg` int(8) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `celular` varchar(100) NOT NULL,
  `disciplina` varchar(255) NOT NULL,
  `locaisdetrabalho` text NOT NULL,
  `formacao` varchar(255) NOT NULL,
  `outros` text NOT NULL,
  `dependente1` varchar(200) NOT NULL,
  `graudeparentesco1` varchar(50) NOT NULL,
  `nascimento1` varchar(50) NOT NULL,
  `dependente2` varchar(200) NOT NULL,
  `graudeparentesco2` varchar(50) NOT NULL,
  `nascimento2` varchar(50) NOT NULL,
  `dependente3` varchar(200) NOT NULL,
  `graudeparentesco3` varchar(100) NOT NULL,
  `nascimento3` varchar(50) NOT NULL,
  `dependente4` varchar(200) NOT NULL,
  `graudeparentesco4` varchar(50) NOT NULL,
  `nascimento4` varchar(50) NOT NULL,
  `diploma` varchar(255) NOT NULL,
  `instituicao` varchar(255) NOT NULL,
  `data` varchar(50) NOT NULL,
  `cidadeinstituicao` varchar(100) NOT NULL,
  `observacao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `socio`
--

INSERT INTO `socio` (`nome`, `sobrenome`, `nascimento`, `email`, `cidadania`, `endereco`, `tipolocal`, `estadocivil`, `cidade`, `estado`, `cep`, `rg`, `cpf`, `telefone`, `celular`, `disciplina`, `locaisdetrabalho`, `formacao`, `outros`, `dependente1`, `graudeparentesco1`, `nascimento1`, `dependente2`, `graudeparentesco2`, `nascimento2`, `dependente3`, `graudeparentesco3`, `nascimento3`, `dependente4`, `graudeparentesco4`, `nascimento4`, `diploma`, `instituicao`, `data`, `cidadeinstituicao`, `observacao`) VALUES
('Eliza', 'Maria da Silva', '12/05/1971', 'eliza@gmail.com', 'Bauru', 'Rua Tal, 00', 'Casa', 'Casado(a)', 'Bauru', 'São Paulo', '00000-003', 54789632, '14578236951', '12345647', '144454841455', 'Português', 'Escola Tal', 'Mestrado', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universidade Tal', '04/12/1999', 'Lins', 'Gostaria de fazer parte!'),
('Eliza', 'Maria da Silva', '12/05/1971', 'eliza@gmail.com', 'Bauru', 'Rua Tal, 00', 'Casa', 'Casado(a)', 'Bauru', 'São Paulo', '00000-003', 54789632, '14578236951', '12345647', '144454841455', 'Português', 'Escola Tal', 'Mestrado', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universidade Tal', '04/12/1999', 'Lins', 'Gostaria de fazer parte!');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`idlogin`);

--
-- Índices de tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `idlogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
