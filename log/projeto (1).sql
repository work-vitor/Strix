-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Jun-2019 às 16:40
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `attempt`
--

CREATE TABLE `attempt` (
  `id` int(11) NOT NULL,
  `ip` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(10) NOT NULL,
  `nome` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sobrenome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `nome_usu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(130) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `data_nasci` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `dataCriacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `permissoes` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `conf_senha` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `sobrenome`, `nome_usu`, `email`, `cpf`, `sexo`, `data_nasci`, `dataCriacao`, `permissoes`, `status`, `senha`, `conf_senha`, `foto`) VALUES
(65, 'Yung', 'Buda', 'JoÃ£o Vitor', 'SoundFoodGang@gmail.com', '111.111.111-11', 'Masculino', '06/09/2002', '2019-06-19 16:02:33', 'users', 'confirmation', '$2y$10$XnNb36QkDQSjWGO9za4q2.sUsT3g8NvLLRzRgNnWiDzsHIEYDpCsy', '$2y$10$I007Kev4VHmIQQwZatYMkO.oKyGCUw0JCHIv8pTmdKPBqjhG/Kllu', '5d0a3f7bc666a.jpg'),
(66, 'Yung', 'Buda', 'ghost', 'joa.fggf3.27@gmail.com', '111.111.111-11', 'Masculino', '29/09/2002', '2019-05-23 08:18:37', 'users', 'confirmation', '$2y$10$lmLKsd8/AjGhqx/Jx5CUuOYv/dCn4kCjWs1PUekYqoLflNKYLOvLO', '$2y$10$gNOclF72ml9.tD1dyv8SPuBcv8CZxX4HxGFsJ6kheX.xqLes7VTHi', ''),
(67, 'Yung', 'Buda', 'PantaleÃ£o', 'vit-costa@hotmail.com', '111.111.111-11', 'Masculino', '06/09/2002', '2019-05-23 08:20:38', 'users', 'confirmation', '$2y$10$DecSgQk02EMflmiisrCn0Oxv6A/hSlMhUhlnQUhv4Rhb/LFyk6k.G', '$2y$10$7MTQQwGEQYs0ApMWHHaKNeyJLoz5tJCxzD6VayJrAaV49imynM2gq', ''),
(68, 'Ana', 'Vieira', 'aninhatop', 'anacruz2010@hotmail.com', '111.111.111-11', 'Feminino', '11/02/2002', '2019-06-17 19:07:54', 'users', 'confirmation', '$2y$10$jR9grqPgbwH/LKBiIhXnIOEj.a1IAO9w9s4NlvWngUA0Uc078YQWO', '$2y$10$sIzl5guSc7SoJNcZsQZ7he0KVawWZExhpbeTMiVH/ke0sTS58YQwC', ''),
(69, 'Pedro', 'Victor', 'Master', 'master@gmail.com', '111.111.111-11', 'Masculino', '05/06/2002', '2019-06-17 19:48:36', 'users', 'confirmation', '$2y$10$myqBYHT8uKCrdylC3CO2a.hJQY3xbC8xofAkcDW3xGsT7XHbEKXk2', '$2y$10$wJ3fFPg8ec7N5ZrvT.Hq2uMOSQWjB7nS.N9AHqv524t46YWxtecpi', ''),
(70, 'Pedro', 'Victor', 'Master', 'joao@gmail.com', '111.111.111-11', 'Masculino', '30/09/2002', '2019-06-17 20:03:45', 'users', 'confirmation', '$2y$10$/fjLHU5alNtZ.353E/joYeHVznUhJETYB0eyfSakSF4zdj3Vtwt0W', '$2y$10$Mfy9Ou6E.ay6cxJALJSAOurCHKBbNuRPlSubRoeo9FWigt6HFTsvC', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

CREATE TABLE `postagem` (
  `id` int(20) NOT NULL,
  `id_adm` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `subtitulo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hashtag` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `postagem` text COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `destaque` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `visitas` int(200) NOT NULL,
  `curtidas` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`id`, `id_adm`, `titulo`, `subtitulo`, `hashtag`, `data`, `postagem`, `imagem`, `destaque`, `visitas`, `curtidas`) VALUES
(30, 'Danielle Dantas', 'Mortal Kombat 11', 'Foi confirmada sua ausÃªncia. A desenvolvedora de Mortal Kombat 11 afirmou que o Salsicha nÃ£o estarÃ¡ no jogo como um personagem convidado.', 'Fortinite', '2019-05-29 09:28:53', 'â€œO Salsicha nÃ£o estarÃ¡ no jogo, nunca. Desculpa, meme mortoâ€, disse o chefe de comunidade do jogo Tyler Lansdown. O criador da franquia, Ed Boon, chegou atÃ© a tuitar uma arte do Salsicha no jogo. Essa ideia de colocar o personagem de Scooby-Doo no jogo surgiu quando alguns  memes do Salsicha superpoderoso comeÃ§aram a aparecer. Diziam que ele era capaz de usar as habilidades de Dragon Ball. A zoeira repercutiu, e fÃ£s querendo uma versÃ£o demonÃ­aca do Salsicha criaram um abaixo-assinado pedindo que a desenvolvedora adicionasse o personagem em Mortal Kombat 11. Essa iniciativa arrecadou quase 400 mil assinaturas.', '5cee34b58643f.png', 'destaque', 0, 0),
(33, 'Danielle Dantas', ' iPhone X ', 'Smartphone traz ficha tÃ©cnica robusta e tela de 5,8 polegadas, maior que a do iPhone 8 Plus.', 'Fortinite', '2019-05-29 09:40:31', 'Desde o final do ano passado o futurista iPhone X esta entre nÃ³s. Chama a atenÃ§Ã£o por estar na casa dos  R$ 7 mil, tornando-se o celular mais caro jÃ¡ vendido no Brasil. Ele Ã© o primeiro celular da Apple a adotar a tendÃªncia das bordas mÃ­nimas e arredondadas. O display conta com 5,8 polegadas e alta resoluÃ§Ã£o, com direito a painel construÃ­do em OLED, mais avanÃ§ado do que o LCD presente em modelos anteriores. Como resultado, o usuÃ¡rio encontra imagens mais vibrantes e mais realistas. A tela ocupa toda a frente do telefone, retirando o botÃ£o Home, em seu lugar, um recorte na regiÃ£o superior onde se encontra os sensores. Chama ainda mais atenÃ§Ã£o por seu reconhecimento facial, substituindo o leitor digital, jÃ¡ que basta olhar em direÃ§Ã£o a tela do telefone que ele da o seu feedback, reconhecendo tambÃ©m quando vocÃª esta por perto mostrando suas notificaÃ§Ãµes, caso nÃ£o goste, Ã© possÃ­vel desabilitar esta funÃ§Ã£o. Ouve uma grande mudanÃ§a  na cÃ¢mera de selfies, deixando o \"protagonista\" da foto bem localizado e um fundo desfocado.  Quebrou seu cabo?? Isso nÃ£o serÃ¡ mais um problema!! O carregamento dele nÃ£o exige que plugue em nenhum cabo, revestido em vidro, O iPhone X funciona cometa tecnologia, necessitando  apenas do seu dispositivo de recarga WIRELESS, vendido separadamente. Agora vemos o que o torna tÃ£o caro e potente, internamente falando, o modelo X tem seu processador  A11 Bionic Ã© o primeiro da Apple com seis nÃºcleos, com redes neurais que aprendem o uso, e sua bateria teve um alcance de duas horas a mais do que o seu anterior.', '5cee376fba821.jpg', 'destaque', 0, 0),
(34, 'Danielle Dantas', 'Moto Z', 'conheÃ§a as vantagens e desvantagens do novo smartphone', 'Fortinite', '2019-05-29 09:41:32', 'Os primeiros celulares da linha Z contam com um hardware de ponta para jogos e aplicativos. O Moto Z traz  um processador da Qualcomm, o Snapdragon 820, ele chegarÃ¡ ao Brasil de 1,8 GHz, enquanto a versÃ£o americana vem com 2,2 GHz. Em termos nominais, a diferenÃ§a Ã© de 20% em relaÃ§Ã£o ao Moto Z estrangeiro.   O celular ainda possui armazenamento interno de 32 GB ou 64 GB, com entrada para cartÃ£o de 256 GB. Fora isso, hÃ¡ tambÃ©m conexÃ£o 4G, Wi-Fi, Bluetooth e NFC, alÃ©m de leitor de impressÃµes digitais. Apesar de ambos terem tela de 5,5 polegadas com resoluÃ§Ã£o QHD (2560 x 1440 pixels), o Moto Z Force conta com uma proteÃ§Ã£o especial anti-quebra. AlÃ©m disso, o modelo mais avanÃ§ado tem cÃ¢mera traseira de 21 MP com foco misto (a laser e comum), estabilizaÃ§Ã£o Ã³ptica (OIS) e gravaÃ§Ã£o em 4K (2160p), alÃ©m de sensor frontal de 5 MP com flash. A bateria do Z Force Ã© de 3.500 mAh. JÃ¡ o Moto Z mais simples chega com vidro Gorilla Glass 4, menos resistente, e tem a cÃ¢mera traseira reduzida para 13 MP com â€œsomenteâ€ foco a laser, estabilizaÃ§Ã£o Ã³ptica OIS e gravaÃ§Ã£o em 4K.  O sensor frontal Ã© o mesmo de 5 MP com flash, incluindo vÃ­deos em Full HD (1080p). JÃ¡ a bateria Ã© de 2.600 mAh. O design da cÃ¢mera lembra dos 5,2 milÃ­metros do Moto Z?? Eles nÃ£o contam com a protuberÃ¢ncia da cÃ¢mera traseira do celular. Embora a empresa nÃ£o tenha divulgado as medidas com o sensor, o relevo na parte traseira do Smartphone Ã© bastante notÃ¡vel e deve chegar a uns 2 milÃ­metros. O mesmo ocorre com o Moto Z Force. Sua bateria Ã© bem mais curta, sendo esse um dos problemas na grande reduÃ§Ã£o da espessura do Moto Z Ã© que ele tem uma bateria consideravelmente mais curta.  O Moto Z tem ainda bateria com capacidade inferior ao antecessor Moto X Style (3.000 mAh) entre outros concorrentes. O LG G5 SE, por exemplo, tem 2.800 mAh, enquanto o Galaxy S7 traz 3.000 mAh e o Galaxy S7 Edge tem 3.600 mAh. A adoÃ§Ã£o do USB-C agrava ainda mais o problema com acessÃ³rios. Embora esteja se popularizando muito com a adoÃ§Ã£o de outras fabricantes, como LG e Microsoft, o padrÃ£o Ã© bem menos usado do que o microUSB e cabos antigos tambÃ©m nÃ£o funcionarÃ£o sem adaptador. Em compensaÃ§Ã£o, a nova tecnologia Ã© bem mais rÃ¡pida e fÃ¡cil de usar que a atual, uma vez que nÃ£o hÃ¡ lado especÃ­fico para o seu encaixe.', '5cee37ac1c359.jpg', 'destaque', 0, 0),
(35, 'Danielle Dantas', 'Assistentes Virtuais ', 'Cuidado: seus dispositivos ouvem, gravam e arquivam o que vocÃª fala', 'Fortinite', '2019-05-29 09:43:18', 'Sim,  Alexa, Siri e Cortana ouvem, registram, arquivam e monitoram, de alguma maneira, o que vocÃª fala. Mas nem sempre transmitem oque ouvem, sÃ³ quando um dispositivo ouve a palavra de despertar, como â€œAlexaâ€, Ã© que a gravaÃ§Ã£o Ã© mandada para a nuvem e analisada. Todas as companhias de tecnologia acusadas de espionar os consumidores dizem que sÃ³ ouvem quando recebem uma ordem expressa para isso. Dizer a frase â€œOK, Googleâ€ desperta os aparelhos da companhia. A Apple, que se orgulha de como protege a privacidade dos seus usuÃ¡rio, dizem que a Siri procura satisfazer todas as demandas possÃ­veis de maneira direta no iPhone ou no computador do usuÃ¡rio. Os comandos de Ã¡udios sÃ£o mandados diretamente para a nuvem. EntÃ£o, computadores tentam adivinhar a intenÃ§Ã£o do usuÃ¡rio e satisfazÃª-la. Depois, as empresas poderiam apagar a solicitaÃ§Ã£o e a resposta do sistema, mas geralmente nÃ£o fazem isso. A razÃ£o sÃ£o os dados. Para a inteligÃªncia artificial da fala, quanto mais dados, melhor. No caso da Siri, sua demanda Ã© levada Ã  nuvem para uma anÃ¡lise adicional, lÃ¡ serÃ¡ marcada com um identificador em cÃ³digo, e nÃ£o com o nome do usuÃ¡rio. Essas gravaÃ§Ãµes ficam arquivadas por seis meses, assim o sistema de reconhecimento de voz possa aprender a entender melhor a voz daquela pessoa. Depois, outra cÃ³pia Ã© salva, sem o identificador, para ajudar a Siri nos prÃ³ximos dois anos.', '5cee381670d99.jpg', '', 0, 0),
(36, 'Danielle Dantas', 'VÃ­rus defensivo japonÃªs', 'VÃ­rus â€˜defensivoâ€™ de computador serÃ¡ criado pelo JapÃ£o', 'Fortinite', '2019-05-29 09:44:43', 'Infelizmente nÃ£o foram divulgados todos os detalhes desta novidade, mas, VocÃª jÃ¡ ouviu falar em vÃ­rus defensivo no mundo da tecnologia?? Pois bem, foi anunciado nesta semana a criaÃ§Ã£o desta modalidade de vÃ­rus, cujo o intuito Ã© controlar a defasagem que se instaurou na Ã¡rea de seguranÃ§a cibernÃ©tica. A unica certeza Ã© que seu lanÃ§amento estÃ¡ previsto para marÃ§o de 2020. Vemos que uma das maiores potÃªncias mundiais contam com seus programas de ataque e defesa cibernÃ©tico, tratando-se de um assunto muito sigiloso e pouco se sabe sobre. Tendo em media 150 profissionais defendendo a rede japonesa na Ã¡rea, segundo as autoridades tomam essa atitude devido a situaÃ§Ã£o defasada. Embora o aumento  da criaÃ§Ã£o deste vÃ­rus, o JapÃ£o nem se compara as grandes potÃªncias mundiais quando o assunto Ã© defesa cibernÃ©tica. Os Estados Unidos, por exemplo, contam com 6200 profissionais trabalhando dia e noite para manter o paÃ­s seguro. O paÃ­s com o maior nÃºmero de profissionais dedicados para barrar os ataques Ã© a China. Por lÃ¡ cerca de 130 mil pessoas fazem essa funÃ§Ã£o tÃ£o importante nos dias atuais. Ao termos esses dados, podemos entender o por quÃª da necessidade do JapÃ£o em se aprimorar nas suas fronteiras cibernÃ©ticas.', '5cee386b9b8f3.jpg', '', 0, 0),
(38, 'Danielle Dantas', 'E3 2019', 'O QUE ESPERAR DOS PAINÃ‰IS, PC GAMING SHOW E MAIS', 'games', '2019-06-07 19:42:52', 'AlÃ©m das apresentaÃ§Ãµes e conferÃªncias dos grandes estÃºdios e empresas, a E3 tambÃ©m Ã© rodeada de anÃºncios paralelos que podem surpreender o mundo do games. Um destes eventos paralelos Ã© o E3 Coliseum, que em 2019 terÃ¡ painÃ©is de Marvel\'s Avengers, Gears 5, Destiny 2 e da Netflix.', '5cfaa21c44313.jpg', 'slider', 0, 0),
(39, 'Yung Buda', 'BLIZZARD', 'CANCELA FPS DE STARCRAFT PARA FOCAR EM OVERWATCH 2 E DIABLO 4, DIZ SITE', 'games', '2019-06-07 19:44:20', 'De acordo com uma reportagem do site Kotaku, a Blizzard estava desenvolvendo um game de tiro em primeira pessoa da franquia StarCraft, mas desistiu do projeto para concentrar esforÃ§os em outras franquias. Fontes prÃ³ximas ao assunto afirmam que agora o estÃºdio estÃ¡ trabalhando em Diablo 4 e Overwatch 2, que nÃ£o foram anunciados oficialmente.  \"Ares\" seria o suposto codinome do game de StarCraft, que torna-se o segundo projeto da franquia cancelado ao lado de StarCraft: Ghost. De acordo com o site, o jogo era descrito como \"um Battlefield no universo de StarCraft\" e estava em desenvolvimento hÃ¡ dois anos. As equipes construÃ­ram protÃ³tipos nos quais o jogador, no controle de um fuzileiro Terran, precisava combater alienÃ­genas Zerg. AlÃ©m desse projeto, um tÃ­tulo mobile nÃ£o revelado tambÃ©m foi cancelado.', '5cfaa27450d0b.jpg', 'exclusivo', 0, 0),
(40, 'Yung Buda', 'Sony VS Microsoft', 'ACORDO ENTRE SONY E MICROSOFT NÃƒO FOI INFORMADO AOS FUNCIONÃRIOS DA PLAYSTATION', 'games', '2019-06-07 19:46:11', 'Microsoft e Sony anunciaram em maio uma parceria estratÃ©gica cujo foco estaria em buscar inovaÃ§Ãµes nas Ã¡reas de serviÃ§os na nuvem e inteligÃªncia artificial, mas funcionÃ¡rios da PlayStation parecem nÃ£o ter sido informados a respeito desta parceria pelos gestores da empresa japonesa.  Conforme publicado pela Bloomberg, os executivos da Sony teriam negociado diretamente com a Microsoft deixando funcionÃ¡rios da divisÃ£o PlayStation de lado durante as conversas. Quando profissionais da empresa japonesa descobriram o acordo, chefes tiveram de acalmar os subordinados dizendo que os planos para a produÃ§Ã£o de um novo console nÃ£o seriam afetados por causa disso.', '5cfaa2e3361b3.jpg', 'indicar', 0, 0),
(41, 'Yung Buda', 'DESTINY 2', 'TERÃ VERSÃƒO GRATUITA PARA JOGAR CHAMADA NEW LIGHT', 'games', '2019-06-07 19:47:28', 'Confirmando vazamentos, a Bungie anunciou que Destiny 2 terÃ¡ uma versÃ£o gratuita para jogar chamada New Light. Isto darÃ¡ aos jogadores a oportunidade de explorar o game base e todo o conteÃºdo extra do primeiro ano (incluindo as expansÃµes MaldiÃ§Ã£o de OsÃ­ris e A Mente BÃ©lica), em todas as plataformas. New Light serÃ¡ lanÃ§ado em 17 de setembro, assim como a expansÃ£o Shadowkeep.  A novidade Ã© uma tentativa de diminuir as barreiras entre os jogadores. Em New Light, vocÃª comeÃ§a no CosmÃ³dromo -- um remaster da primeira missÃ£o do primeiro Destiny --, e Ã© levado Ã  Torre apÃ³s a conclusÃ£o do primeiro objetivo. EntÃ£o, o jogador fica livre para escolher o caminho que quer trilhar. O GuardiÃ£o nÃ£o fica preso Ã  linearidade, entÃ£o pode, por exemplo, comeÃ§ar pela MaldiÃ§Ã£o de OsÃ­ris e depois pela narrativa do jogo base. Para jogar o conteÃºdo do segundo ano, que teve inÃ­cio com a expansÃ£o Renegados, Ã© preciso comprar o DLC -- no entanto, vocÃª terÃ¡ acesso aos novos locais, como a Cidade OnÃ­rica, mesmo sem ter a expansÃ£o.', '5cfaa330bc186.jpg', 'indicar', 0, 0),
(42, 'Yung Buda', 'GOOGLE STADIA', 'SERÃ LANÃ‡ADO EM NOVEMBRO E CUSTARÃ US$ 9,99 POR MÃŠS', 'games', '2019-06-07 19:48:36', 'O Google revelou que a plataforma de streaming de games Stadia chega em novembro a 14 paÃ­ses, com uma mensalidade de US$ 9,99. Essa opÃ§Ã£o de assinatura traz streaming de atÃ© 4K de resoluÃ§Ã£o, taxa de 60 quadros por segundo e surround sound 5.1. Os games mais \"velhos\" estarÃ£o inclusos no serviÃ§o, e tÃ­tulos mais \"recentes\" precisarÃ£o ser comprados Ã  parte.  HÃ¡ tambÃ©m a Founder\'s Edition, que custa US$ 129 e inclui o gamepad, o Chromecast Ultra, Destiny 2 e trÃªs meses de assinatura do serviÃ§o.', '5cfaa37435baf.jpg', 'indicar', 0, 0),
(43, 'Yung Buda', 'SONY', 'NUNCA VAI ABANDONAR GAMES COM FOCO EM NARRATIVA, DIZ PRESIDENTE DA PLAYSTATION', 'games', '2019-06-07 19:50:17', 'O presidente e diretor executivo da divisÃ£o PlayStation da Sony, Jim Ryan, falou sobre o sucesso da empresa com games focados em narrativa. Ele disse que \"certamente Ã© um gÃªnero de games que nunca vamos abandonar\".  Em entrevista ao CNET, Ryan foi questionado sobre games no modelo de \"jogo como serviÃ§o\", como Anthem e Fallout 76, e se sÃ£o o futuro de entretenimento interativo quando comparado com os tÃ­tulos focados em histÃ³ria que a Sony tem dado atenÃ§Ã£o hÃ¡ um tempo, que incluem God of War, Horizon Zero Dawn, Marvel\'s Spider-Man e outros.', '5cfaa3d978a50.jpg', 'indicar', 0, 0),
(44, 'Yung Buda', 'UNCHARTED', 'FILME DE UNCHARTED COM TOM HOLLAND SERÃ LANÃ‡ADO EM 2020', 'games', '2019-06-07 19:52:27', 'ApÃ³s anos de problemas de desenvolvimento, o filme de Uncharted chegarÃ¡ aos cinemas em 2020. A Sony Pictures anunciou que o filme de aÃ§Ã£o e aventura baseado na franquia de games da Naughty Dog serÃ¡ lanÃ§ado no perÃ­odo de festividades do prÃ³ximo ano. O longa Ã© estrelado por Tom Holland, que interpretarÃ¡ a versÃ£o jovem do caÃ§ador de tesouros Nathan Drake.  De acordo com o The Hollywood Reporter, Uncharted estreia nos cinemas dos Estados Unidos em 18 de dezembro de 2020. O filme chega na mesma data que o remake de Amor, Sublime Amor, de Steven Spielberg, e uma sequÃªncia de Um PrÃ­ncipe em Nova York.', '5cfaa45bcaf53.jpg', 'exclusivo', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attempt`
--
ALTER TABLE `attempt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `postagem`
--
ALTER TABLE `postagem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attempt`
--
ALTER TABLE `attempt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `postagem`
--
ALTER TABLE `postagem`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
