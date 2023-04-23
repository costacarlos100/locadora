-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Jul-2017 às 20:14
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(2) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `email` varchar(70) NOT NULL,
  `cpf` char(14) NOT NULL,
  `data_nascimento` date DEFAULT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `permissao` int(1) NOT NULL DEFAULT '2',
  `quant_loc` int(11) DEFAULT '0',
  `idFoto` int(11) DEFAULT '2000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nome`, `email`, `cpf`, `data_nascimento`, `login`, `senha`, `permissao`, `quant_loc`, `idFoto`) VALUES
(1, 'Carlos Henrique', 'mdoshacker@gmail.com', '12345678901', '1990-01-17', 'costacarlos100', '76ee4fb711a476343c6cac9098686d31', 2, 0, 2000),
(33, 'Administrador', 'administrador@admin.com', '11111111111111', '1950-01-28', 'Admin', 'e3afed0047b08059d0fada10f400c1e5', 2, 0, 2001),
(34, 'Rosa', 'rosa@gmail.com', '12312312312', '1978-02-01', 'rosa', 'a63a84d1b358f964619056b37036cead', 1, 0, 2000),
(35, 'Anna Clara', 'annaclara@gmail.com', '12312312312', '1996-11-19', 'annaclara', 'ce563c2093b55471071169369f6c5ad8', 1, 0, 2000),
(36, 'vinicius', 'vinicius.m.s.s.1@gmail.com', '22222222222', '1994-07-07', 'viny1', 'viny1234', 1, 0, 2000),
(41, 'icaro', 'icaro@gmail.com', '12312312312', '2006-09-03', 'ete', 'faf5341a39919352a4f9bde4d6de5396', 1, 0, 2000),
(42, 'Erick', 'erick@gmail.com', '01234567891', '1990-11-24', 'erick', '4da77e6afb73aaaabd18cdfe8d3e0262', 1, 0, 2000),
(44, 'Alexandre', 'alexandre@gmail.com', '98765432109', '1979-07-11', 'alexandre', 'f44ff2cc598d904b6c39d74230c27264', 1, 0, 2000),
(45, 'Braian Ryan', 'braian@gmail.com', '94827519301', '1999-09-12', 'braian', '6cbbfe6e197393d99347a97a139ef6c9', 1, 0, 2000),
(47, 'Teste123', 'admin@admin.com', '12312312312', '2017-07-09', 'aaaa', 'aaa', 1, 0, 72),
(50, 'Carlos Henrique', 'costacarloshenriquealves@yahoo.com.br', '01020304050', '1990-01-17', 'costacarlos', '69333ebca69dcf253b46f94780eeede9', 1, 0, 2001),
(51, 'gere', 'gere07@gmail.com', '1232356657648', '1999-07-10', 'gere', '25d55ad283aa400af464c76d713c07ad', 1, 0, 2003);

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE `filme` (
  `idFilme` int(11) NOT NULL,
  `nome` mediumtext,
  `sinopse` mediumtext,
  `quant` int(11) DEFAULT NULL,
  `idFoto` int(11) DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `ano` year(4) DEFAULT NULL,
  `duracao` int(5) DEFAULT NULL,
  `Distribuidora` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`idFilme`, `nome`, `sinopse`, `quant`, `idFoto`, `genero`, `ano`, `duracao`, `Distribuidora`) VALUES
