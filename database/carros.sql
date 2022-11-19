-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Nov-2022 às 00:21
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `carros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carros`
--

CREATE TABLE `carros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca_id` bigint(20) UNSIGNED NOT NULL,
  `ano` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano_modelo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `km` bigint(255) NOT NULL,
  `cambio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `combustivel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `img_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contato` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `carros`
--

INSERT INTO `carros` (`id`, `nome`, `modelo`, `marca_id`, `ano`, `ano_modelo`, `km`, `cambio`, `combustivel`, `cor`, `preco`, `img_path`, `descricao`, `contato`, `endereco`, `created_at`, `updated_at`) VALUES
(1, 'FIAT PALIO', '1.6 MPI ESSENCE 16V FLEX 4P AUTOMATIZADO', 11, '2015', '2015', 94058, 'MT', 'Flex', 'Preto', '38700.00', '1668837930.jpg', '', '(xx) xxxxx-xxxx', 'São Paulo - Sp', '2022-11-19 09:05:30', '2022-11-19 22:05:57'),
(40, 'JAC J3', '1.4 16V GASOLINA 4P MANUAL', 17, '2013', '2014', 104000, 'MT', 'Gasolina', 'Preto', '21500.00', '1668884920.jpg', '', '(xx) xxxxx-xxxx', 'Natal - RN', '2022-11-19 22:08:40', '2022-11-19 22:08:40'),
(41, 'JAC J2', '1.4 16V GASOLINA 4P MANUAL', 17, '2014', '2014', 65000, 'MT', 'Gasolina', 'Preto', '25500.00', '1668888319.jpg', '', '(xx) xxxxx-xxxx', 'Rio de Janeira - RJ', '2022-11-19 23:05:19', '2022-11-19 23:06:07'),
(42, 'VOLKSWAGEN GOL', '1.6 MSI TOTALFLEX 4P MANUAL', 42, '2021', '2022', 56687, 'MT', 'Flex', 'Prata', '62990.00', '1668888758.jpg', '', '(xx) xxxxx-xxxx', 'Maringá - PR', '2022-11-19 23:12:38', '2022-11-19 23:12:38'),
(43, 'VOLKSWAGEN GOL', '1.0 MI 8V FLEX 2P MANUAL G.IV', 42, '2009', '2009', 279427, 'MT', 'Flex', 'Branco', '18890.00', '1668888860.jpg', '', '(xx) xxxxx-xxxx', 'Taboão da Serra - SP', '2022-11-19 23:14:20', '2022-11-19 23:14:20'),
(44, 'FIAT UNO', '1.0 MPI MILLE FIRE ECONOMY 8V FLEX 4P MANUAL', 11, '2009', '2010', 138700, 'MT', 'Flex', 'Prata', '18900.00', '1668889073.jpg', '', '(xx) xxxxx-xxxx', 'Uberlândia - MG', '2022-11-19 23:17:53', '2022-11-19 23:17:53'),
(45, 'FORD FIESTA', '1.6 MPI HATCH 8V FLEX 4P MANUAL', 12, '2012', '2012', 230000, 'MT', 'Flex', 'Branco', '27900.00', '1668889710.jpg', '', '(xx) xxxxx-xxxx', 'Franca - SP', '2022-11-19 23:28:30', '2022-11-19 23:28:30'),
(46, 'HYUNDAI VELOSTER', '1.6 16V GASOLINA 3P AUTOMÁTICO', 15, '2012', '2012', 3000, 'AT', 'Flex', 'preto neon', '69000.00', '1668889792.jpg', '', '21970973961', 'Chapadão do Lageado, SC', '2022-11-19 23:29:52', '2022-11-19 23:31:56'),
(47, 'VOLKSWAGEN KOMBI', '1.5 LUXO 8V GASOLINA 3P MANUAL', 42, '2012', '2012', 200000, 'AT', 'Gasolina', 'azul', '30000.00', '1668890149.jpg', '', '21970973961', 'Anta Gorda, RS', '2022-11-19 23:35:49', '2022-11-19 23:35:49'),
(48, 'GURGEL G-15', 'GASOLINA 2P MANUAL', 44, '1981', '1981', 95000, 'AT', 'Gasolina', 'bege', '59000.00', '1668890525.jpg', '', '21970973961', 'Saco Preto, MG', '2022-11-19 23:42:05', '2022-11-20 00:33:51'),
(49, 'SUBARU IMPREZA', '2.0 GT SEDAN 4X4 16V TURBO GASOLINA 4P MANUAL', 38, '1998', '1998', 145000, 'MT', 'Gasolina', 'Cinza', '110000.00', '1668891620.jpg', '', '21970973961', 'Piranhas, GO', '2022-11-20 00:00:20', '2022-11-20 00:00:20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcas`
--

CREATE TABLE `marcas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `marcas`
--

INSERT INTO `marcas` (`id`, `nome`, `img_path`, `created_at`, `updated_at`) VALUES
(1, 'Agrale', 'marcas/agrale.png', NULL, NULL),
(2, 'Audi', 'marcas/audi.png', NULL, NULL),
(3, 'Bmw', 'marcas/bmw.png', NULL, NULL),
(4, 'Byd', 'marcas/byd.png', NULL, NULL),
(5, 'Caoa Chery', 'marcas/caoa-chery.png', NULL, NULL),
(6, 'Chevrolet', 'marcas/chevrolet.png', NULL, NULL),
(7, 'Citroen', 'marcas/citroen.png', NULL, NULL),
(8, 'Dodge', 'marcas/dodge.png', NULL, NULL),
(9, 'Effa', 'marcas/effa.png', NULL, NULL),
(10, 'Ferrari', 'marcas/ferrari.png', NULL, NULL),
(11, 'Fiat', 'marcas/fiat.png', NULL, NULL),
(12, 'Ford', 'marcas/ford.png', NULL, NULL),
(13, 'Foton', 'marcas/foton.png', NULL, NULL),
(14, 'Honda', 'marcas/honda.png', NULL, NULL),
(15, 'Hyundai', 'marcas/hyundai.png', NULL, NULL),
(16, 'Iveco', 'marcas/iveco.png', NULL, NULL),
(17, 'Jac', 'marcas/jac.png', NULL, NULL),
(18, 'Jaguar', 'marcas/jaguar.png', NULL, NULL),
(19, 'Jeep', 'marcas/jeep.png', NULL, NULL),
(20, 'Kia', 'marcas/kia.png', NULL, NULL),
(21, 'Lamborghini', 'marcas/lamborghini.png', NULL, NULL),
(22, 'Land Rover', 'marcas/land-rover.png', NULL, NULL),
(23, 'Lexus', 'marcas/lexus.png', NULL, NULL),
(24, 'Lifan', 'marcas/lifan.png', NULL, NULL),
(25, 'Maserati', 'marcas/maserati.png', NULL, NULL),
(26, 'Mclaren', 'marcas/mclaren.png', NULL, NULL),
(27, 'Mercedes Amg', 'marcas/mercedes-amg.png', NULL, NULL),
(28, 'Mercedes Benz', 'marcas/mercedes-benz.png', NULL, NULL),
(29, 'Mini', 'marcas/mini.png', NULL, NULL),
(30, 'Mitsubishi', 'marcas/mitsubishi.png', NULL, NULL),
(31, 'Nissan', 'marcas/nissan.png', NULL, NULL),
(32, 'Peugeot', 'marcas/peugeot.png', NULL, NULL),
(33, 'Porsche', 'marcas/porsche.png', NULL, NULL),
(34, 'Ram', 'marcas/ram.png', NULL, NULL),
(35, 'Renault', 'marcas/renault.png', NULL, NULL),
(36, 'Rolls Royce', 'marcas/rolls-royce.png', NULL, NULL),
(38, 'Subaru', 'marcas/subaru.png', NULL, NULL),
(39, 'Suzuki', 'marcas/suzuki.png', NULL, NULL),
(41, 'Toyota', 'marcas/toyota.png', NULL, NULL),
(42, 'Volkswagen', 'marcas/volkswagen.png', NULL, NULL),
(43, 'Volvo', 'marcas/volvo.png', NULL, NULL),
(44, 'Gurgel', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_15_205626_create_marcas_table', 2),
(6, '2022_11_16_045719_create_carros_table', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carros_marca_id_foreign` (`marca_id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carros`
--
ALTER TABLE `carros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `carros`
--
ALTER TABLE `carros`
  ADD CONSTRAINT `carros_marca_id_foreign` FOREIGN KEY (`marca_id`) REFERENCES `marcas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
