CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` enum('enabled','disabled') NOT NULL,
  `sub` tinyint(1) DEFAULT '0' COMMENT 'id subcategoria ',
  `name` varchar(50) NOT NULL,
  `link` varchar(250) NOT NULL DEFAULT '#' COMMENT 'padrão #',
  `icone` varchar(250) NOT NULL COMMENT 'icone fa class',
  `position` int(10) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;


INSERT INTO `menu` (`id`, `status`, `sub`, `name`, `link`, `icone`, `position`, `data`) VALUES
(1, 'enabled', 0, 'Principal', 'dashboard/index', 'fa-home', 1, '2014-09-29 00:36:52'),
(2, 'enabled', 1, 'Gráficos Relatório', '#', 'fa-bar-chart-o', 2, '2014-03-05 16:05:52'),
(3, 'enabled', 1, 'Movimentar', '#', 'fa-external-link', 6, '2014-03-05 16:05:52'),
(4, 'disabled', 1, 'Sistemas', '#', 'fa-plus', 4, '2014-06-20 16:05:52'),
(5, 'enabled', 1, 'Notificações', '#', 'fa-envelope', 7, '2014-03-05 16:05:52'),
(6, 'enabled', 1, 'Ferramentas', '#', 'fa-suitcase', 8, '2014-03-05 16:05:52'),
(7, 'enabled', 0, 'Guia do Usuário', 'dashboard/Guide/doubts', 'fa-question-circle', 9, '2014-03-05 16:05:52'),
(8, 'enabled', 1, 'Sistema', '#', 'fa-user', 11, '2014-03-05 16:05:52'),
(10, 'disabled', 1, 'Serviços', '#', 'fa-group', 3, '2014-09-20 16:05:52'),
(11, 'enabled', 1, 'Gerenciamento', '#', 'fa-book', 5, '2014-03-05 16:05:52'),
(12, 'enabled', 1, 'Configuração', '#', 'fa-gear', 12, '2013-11-05 16:05:52');