(55, 'Harry Potter e as Reliquias da morte Part:1', 'Harry foi sobrecarregado com uma tarefa sombria, perigosa e aparentemente impossÃ­Â­vel: localizar e destruir as Horcruxes restantes de Voldemort. Harry nunca se sentiu tÃ£o solitÃ¡rio, ou encarou um futuro tÃ£o cheio de escuridÃ£o. Mas Harry deve, de alguma forma, encontrar dentro de si a forÃ§a para completar a tarefa a qual lhe foi dada. Ele tem que deixar o aconchego, seguranÃ§a e companhia da Toca e seguir sem medo ou hesitaÃ§Ã£o o caminho inexorÃ¡vel que o aguarda.', 20, 1, 'Fantasia', 2010, 146, 'Warner Bros. Pictures'),
(56, 'Harry Potter e as Reliquias da morte Part:2', 'Aventura final da sÃ©rie de filmes Harry Potter, o aguardado filme Ã© a segunda parte da produÃ§Ã£o cinematogrÃ¡fica dividida em dois longas-metragens. Harry Potter (Daniel Radcliffe), Ron Weasley (Rupert Grint), e Hermione Granger (Emma Watson) continuam sua missÃ£o de acabar com o mal tentando descobrir as outras 3 Horcruxes faltantes que sÃ£o as fontes da imortalidade de Lorde Valdemort (Ralph Fiennes). Ao descobrir do plano dos bruxos de Hogwarts, Valdemort comeÃ§a a maior batalha de todas e a vida deles nunca mais serÃ¡ a mesma. ', 20, 2, 'Fantasia', 2011, 130, 'Warner Bros. Pictures'),
(57, 'Doce VinganÃ§a', 'Uma bela mulher da cidade, Jennifer Hills, aluga uma isolada cabana no interior para escrever seu mais novo romance. Mas ela nÃ£o esperava que alguns delinquentes locais pudessem ser tÃ£o brutais e Jennifer acaba sendo vÃ­tima de estupro, humilhaÃ§Ã£o e violÃªncia. Largada como uma moribunda, deixada para morrer, Jennifer recupera suas forÃ§as e volta para se vingar. Perseguindo seus agressores um a um, ela inflige atos de tortura e violÃªncia com uma ferocidade ainda maior que a praticada com ela. Esta Ã© a sua cruel e doce vinganÃ§a. ', 20, 3, 'Terror', 2010, 108, 'Anchor Bay Entertainment'),
(58, 'Doce VinganÃ§a 2', 'Katie se mudou para Nova York para tentar a carreira de modelo. Mas o que comeÃ§a como uma simples e inocente sessÃ£o de fotos, logo se transforma em algo perturbadoramente impensÃ¡vel. Estuprada, torturada e sequestrada em um paÃ­s estrangeiro, Katie Ã© enterrada viva e deixada para morrer. Contra todas as probabilidades, ela sobrevive e consegue escapar.', 20, 4, 'Terro', 2013, 106, 'Anchor Bay Entertainment'),
(59, 'Planeta Dos Macacos - A Origem', 'Quinze anos apÃ³s a conquista da liberdade, CÃ©sar (Andy Serkis) e os demais macacos vivem em paz na floresta prÃ³xima a San Francisco. LÃ¡ eles desenvolveram uma comunidade prÃ³pria, baseada no apoio mÃºtuo, para que possam se manter. Enquanto isso, os humanos enfrentam uma das maiores epidemias de todos os tempos, causada por um vÃ­rus criado em laboratÃ³rio, chamado vÃ­rus sÃ­mio. Diante disto, um grupo de sobreviventes liderado por Dreyfus (Gary Oldman) deseja atacar os macacos para usÃ¡-los como cobaias na busca por uma vacina. SÃ³ que Malcolm (Jason Clarke), que conhece bem como os macacos vivem por ter conquistado a confianÃ§a de CÃ©sar, deseja impedir que o confronto aconteÃ§a.', 20, 5, 'FicÃ§Ã£o CientÃ­fica', 2014, 130, '20th Century Fox'),
(60, 'As Tartarugas Ninjas', 'As Tartarugas Ninja estÃ£o maiores e melhores que nunca, neste grande sucesso de bilheteria, muito divertido e cheio de aÃ§Ã£o! Quando a cidade de Nova York estÃ¡ em perigo, os quatro irmÃ£os ninjas adoradores de pizza vÃ£o salvÃ¡-la. Com ajuda da intrÃ©pida repÃ³rter April Oâ€™Neil (Megan Fox) e seu brilhante mestre Splinter, esses improvÃ¡veis herÃ³is terÃ£o que enfrentar seu pior inimigo: o sinistro Destruidor. ', 20, 6, 'Aventura', 2014, 101, 'Paramount Pictures'),
(61, 'Assasins Creed', 'Callum Lynch (Michael Fassbender) Ã© um sujeito simples que descobre que seus ancestrais eram assassinos. Utilizando de uma tecnologia desenvolvida pela corporaÃ§Ã£o Abstergo, Desmond revive as memÃ³rias de seus parentes, voltando a perÃ­odos marcantes da histÃ³ria mundial. ', 20, 7, 'Fantasia', 2016, 116, '20th Century Fox'),
(62, 'Avatar', 'No Ã©pico de aÃ§Ã£o e aventura Avatar, James Cameron, diretor de Titanic, nos leva a um mundo espetacular, alÃ©m da nossa imaginaÃ§Ã£o. Na distante lua Pandora, um herÃ³i relutante embarca em uma jornada de redenÃ§Ã£o e descoberta, liderando uma batalha herÃ³ica para salvar a civilizaÃ§Ã£o. O filme foi idealizado por Cameron hÃ¡ 14 anos, quando ainda nÃ£o existiam meios para concretizar suas idÃ©ias. Agora, apÃ³s quatro anos do trabalho de produÃ§Ã£o real, Avatar nos proporciona uma inovadora experiÃªncia de imersÃ£o total no cinema, em que a tecnologia revolucionÃ¡ria que foi inventada para realizar o filme se dilui na emoÃ§Ã£o dos personagens e na histÃ³ria arrebatadora. ', 20, 8, 'Aventura', 2009, 162, '20th Century Fox'),
(63, '13Â° Distrito', 'Paris, 2010. Diante do aumento inevitÃ¡vel da criminalidade em alguns subÃºrbios, o governo autoriza a construÃ§Ã£o de um muro de isolamento ao redor dos bairros classificados como de alto risco. O pior de todos Ã© o 13Âº distrito, que Ã© controlado por um chefÃ£o do crime, Taha (Dominique Dorol). Um jovem punk Ã­ntegro, LeÃ¯to (David Belle), estÃ¡ determinador em acabar com seu poder. Quando Taha retalia seqÃ¼estrando a irmÃ£ de Leito, Lola (Dany Verissimo), seu irmÃ£o tenta resgatÃ¡-la, mas Ã© traÃ­do pelo chefe da delegacia do 13Âº distrito, que temia o poder de Taha. LeÃ¯to acaba sendo preso e Lola Ã© mantida prisioneira de Taha, que colocou uma coleira nela, como se fosse uma cadela. ApÃ³s 6 meses um mÃ­ssil Ã© roubado e ao agente Damien (Cyril Raffaelli) Ã© dada a quase impossÃ­vel missÃ£o de desarmÃ¡-lo, pois estÃ¡ no distrito B13 e em poder de Taha. Damien tem menos de 24 horas para fazer isto, pois segundo seu chefe ao findar este tempo o mÃ­ssil explodirÃ¡, matando milhÃµes de pessoas. EntÃ£o Damien se passa por um preso que estÃ¡ sendo transferido com LeÃ¯to e ambos "escapam", mas nem toda a verdade foi revelada. ', 20, 9, 'Policial', 2004, 84, 'EuropaCorp. Distribution'),
(64, 'Batma: A Piada Mortal', 'Do produtor executivo Bruce Timm e baseado na aclamada graphic novel da DC Comics, â€œBatman: A Piada Mortalâ€ Ã© uma jornada adentro da sombria psique do PrÃ­ncipe PalhaÃ§o do Crime. Acompanhando desde o seu humilde comeÃ§o, quando era um comediante esforÃ§ado, atÃ© seu fatÃ­dico encontro com o Cavaleiro das Trevas, que mudou tudo. Agora fugitivo do Asilo Arkham, O Coringa planeja provar para todos que um dia ruim Ã© capaz de tornar qualquer um tÃ£o insano quanto ele. Agora que o ComissÃ¡rio Gordon estÃ¡ na mira do Coringa, serÃ¡ que o Batman conseguirÃ¡ frustrar esse plano doentio a tempo? Com um prÃ³logo incrÃ­vel estrelado por Barbara Gordon (Batgirl) e marcado o retorno de Kevin Conroy como Batman, Mark Hamill como O Coringa e Tara Strong como Batgirl, testemunhe o nascimento de um supervilÃ£o, a forÃ§a de espÃ­rito de um herÃ³i e uma frase de efeito que deixarÃ¡ vocÃª sem fÃ´lego! ', 20, 10, 'AnimaÃ§Ã£o', 2016, 76, 'Warner Home Video'),
(65, 'Batman Begins', 'Ainda perturbado pelo assassinato de seus pais, ocorrido muitos anos antes, Bruce Wayne decide viajar o mundo em busca de aprendizado e do conhecimento da mente criminosa. Anos depois, quando julga-se pronto, Wayne retorna a Gotham-City para lutar pela justiÃ§a, agora revelado em seu alter-ego Batman, um guerreiro mascarado que usarÃ¡ forÃ§a e intelecto contra as sinistras forÃ§as do crime que se apoderaram da cidade. Com Christian Bale, Morgan Freeman, Michael Caine, Rutger Hauer, Liam Neeson e Katie Holmes. ', 20, 11, 'Drama', 2005, 140, 'Warner Bros.'),
(66, 'Batman - O Cavaleiro Das Trevas', 'ApÃ³s dois anos desde o surgimento do Batman (Christian Bale), os criminosos de Gotham City tÃªm muito o que temer. Com a ajuda do tenente James Gordon (Gary Oldman) e do promotor pÃºblico Harvey Dent (Aaron Eckhart), Batman luta contra o crime organizado. Acuados com o combate, os chefes do crime aceitam a proposta feita pelo Coringa (Heath Ledger) e o contratam para combater o Homem-Morcego. ', 20, 12, 'Drama', 2008, 152, 'Warner Bros.'),
(67, 'Batman - O Cavaleiro Das Trevas Part 1', 'Dez anos apÃ³s sua aposentadoria, Batman se encontra em um mundo onde os herÃ³is foram extintos, e Superman Ã© o Ãºltimo em atividade. Mas quando a criminalidade cresce em Gotham City, Bruce Wayne volta Ã  ativa e usa toda sua inteligÃªncia e forÃ§a bruta para fazer justiÃ§a. ', 20, 13, 'Drama', 2012, 76, 'Warner Bros.'),
(68, 'CapitÃ£o America 2 - O Soldado Invernal', 'Quando a S.H.I.E.L.D. Ã© atacada, CapitÃ£o AmÃ©rica (Chris Evans) se envolve em uma teia de intrigas que ameaÃ§a o futuro da humanidade. A medida que uma conspiraÃ§Ã£o Ã© formada e a confianÃ§a Ã© destruÃ­da, CapitÃ£o AmÃ©rica, ViÃºva Negra (Scarlett Johansson) e FalcÃ£o (Anthony Mackie) devem unir forÃ§as para combater seu inimigo mais misterioso e traiÃ§oeiro - o Soldado Invernal. ', 20, 14, 'Aventura', 2014, 136, 'Walt Disney Studios Motion Pictures'),
(69, 'CapitÃ£o America - O Primeiro Vingador', 'CapitÃ£o AmÃ©rica comanda a luta pela liberdade, neste supersucesso cheio de aÃ§Ã£o, estrelado por Chris Evans, como a arma definitiva contra o mal! Quando uma aterrorizante forÃ§a ameaÃ§a a humanidade em todo o planeta, o maior soldado do mundo declara guerra contra a diabÃ³lica organizaÃ§Ã£o HYDRA, liderada pelo vilÃ£o Caveira Vermelha (Hugo Weaving, Matrix). Tanto a crÃ­tica quanto o pÃºblico aclamaram CapitÃ£o AmÃ©rica - O Primeiro Vingador como "emoÃ§Ã£o, aÃ§Ã£o e diversÃ£o pura!" * *Bryan Erdy, CBS-TV/Movie Planet. ', 20, 15, 'Aventura', 2011, 125, 'Paramount Pictures'),
(70, 'CapitÃ£o America - Guerra Civil', 'Uma briga explosiva estremece o Universo CinemÃ¡tico Marvel no Ã©pico CapitÃ£o AmÃ©rica: Guerra Civil. Quando um incidente envolvendo os Vingadores resulta em mortes de inocentes, hÃ¡ pressÃ£o polÃ­tica para responsabilizar a equipe. A discussÃ£o cria uma grande diferenÃ§a entre o CapitÃ£o AmÃ©rica (Chris Evans) e o Homem de Ferro (Robert Downey Jr.) e coloca os Vingadores uns contra os outros. Num contexto de lealdades divididas, vilÃµes misteriosos e novos aliados, a batalha final que determinarÃ¡ o futuro dos Vingadores e de toda a humanidade entrarÃ¡ em erupÃ§Ã£o nesta aventura espetacular!', 20, 16, 'AÃ§Ã£o', 2016, 147, 'Walt Disney Studios Motion Pictures'),
(71, 'Carga Explosiva', 'Frank Martin (Jason Statham) Ã© um ex-soldado do exÃ©rcito norte-americano, que agora trabalha transportando cargas e vive em uma vila tranquila, na costa do MediterrÃ¢neo. Martin segue sempre Ã  risca o lema de nunca saber o que estÃ¡ transportando nem para quem Ã© a carga, a fim de evitar problemas. AtÃ© que, apÃ³s ser contratado por um americano apelidado de Wall Street (Matt Schulze), ele se envolve em um grande problema. ApÃ³s o pneu de seu carro furar Martin percebe que a carga que transporta estÃ¡ se mexendo. Passando por cima de suas regras, ele abre o porta-malas e descobre que lÃ¡ estÃ¡ presa uma bela garota (Lai Kwai). Martin a solta, mas logo precisa fugir com ela de um poderoso chefÃ£o do crime asiÃ¡tico, Sr. Kwai (Ric Young), alÃ©m de um policial (FranÃ§ois BerlÃ©and), que investiga Martin por estar desconfiado que ele realiza os transportes de cargas ilegais. ', 20, 17, 'AÃ§Ã£o', 2002, 94, '20th Century Fox'),
(72, 'Carga Explosiva 2', 'Frank Martin Ã© o melhor naquilo que faz. O ex-agente das ForÃ§as Especiais oferece seus serviÃ§os de "carregador" mercenÃ¡rio, alguÃ©m que transporta itens valiosos - humanos ou nÃ£o. De maneira bem clara, ele faz a entrega sem perguntas. Frank mudou-se da FranÃ§a MediterrÃ¢nea para Miami, FlÃ³rida, onde dirige para a poderosa famÃ­lia Billings de favor para um amigo. HÃ¡ muito pouco que pode realmente surpreender o Carregador, mas o pequeno Jack Billings conseguiu isso; Frank acabou ficando muito ligado a Jack, com seis anos de idade, a quem leva e traz da escola. Mas quando Jack Ã© seqÃ¼estrado, Frank tem de usar suas habilidades aprendidas no campo de batalha para recuperar o garoto e impedir o perigoso plano dos seqÃ¼estradores de colocar Ã  solta um vÃ­rus que pode matar qualquer pessoa que tenha contato com ele. ', 20, 18, 'AÃ§Ã£o', 2005, 87, '20th Century Fox'),
(73, 'Carga Explosiva 3', 'Frank Martin (Jason Statham) Ã© obrigado a proteger Valentina (Natalya Rudakova), a filha de Leonid Vasilev (Jeroen KrabbÃ©), o chefe da AgÃªncia de ProteÃ§Ã£o Ambiental da UcrÃ¢nia. Ela foi sequestrada por Jonas Johnson (Robert Knepper), contratado por uma empresa de gerenciamento internacional de resÃ­duos que deseja operar na UcrÃ¢nia. Para ter Frank e Valentina sob controle, Jonas prende em seus pulsos um dispositivo que determina que nÃ£o possam se afastar muito do carro que os conduz, caso contrÃ¡rio o bracelete explode. Contando com a ajuda do inspetor Tarconi (FranÃ§ois BerlÃ©and), Frank busca um meio de deixar a armadilha. ', 20, 19, 'AÃ§Ã£o', 2008, 104, 'EuropaCorp. Distribution'),
(74, 'Carga Explosiva - O Legado', 'O inÃ­cio da trajetÃ³ria de Frank Martin, seu relacionamento com o pai e a vida antes de se tornar transportador de mercadorias desconhecidas. No filme, Frank Ã© contratado pela femme fatale Anna e suas trÃªs deslumbrantes ajudantes, mas logo ele descobre que ele estÃ¡ sendo enganado. Anna e suas cÃºmplices sequestraram seu pai (Ray Stevenson), a fim de coagir Frank em ajudÃ¡-las a derrubar um grupo cruel de traficantes de seres humanos russos. Alimentado pela vinganÃ§a, ele irÃ¡ quebrar todas as suas regras e nÃ£o vai parar por nada para resgatar seu pai neste longa de aÃ§Ã£o atravÃ©s da Riviera Francesa. ', 20, 20, 'AÃ§Ã£o', 2015, 96, 'EuropaCorp'),
(75, 'DeadPool', 'O mercenÃ¡rio Wade Wilson (Ryan Reynolds) Ã© um anti-herÃ³i do universo Marvel, conhecido como Deadpool. Depois de ser submetido a um experimento para ganhar fator de cura, o mercenÃ¡rio tagarela, armado com suas habilidades e um senso de humor negro, vai atrÃ¡s do homem que quase destruiu sua vida. ', 20, 21, 'ComÃ©dia', 2016, 137, '20th Century Fox'),
(76, 'Depois Da Terra', 'HÃ¡ 1000 anos, um cataclisma tornou a Terra um lugar hostil e forÃ§ou os humanos a se abrigarem no planeta Nova Prime, morando em naves espaciais. Depois de uma missÃ£o, o general Cypher Raige (Will Smith) retorna Ã  sua famÃ­lia e ao filho de treze anos de idade (Jaden Smith). Mas pouco tempo apÃ³s seu retorno, uma chuva de asteroides faz com que a nave onde moram caia na Terra. Com o pai correndo risco de morte, o jovem adolescente deverÃ¡ aprender sozinho a domar este planeta, encontrando Ã¡gua, comida e cuidando de seu pai. ', 20, 22, 'FicÃ§Ã£o CientÃ­fica', 2013, 100, 'Columbia Pictures'),
(77, 'Deuses Do Egito', 'Set, o impiedoso Deus das trevas, conquistou o trono do Egito e mergulhou o atÃ© entÃ£o pacÃ­fico e prÃ³spero ImpÃ©rio em caos e conflitos. Poucos ousam rebelar-se contra ele. Um jovem ladrÃ£o, cuja amada foi raptada por Set, busca destronar e derrotar o Imperador â€“ com a ajuda do poderoso Deus HÃ³rus. ', 20, 23, 'Fantasia', 2016, 127, 'Lionsgate'),
(78, 'Divergentes', 'Em uma Chicago futurista, onde as pessoas estÃ£o divididas em cinco facÃ§Ãµes com base em suas personalidades, a adolescente Beatrice Prior (Shailene Woodley) descobre que ela Ã© divergente - uma pessoa que nÃ£o se encaixa em qualquer uma das facÃ§Ãµes - e logo descobre segredos em sua sociedade aparentemente perfeita. O longa Ã© baseado no primeiro livro de uma trilogia escrita por Veronica Roth. ', 20, 24, 'Aventura', 2014, 140, 'Summit Entertainment'),
(79, 'Doutor Estranho', 'Em Doutor Estranho da Marvel, um neurocirurgiÃ£o mundialmente famoso procurando por cura, encontra uma magia poderosa em um misterioso lugar conhecido como Kamar-Taj â€“ a linha de frente de uma batalha contra invisÃ­veis forÃ§as negras empenhadas em destruir nossa realidade. ', 20, 25, 'Aventura', 2016, 115, 'Walt Disney Studios Motion Pictures'),
(80, 'Duro De Matar', 'Bruce Willis, estrela como o detetive nova iorquino John Mclane, recÃ©m-chegado Ã  Los Angeles para passar o Natal ao lado de sua esposa (Bonnie Bedelia) e famÃ­lia, separados por conta de seu emprego. Mas enquanto McClane espera pela festa de despedida do escritÃ³rio de sua mulher, terroristas assumem o controle do prÃ©dio. No momento em que o lÃ­der dos terroristas, Hans Gruber (Alan Rickman) e seu selvagem braÃ§o direito (Alexander Gordunov) cercam os refÃ©ns, McClane escapa sem ser notado. Armado apenas com uma pistola e sua capacidade de improvisar. McClane se lanÃ§a numa guerra de um homem sÃ³. Um estrondoso thriller de aÃ§Ã£o de comeÃ§o ao fim, Duro de Matar explode com um suspense de tirar o folego. ', 20, 26, 'AÃ§Ã£o', 1988, 131, '20th Century Fox'),
(81, 'Duro De Matar 2', 'Numa fria vÃ©spera de Natal em Washington, um grupo de terroristas toma um aeroporto internacional e agora controla a vida de milhares de passageiros, prestes a desembarcarem. Os terroristas, um bando de ex-militares a fim de resgatar um militar deportado envolvido num grande esquema de distribuiÃ§Ã£o de drogas. Eles estÃ£o preparados para enfrentar qualquer emprevisto, menos um: John McClane (Bruce Willis, de Duro de Matar), um policial que, mais uma vez, estÃ¡ no lugar errado, na hora errada. Bruce Willis retoma seu personagem para combater nÃ£o sÃ³ os bandidos, mas tambÃ©m o incompetente chefe de seguranÃ§a do aeroporto (Dennis Franz, de Nova York Contra o Crime), o teimoso comandante do esquadrÃ£o anti-terrorista (John Amos) e uma vigorosa tempestade de neve. Os desertores sÃ£o assolados por mortes e destruiÃ§Ã£o e McClane esta numa corrida contra o tempo. Sua esposa (Bonnie Bedelia, de Duro de Matar) Ã© passageira em um dos aviÃµes quase sem combustÃ­vel que sobrevoam o aeroporto. Ã‰ uma guerra de tirar o fÃ´lego, numa excitante aventura movida a jato. Apertem o cinto! ', 20, 27, 'AÃ§Ã£o', 1990, 124, '20th Century Fox'),
(82, 'Duro De Matar : A VinganÃ§a', 'O detetive John McClane (Bruce Willis) estÃ¡ de novo na ativa para enfrentar o pior dia de sua vida, neste que Ã© o mais explosivo filme de todos os tempos! Em Nova York, Simon (Jeremy Irons), um audacioso terrorista, explode uma bomba dentro de um Shopping lotado e revela que escondeu vÃ¡rias por toda a cidade. McClane Ã© envolvido em um verdadeiro jogo de esconde-esconde que diverte Simon. Mas desta vez ele ganha um parceiro da maneira mais improvÃ¡vel, Zeus (Samuel L. Jackson). Os dois iniciam uma corrida frenÃ©tica para desativar as bombas antes que Nova York vÃ¡ pelos ares. Sem dÃºvida nenhuma, o melhor filme de aÃ§Ã£o de todos os tempos! ', 20, 28, 'AÃ§Ã£o', 1995, 130, '20th Century Fox'),
(83, 'Duro De Matar - Um Bom Dia Para Morrer', 'O melhor estÃ¡ de volta Ã  aÃ§Ã£o na mais recente aventura eletrizante da saga de Duro de Matar. O detetive John McClane (Bruce Willis), da cidade de Nova York, ensina o que Ã© justiÃ§a Ã  moda antiga a uma nova geraÃ§Ã£o de terroristas quando eles promovem um ataque impiedoso, via computador, ameaÃ§ando a infra-estrutura dos EUA, podendo literalmente desligar o paÃ­s inteiro em pleno fim de semana do feriado do Dia da IndependÃªncia. Armado com as melhores proezas, humor genuÃ­no e aÃ§Ã£o ininterrupta, "Duro de Matar 4.0" Ã© o mais explosivo filme de aÃ§Ã£o do ano. ', 20, 29, 'AÃ§Ã£o', 2007, 128, '20th Century Fox'),
(84, 'Far Cry - Fuga Do Inferno', 'Baseado no popular videogame de tiro em primeira pessoa, o longa-metragem conta a histÃ³ria de Jack Carver (Schweiger), um sujeito que trabalha alugando barcos nas ilhas da MicronÃ©sia. O passado de Carver, como ex-soldado de elite durÃ£o, vem Ã  tona novamente quando ele recebe a missÃ£o de resgatar uma jornalista de uma isolada ilha recheada de mercenÃ¡rios. AlÃ©m dos inimigos bem armados, Carver tem pela frente tambÃ©m criaturas geneticamente alteradas por um cientista louco chamado Dr. Krieger (Udo Kier, de â€œHalloweenâ€). ', 19, 30, 'Aventura', 2008, 95, '20th Century Fox'),
(85, 'Final Fantasy VIII - Advent Children', 'Advent Children comeÃ§a dois anos apÃ³s o tÃ©rmino do jogo que lhe deu origem. A Shinra Inc., uma poderosa empresa, estÃ¡ a acabar com o planeta devido Ã s suas exploraÃ§Ãµes. O lendÃ¡rio guerreiro da forÃ§a de elite SOLDIER, Sephiroth, descobre provir de uma experiÃªncia genÃ©tica, e decide acabar com a terra invocando um meteoro. PorÃ©m, Cloud, um ex-SOLDIER, e os seus companheiros impedem o apocalÃ­ptico meteoro, sepultando Sephiroth apÃ³s vÃ¡rias batalhas.', 20, 31, 'AnimaÃ§Ã£o', 2005, 126, 'Sony Pictures'),
(86, 'Frankenstein - Entre Anjos e DemÃ´nios', 'A histÃ³ria se passa na fictÃ­cia cidade de Darkhaven, que Ã© habitada por criaturas mitolÃ³gicas e medievais, inclusive Adam Frankenstein, que, por algum motivo misterioso se tornou imortal e vaga pelo mundo por mais de 200 anos atÃ© chegar nos dias atuais. Ele carrega o sobrenome de seu criador, Dr. Frankenstein, e encontra-se envolvido em uma guerra secular entre dois clÃ£s imortais, demÃ´nios e gÃ¡rgulas. O primeiro grupo quer destruir a humanidade, e acredita que vai conseguir quando descobrir o segredo da imortalidade de Adam e como ele foi criado. JÃ¡ os gÃ¡rgulas juraram proteger os humanos, tem o dever de proteger a humanidade, que se encontra ameaÃ§ada e evitar que o Adam caia nas mÃ£os dos demÃ´nios. ', 20, 32, 'Suspense', 2014, 93, 'Lionsgate'),
(87, 'FÃºria De TitÃ£s', 'Perseu e sua mÃ£e foram jogados ao mar pelo rei Acrisius, contudo, Perseu fora salvo com vida por uma nau de pescaria. E ali Perseu cresceu, no entanto, o jovem mal sabia que seu destino estava traÃ§ado hÃ¡ muito tempo atrÃ¡s e que seu papel no mundo, seria tÃ£o importante que mudaria o rumo de todas as grandes histÃ³rias do velho mundo. ', 20, 33, 'Fantasia', 2010, 106, 'Warner Bros.'),
(88, 'FÃºria De TitÃ£s 2', 'Uma dÃ©cada apÃ³s ter derrotado heroicamente o monstro Kraken, Perseu tenta levar uma vida mais tranquila como pescador e pai de seu Ãºnico filho. Enquanto isso, uma grande luta surge entre os deuses, enfraquecidos pela falta de devoÃ§Ã£o dos humanos, os deuses estÃ£o perdendo o controle sobre os TitÃ£s encarcerados e sobre seu feroz lÃ­der, Cronos. TraÃ­do por Hades, Zeus Ã© capturado e levado para o Submundo, e Perseu embarca bravamente em uma perigosa busca para derrotar os TitÃ£s e salvar Zeus e a humanidade. ', 20, 34, 'Fantasia', 2012, 99, 'Warner Bros.'),
(89, 'Gigante De AÃ§o', 'Em um futuro prÃ³ximo, Charlie Kenton Ã© um lutador de boxe frustrado apÃ³s o esporte se tornar uma modalidade de alta-tecnologia, sendo comandado por robÃ´s altamente desenvolvidos. Ele abandona a profissÃ£o e comeÃ§a a viver da venda de restos de robÃ´s para o ferro velho. Quando sua vida parece ter encerrado, ele se reÃºne com seu filho para construir e treinar uma nova geraÃ§Ã£o de robÃ´s.', 20, 35, 'FicÃ§Ã£o CientÃ­fica', 2011, 127, 'Touchstone Pictures'),
(90, 'G.I. Joe: Retaliation', 'Os G.I. JOE estÃ£o de volta e foram culpados por um terrÃ­vel crime que nÃ£o cometeram. Agora, os G.I. Joe nÃ£o sÃ³ tÃªm que enfrentar novamente seu mortal inimigo, Cobra, como tambÃ©m novas e perigosas ameaÃ§as de dentro do governo. Quando tudo fracassa, sÃ³ resta uma opÃ§Ã£o: RetaliaÃ§Ã£o. Roadblock (Dwayne Johnson) comanda uma nova equipe (incluindo Channing Tatum e Bruce Willis) nesta aventura explosiva, â€œrecheada de aÃ§Ã£o militarâ€. ', 20, 36, 'FicÃ§Ã£o CientÃ­fica', 2013, 110, 'Paramount Pictures'),
(91, 'GuardiÃµes da GalÃ¡xia', 'Da Marvel, o estÃºdio que trouxe franquias globais campeÃ£s de bilheteria como Homem de Ferro, Thor, CapitÃ£o AmÃ©rica e Os Vingadores - The Avengers, chega uma nova equipe, os GuardiÃµes da GalÃ¡xia. Uma aventura espacial com muita aÃ§Ã£o, GuardiÃµes da GalÃ¡xia da Marvel expande o Universo CinemÃ¡tico Marvel para o cosmo, onde o impetuoso aventureiro Peter Quill se vÃª como objeto de uma caÃ§ada implacÃ¡vel apÃ³s roubar uma misteriosa esfera cobiÃ§ada por Ronan, um vilÃ£o poderoso com ambiÃ§Ã£o que ameaÃ§a todo o universo. Para fugir do determinado Ronan, Quill Ã© forÃ§ado a fazer uma complicada alianÃ§a com um quarteto de desajustados Rocket, um guaxinim atirador, Groot, uma Ã¡rvore mutante humanoide, a mortal e enigmÃ¡tica Gamora e o vingador Drax, o Destruidor. Mas quando Quill descobre o verdadeiro poder da esfera e o perigo que ela representa para o cosmo, ele deve fazer seu melhor para reunir seu grupo desorganizado para uma Ãºltima e desesperada resistÃªncia com o destino da galÃ¡xia em jogo.', 20, 37, 'FicÃ§Ã£o CientÃ­fica', 2014, 122, 'Walt Disney Studios Motion Pictures'),
(95, 'Carlos Henrique', 'Da Marvel, o estÃºdio que trouxe franquias globais campeÃ£s de bilheteria como Homem de Ferro, Thor, CapitÃ£o AmÃ©rica e Os Vingadores - The Avengers, chega uma nova equipe, os GuardiÃµes da GalÃ¡xia. Uma aventura espacial com muita aÃ§Ã£o, GuardiÃµes da GalÃ¡xia da Marvel expande o Universo CinemÃ¡tico Marvel para o cosmo, onde o impetuoso aventureiro Peter Quill se vÃª como objeto de uma caÃ§ada implacÃ¡vel apÃ³s roubar uma misteriosa esfera cobiÃ§ada por Ronan, um vilÃ£o poderoso com ambiÃ§Ã£o que ameaÃ§a todo o universo. Para fugir do determinado Ronan, Quill Ã© forÃ§ado a fazer uma complicada alianÃ§a com um quarteto de desajustados Rocket, um guaxinim atirador, Groot, uma Ã¡rvore mutante humanoide, a mortal e enigmÃ¡tica Gamora e o vingador Drax, o Destruidor. Mas quando Quill descobre o verdadeiro poder da esfera e o perigo que ela representa para o cosmo, ele deve fazer seu melhor para reunir seu grupo desorganizado para uma Ãºltima e desesperada resistÃªncia com o destino da galÃ¡xia em jogo.', 1, 2002, 'ComÃ©dia', 2000, 100, 'Ele Mesmo'),
(96, 'Doom - A Porta do Inferno', 'Algo estranho aconteceu em uma estaÃ§Ã£o espacial localizada em Marte. A tripulaÃ§Ã£o local entrou em estado de quarentena cinco, antes da comunicaÃ§Ã£o com a Terra ser bruscamente interrompida. Para investigar o caso Ã© enviada uma equipe especialmente treinada para resolver problemas inesperados, que exijam que seus integrantes entrem em aÃ§Ã£o o mais rÃ¡pido possÃ­vel. SÃ³ que desta vez eles nÃ£o tem a menor idÃ©ia de qual Ã© o inimigo que precisam enfrentar.', 10, 2002, 'Terror', 2006, 164, '20th Century Fox');

