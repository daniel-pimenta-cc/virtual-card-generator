DROP TABLE IF EXISTS `virtual_cards`;

CREATE TABLE `virtual_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link_git` varchar(255) NOT NULL,
  `link_linkedin` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `virtual_cards`
--

INSERT INTO `virtual_cards` (`id`, `name`, `title`, `link_git`, `link_linkedin`, `description`, `slug`) VALUES
(4, 'Daniel Pimenta de Sousa', 'FullStack Dev', 'https://github.com/daniel-pimenta-cc', 'https://www.linkedin.com/in/daniel-pimenta-cc/', 'A creative and resourceful developer ;)', 'daniel-pimenta-de-sousa');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `virtual_cards`
--
ALTER TABLE `virtual_cards`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `virtual_cards_slug_unique` (`slug`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `virtual_cards`
--
ALTER TABLE `virtual_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;