-- --------------------------------------------------------

--
-- Estrutura da tabela `foto`
--

CREATE TABLE `foto` (
  `idFoto` int(11) NOT NULL,
  `arquivo` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `foto`
--

INSERT INTO `foto` (`idFoto`, `arquivo`) VALUES
(6, 'ce811a9fb21ef9ef121b33950537232d.jpg'),
(5, '3c7af1899c4e92b57365686657f06d0d.jpg'),
(4, 'b0dbe63636f5831334a00f066bd1e294.jpg'),
(3, 'e95c50d3df84a005eeaadc7f0b7e7dc9.jpg'),
(2, '494e2e37e8e21a50a2476c686a2eec42.jpg'),
(1, 'f67a930406bc68907541c33c7916260d.jpg'),
(7, '89aed8bd516bd12b31824fc6262bd712.jpg'),
(8, '22308951b6a885a2d75d0b72f86abc82.jpg'),
(9, 'e9a215d559e16fca829b50ea416fda15.jpg'),
(10, '29f18b01ec8b553fb7947379fde50623.jpg'),
(11, '940ea07dcd9ee19a88cbc919581d34c9.jpg'),
(12, 'ab3a4777bb7d408b11ac8dcac3d680a0.jpg'),
(13, 'c1c6f5c2a95927e4edbb71da608a93fa.jpg'),
(14, '91351bf2cbf836cc21fac8c38507b724.jpg'),
(15, 'fe1212207fc45abeadd9457963463c9d.jpg'),
(16, 'd4a00f73adc7f5f07ab55fc7a97d0259.jpg'),
(17, '00b1c31c50db43fcdcfe51ff235eed84.jpg'),
(18, '7be48913a9c2ecf122d22258dc036fed.jpg'),
(19, '06f26b28cd46717df843a0a3da8f9323.jpg'),
(20, '81215c4ac14ed704889aedeadae1f031.jpg'),
(21, '7134fa141af5df0bc32d8db414d638ad.jpg'),
(22, 'e6ed83dd37f56092e9c523fc9d4667dc.jpg'),
(23, '77830da01eee50c2e3c1a7c05075e03a.jpg'),
(24, 'd1be6a429be674a0ad34bddc3a79a231.jpg'),
(25, 'c614a2f3d9e522bda36c8e529091c2f3.jpg'),
(26, 'f93ab1f130e99e5cb04da492267307a4.jpg'),
(27, '84b8673a750344579907b7f141d8f745.jpg'),
(28, '6d2c45478b6e243e782057da51caf0d6.jpg'),
(29, '5e24b09595b59c19866919281df13da9.jpg'),
(30, '0ff05bbf8a4659c7819b7eb3db8eefb8.jpg'),
(31, '6e07779f6757b05b2d743c3295710ffb.jpg'),
(32, '1f45f79ff58f4c554d802c2b0e82f3ee.jpg'),
(33, '7c3a0af6ad3cfdbbc29b896e091d5065.jpg'),
(34, 'e611d1126d42d64e34286676b939f99c.jpg'),
(35, 'ecc92275f662e49d7e2510855e4bbe44.jpg'),
(36, 'f43f91299294c1a14382087448dab715.png'),
(37, '2ee939386e0ed16540aefabc1ef441cc.jpg'),
(70, 'bfc8eeef8c8ee3f5a006fbb5789a0357'),
(71, 'e2d2ec297192b6deb7078dff947dd335'),
(72, '1499565687.jpg'),
(2000, 'default'),
(2002, '98a6bc3ae00499b783141d58d45dd7f9.jpg'),
(2001, '455d26b0d9eb232a993d051aab2992d2.jpg'),
(2003, 'b0ad323ef12a42d12aa0411831617746.jpg'),
(2004, '7aa94d298fa07bc319e6e70e0b7fb428.jpg'),
(2005, '6240911f6bb996b6d9e201c56d0dfa69.jpg'),
(2006, '82fd59bdf82a0414910638d0bbc1934f.jpg'),
(9994, '30f13774adf5a0b10f3dc296cca74520.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `locacao`
--

CREATE TABLE `locacao` (
  `idLocacao` int(11) NOT NULL,
  `data_loc` datetime DEFAULT NULL,
  `data_dev` datetime DEFAULT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `idFilme` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `logfilme`
--

CREATE TABLE `logfilme` (
  `idLog` int(11) NOT NULL,
  `idFillme` int(11) DEFAULT NULL,
  `text` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `logfilme`
--

INSERT INTO `logfilme` (`idLog`, `idFillme`, `text`) VALUES
(2, 60, '41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `login_UNIQUE` (`login`),
  ADD UNIQUE KEY `login_2` (`login`),
  ADD KEY `idFoto_idx` (`idFoto`);

--
-- Indexes for table `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`idFilme`),
  ADD KEY `fk_idFoto` (`idFoto`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`idFoto`);

--
-- Indexes for table `locacao`
--
ALTER TABLE `locacao`
  ADD PRIMARY KEY (`idLocacao`),
  ADD KEY `fk_idLoC` (`idCliente`),
  ADD KEY `fk_idLoF` (`idFilme`);

--
-- Indexes for table `logfilme`
--
ALTER TABLE `logfilme`
  ADD PRIMARY KEY (`idLog`),
  ADD KEY `fi_idx` (`idFillme`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `filme`
--
ALTER TABLE `filme`
  MODIFY `idFilme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `idFoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53455;
--
-- AUTO_INCREMENT for table `locacao`
--
ALTER TABLE `locacao`
  MODIFY `idLocacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `logfilme`
--
ALTER TABLE `logfilme`
  MODIFY `idLog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `logfilme`
--
ALTER TABLE `logfilme`
  ADD CONSTRAINT `fi` FOREIGN KEY (`idFillme`) REFERENCES `filme` (`idFilme`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
