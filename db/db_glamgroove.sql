-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_glamgroove
CREATE DATABASE IF NOT EXISTS `db_glamgroove` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_glamgroove`;

-- Dumping structure for table db_glamgroove.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_glamgroove.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table db_glamgroove.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_glamgroove.migrations: ~0 rows (approximately)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_12_10_111402_create_posts_table', 1);

-- Dumping structure for table db_glamgroove.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_glamgroove.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table db_glamgroove.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_glamgroove.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table db_glamgroove.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int NOT NULL DEFAULT '0',
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_glamgroove.posts: ~10 rows (approximately)
REPLACE INTO `posts` (`id`, `user_id`, `title`, `slug`, `body`, `views`, `published_at`, `created_at`, `updated_at`) VALUES
	(1, 5, 'Ea officiis dolorem aliquid dolor ut pariatur molestiae vel.', 'quod-et-ducimus-unde-quia-ut-veritatis', '<p>Est non aut magnam doloribus dolorem. Modi veritatis quis quae ipsum et reprehenderit odio. Tempora inventore quia earum veniam numquam ut voluptas.</p><p>Facilis mollitia recusandae sed asperiores est voluptates. Voluptatem eum animi rerum velit autem ut aut et. Sit eligendi consequatur maiores voluptates sapiente.</p><p>Perferendis modi odio est praesentium incidunt at sint. Eum quisquam officia similique aliquid provident qui nulla. Aut ipsa est veniam aliquid quia ipsam ratione.</p><p>Omnis consequatur voluptatem est quam. Modi temporibus et quibusdam iusto consequatur. Sed omnis perspiciatis enim ipsam. Totam voluptas fugit qui veritatis.</p><p>Quas totam aut officia. Eos iste sit nobis ab dignissimos ratione. Expedita sit consequuntur ullam quasi cupiditate molestias magnam. Voluptatibus dolorem ducimus quidem.</p><p>Asperiores voluptas tempore eos consequatur. Autem sequi vitae amet occaecati unde totam ad. Officia est nihil temporibus ut. In et voluptate corporis et expedita maxime inventore.</p><p>Consectetur et eum laborum velit accusamus optio. Quasi voluptatem veritatis hic porro et accusantium error. Eum ab officia et. Et assumenda animi reiciendis optio optio unde necessitatibus illum. Ullam et magni est ut non vel qui.</p>', 0, NULL, '2023-12-10 12:07:04', '2023-12-10 12:07:04'),
	(2, 2, 'Ut aspernatur delectus soluta.', 'sunt-doloremque-ut-autem-qui-est', '<p>Facilis ut officiis maiores in. Minus et saepe consequatur aut rerum possimus. Ut libero numquam voluptas illum vel. Dolor est rerum blanditiis non consequatur molestiae saepe.</p><p>Mollitia rerum commodi distinctio. Veritatis beatae et culpa est blanditiis laudantium. Deserunt nisi veniam voluptas voluptatem sit doloribus. Quo deserunt ut earum.</p><p>Neque quia enim labore dicta et dolor est quos. Soluta sequi non saepe qui rem eum unde. Qui tempore culpa molestias molestias. Quo exercitationem minima ipsa enim quis libero quo.</p><p>Eligendi aut ipsam cupiditate recusandae et exercitationem. Repellendus ut et beatae eum et consequuntur earum. Voluptas ut quam sed sit magnam aut dolores eos. Fuga facere blanditiis in est praesentium nisi qui sunt.</p><p>Repellat ut repudiandae autem ratione incidunt rerum rerum. Voluptas illo et quis repudiandae illo. Quia facere sint eveniet inventore alias. Magnam amet consequatur rem sed velit aliquid nemo.</p><p>Omnis at debitis voluptatem occaecati. Reiciendis dolor ipsum repellendus vel est dignissimos sed. Deleniti et est asperiores eius quidem eius.</p>', 0, NULL, '2023-12-10 12:07:04', '2023-12-10 12:07:04'),
	(3, 5, 'Asperiores suscipit amet enim reiciendis maiores.', 'dolores-rerum-magni-pariatur-quaerat', '<p>Ullam at eum eum fuga nobis dicta asperiores. Distinctio reiciendis nesciunt est doloremque unde. Cum beatae hic excepturi voluptatem velit.</p><p>Ea unde velit quos voluptatibus voluptas maiores voluptates. Corrupti expedita assumenda dolor aliquam culpa nihil.</p><p>Ducimus ut odit rem velit cupiditate. Error et labore voluptas aut hic. Non maxime id vero occaecati ipsum est qui. Fuga voluptatem minima repudiandae cum odio ullam dolor.</p><p>Sit accusamus praesentium ipsum reprehenderit ut molestiae. Reiciendis repellendus eaque eos rem illo. Est velit quam omnis temporibus ea. In dolor voluptatibus sed sed aut dolor.</p><p>Suscipit eveniet voluptatem quisquam quidem deserunt explicabo. Ut nesciunt sint magni consequatur ea rerum velit sit.</p><p>Sit tempore sit aliquam corrupti minus sint nisi. Molestiae voluptas ea accusamus qui consequatur ratione in perferendis. Enim ad reprehenderit architecto.</p>', 0, NULL, '2023-12-10 12:07:04', '2023-12-10 12:07:04'),
	(4, 5, 'Et aliquam voluptates.', 'soluta-ea-quos-ad-necessitatibus-voluptate-iure-aspernatur', '<p>Doloribus et quod vero sunt. Eum voluptatem soluta sed nobis sit est cumque. Facere at eum magnam earum explicabo voluptas iste. Adipisci rerum totam voluptatem illo et. Fuga pariatur eos commodi ullam.</p><p>Unde a voluptas consequatur. Et est velit ab qui sint ipsam. Aliquam quasi sed voluptatum et cum eligendi placeat voluptas.</p><p>Ut ex voluptatibus natus laboriosam asperiores. Quam qui quae fugiat inventore voluptas odio similique. Fuga maiores quo dignissimos error ea. Quia et asperiores sed voluptas ipsam.</p><p>Dignissimos sit magnam molestias fuga doloribus. Quis explicabo sint quas aut repudiandae dolores.</p><p>Provident qui nemo dolore libero. Et veritatis consectetur architecto soluta occaecati ipsa eligendi. Provident et nihil nisi voluptate officiis. Praesentium magni quia eveniet unde perferendis.</p><p>Sit et nesciunt ducimus unde aut. Incidunt cumque aperiam dolor blanditiis. Voluptatem assumenda ex molestiae. Beatae repellendus fugit et quia.</p><p>Recusandae nostrum non est. Ut et similique quae voluptates quia. Pariatur praesentium dolorum ab velit consequatur.</p><p>Quae nemo blanditiis totam ducimus. Qui sit qui qui corporis.</p><p>Dolorum fugiat et quia incidunt. Possimus ducimus velit enim eos possimus. Molestiae laudantium quas autem sit perferendis provident autem.</p><p>Qui qui ipsam blanditiis reiciendis et fuga tempore. Voluptas minus eum eum est voluptatem. Vel non delectus at totam reiciendis laboriosam.</p>', 0, NULL, '2023-12-10 12:07:04', '2023-12-10 12:07:04'),
	(5, 5, 'Voluptatibus et ipsam unde.', 'iure-et-nemo-omnis-pariatur-corporis-tenetur', '<p>Modi et sint ut qui ab dignissimos. Unde voluptatibus et distinctio qui. Et quis veniam consequatur aut aut deserunt quidem veritatis. A voluptate quo recusandae fugiat aliquam qui. Consectetur cumque quam velit saepe.</p><p>Qui aut ullam natus ut tenetur eos autem. Et quasi ex nobis molestiae quibusdam ut.</p><p>Distinctio autem consequuntur perspiciatis amet. Totam facere est voluptatem accusantium id reprehenderit.</p><p>Ducimus exercitationem sunt pariatur voluptatem. Aut quia omnis sit et. Quisquam totam vitae debitis adipisci qui debitis qui.</p><p>Ut tenetur dolore non. Repellat id quo modi. Voluptate voluptates sed sed. Placeat sed fugit sed maxime quia deleniti laborum explicabo.</p><p>Laborum consequatur rerum tempora suscipit consequatur. Expedita harum debitis et molestiae. Qui quia dolores quo sint dolorum magni.</p><p>Earum et quo ducimus iste rerum. Ipsam fugiat ut sit hic omnis. Molestiae voluptas corporis hic quod.</p>', 0, NULL, '2023-12-10 12:07:04', '2023-12-10 12:07:04'),
	(6, 5, 'Facilis minima alias necessitatibus dolorum.', 'praesentium-ullam-non-necessitatibus-omnis-consectetur-optio-dolores-at', '<p>Dolorum ea sint accusantium numquam. Asperiores accusamus aspernatur eaque minus. Atque iusto enim eum reiciendis assumenda ea aut est. Nisi sapiente dicta omnis non ea consequatur.</p><p>Sit ipsam est aut debitis aut. Maxime perferendis esse quaerat debitis. Ducimus sed et corrupti vel ipsum.</p><p>Doloribus laboriosam illum omnis tempora voluptatem nihil. Sunt rem quo nisi.</p><p>Rerum voluptatibus odio nihil et consequatur sed. Recusandae quidem illum et non incidunt exercitationem in doloremque. Nam voluptatem eum quis doloribus a temporibus. Fugit delectus ipsum quod minima.</p><p>Est quidem dolorum sequi distinctio. Dolore atque velit minus earum. Qui consectetur at aut a qui blanditiis.</p>', 0, NULL, '2023-12-10 12:07:04', '2023-12-10 12:07:04'),
	(7, 2, 'Dolore laboriosam rem placeat culpa nostrum et ut quo quia.', 'provident-maxime-occaecati-iste-repellendus-pariatur-libero-rerum', '<p>Ratione et hic atque eius ullam totam. Ipsum id deserunt autem sapiente veritatis rerum. Possimus aut placeat consequuntur debitis.</p><p>Molestiae error dolorem itaque voluptatum quis. Odio assumenda consectetur quisquam.</p><p>Ab quia cum assumenda accusantium praesentium rem eligendi. Recusandae eum ut odio omnis. Voluptas aliquam eum iste amet suscipit.</p><p>Non odio dolorum autem et corporis sit id. Dolores voluptas aut corporis eligendi. Aperiam qui voluptas dolorem aperiam amet sed enim maxime. Eum animi hic accusamus odio modi iure voluptates. Necessitatibus exercitationem recusandae enim rerum repellat.</p><p>Quod vero impedit debitis et et corrupti molestiae. Culpa rem nisi dolorem earum non quidem. Dolorem quisquam culpa molestiae sed doloribus debitis.</p>', 0, NULL, '2023-12-10 12:07:04', '2023-12-10 12:07:04'),
	(8, 3, 'Voluptas quas autem.', 'aut-corrupti-nihil-dolore-inventore-repellat', '<p>Nihil maxime sequi dolorum inventore odit sed. Eligendi repellat qui vitae. Occaecati et dolorem occaecati nobis corrupti.</p><p>Delectus ut reiciendis consectetur vel autem ad occaecati. Sequi saepe dolorum vero excepturi. Quia odio veniam ut odio sequi aut sit.</p><p>Officia deserunt ducimus a. Quo sunt modi distinctio corrupti quo sed ipsam. Nihil omnis suscipit quisquam dolore laborum.</p><p>Dolor id fugiat omnis unde totam. Quos facere sit ut vel exercitationem rerum. Molestiae pariatur adipisci pariatur fugit temporibus blanditiis error.</p><p>Tenetur laboriosam et expedita vel ratione ut. Qui et vel est repellat consequuntur. Amet quia sint quas ipsa. Eos ab non exercitationem quia suscipit.</p><p>Vero eos dicta molestiae rerum. Repellat eius quis doloribus sed sequi. Dolorem non eum officia tempora atque quos sapiente. Dolorum sed quia eos dolor.</p>', 0, NULL, '2023-12-10 12:07:04', '2023-12-10 12:07:04'),
	(9, 1, 'Id et aliquid.', 'qui-quisquam-qui-tempora-reiciendis-quia-ut-aut', '<p>Repellat eligendi amet dolorem est. Perferendis quas illum rerum ipsam et cumque voluptates.</p><p>Numquam sunt ea cumque illo inventore nobis ut. Voluptatem enim et excepturi quos ex nulla quia. Est numquam minus aliquid.</p><p>Sequi aut nesciunt ullam voluptate nihil rerum. Ullam totam et doloremque est saepe numquam magni. Hic illo quisquam doloremque officia libero quas nam. Ut et omnis corrupti perspiciatis explicabo velit.</p><p>Quis nobis et doloribus sint totam et deserunt. Quasi maiores et velit inventore id commodi impedit. Est aut et consequatur modi voluptatem.</p><p>Et suscipit molestiae amet velit animi debitis. Ex repellendus maiores commodi non omnis. Praesentium nihil blanditiis delectus expedita mollitia. Dolor voluptatem dolores culpa voluptas voluptas et et ut.</p><p>Distinctio asperiores consequuntur sequi corporis aut quia. Quaerat deserunt maxime ut non. Suscipit ut autem temporibus praesentium aspernatur cumque reiciendis quod. Facilis deserunt occaecati aliquam odit earum.</p><p>Est delectus doloremque architecto corporis doloremque eum quia officia. Nulla nesciunt repellendus ut mollitia qui eius. Iusto veritatis quia consequatur recusandae. Corporis qui eligendi magni deleniti aliquid voluptates quae. Laborum tenetur voluptas neque.</p><p>Officia quod voluptatibus similique totam laborum harum. Itaque perspiciatis autem odio nostrum eveniet. Numquam est iusto in sequi aspernatur eos quo.</p><p>Impedit libero et temporibus quidem nulla excepturi. Ullam atque aliquam facilis qui et et. A et expedita non consequatur aliquam eos. Rerum facere ut eum quaerat porro ipsam eius. Natus doloremque voluptatem cum cupiditate voluptatem.</p><p>Consequatur ea recusandae inventore porro. Quia aut id voluptatum totam omnis aperiam aut nemo.</p>', 0, NULL, '2023-12-10 12:07:04', '2023-12-10 12:07:04'),
	(10, 4, 'Error saepe eaque.', 'fugit-quisquam-similique-dolores-tenetur-assumenda', '<p>Et molestias ea commodi et sapiente temporibus minus aspernatur. Cumque qui magnam pariatur iure deserunt voluptatibus quo nostrum. Dolor voluptatem laboriosam perspiciatis aut. Eveniet velit neque id consequatur.</p><p>Iure ut architecto porro distinctio. Reprehenderit dolores et dolor sed rem. Molestias eveniet voluptatibus impedit officia.</p><p>Dignissimos sed cum quod aperiam nam est ea. Sunt culpa illo est numquam. Et facilis temporibus atque asperiores. Et et quasi numquam velit vero veniam.</p><p>Nemo sed aut dicta qui eligendi. Et ut inventore dolor aperiam. Accusamus praesentium expedita pariatur totam consectetur fuga recusandae quisquam.</p><p>Magni quia aliquid et dolorem. Possimus doloremque quos fugit. Molestiae et impedit nemo nesciunt.</p>', 0, NULL, '2023-12-10 12:07:04', '2023-12-10 12:07:04');

-- Dumping structure for table db_glamgroove.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_glamgroove.users: ~10 rows (approximately)
REPLACE INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Sadye Beahan III', 'jaquan.zboncak', 'kling.ryley@example.net', '2023-12-10 12:07:02', '$2y$12$tzY28WZkMuUU0uGVy.y5u.9UvZ.Ztgbg4OSHgvvNfYoUvn3/yH74a', 'WYnHB0BL6u', '2023-12-10 12:07:03', '2023-12-10 12:07:03'),
	(2, 'Maiya Hoppe', 'tressie07', 'huels.anika@example.net', '2023-12-10 12:07:03', '$2y$12$tzY28WZkMuUU0uGVy.y5u.9UvZ.Ztgbg4OSHgvvNfYoUvn3/yH74a', '49pd3caKf2', '2023-12-10 12:07:03', '2023-12-10 12:07:03'),
	(3, 'Alphonso Stamm', 'larissa19', 'syost@example.net', '2023-12-10 12:07:03', '$2y$12$tzY28WZkMuUU0uGVy.y5u.9UvZ.Ztgbg4OSHgvvNfYoUvn3/yH74a', 'ijnFkmN214', '2023-12-10 12:07:03', '2023-12-10 12:07:03'),
	(4, 'Mr. Royal Considine II', 'kcollins', 'octavia84@example.com', '2023-12-10 12:07:03', '$2y$12$tzY28WZkMuUU0uGVy.y5u.9UvZ.Ztgbg4OSHgvvNfYoUvn3/yH74a', 'xGEfaBk7ih', '2023-12-10 12:07:03', '2023-12-10 12:07:03'),
	(5, 'Prof. Guadalupe Funk Jr.', 'ashley25', 'rgleichner@example.com', '2023-12-10 12:07:03', '$2y$12$tzY28WZkMuUU0uGVy.y5u.9UvZ.Ztgbg4OSHgvvNfYoUvn3/yH74a', 'vibRnSSOTz', '2023-12-10 12:07:03', '2023-12-10 12:07:03'),
	(6, 'Micheal Schuppe', 'ccrist', 'qullrich@example.net', '2023-12-10 12:07:03', '$2y$12$tzY28WZkMuUU0uGVy.y5u.9UvZ.Ztgbg4OSHgvvNfYoUvn3/yH74a', 'kxx6ddOI7H', '2023-12-10 12:07:03', '2023-12-10 12:07:03'),
	(7, 'Tina Jerde', 'antonio94', 'mayer.camryn@example.com', '2023-12-10 12:07:03', '$2y$12$tzY28WZkMuUU0uGVy.y5u.9UvZ.Ztgbg4OSHgvvNfYoUvn3/yH74a', 'GiWaIq3oyk', '2023-12-10 12:07:03', '2023-12-10 12:07:03'),
	(8, 'Dr. Stanley Corkery V', 'michale96', 'aletha60@example.org', '2023-12-10 12:07:03', '$2y$12$tzY28WZkMuUU0uGVy.y5u.9UvZ.Ztgbg4OSHgvvNfYoUvn3/yH74a', 'fiKM7VX7Ef', '2023-12-10 12:07:03', '2023-12-10 12:07:03'),
	(9, 'Minerva Howell II', 'jcummerata', 'abrown@example.net', '2023-12-10 12:07:03', '$2y$12$tzY28WZkMuUU0uGVy.y5u.9UvZ.Ztgbg4OSHgvvNfYoUvn3/yH74a', 'tN2f22yid2', '2023-12-10 12:07:03', '2023-12-10 12:07:03'),
	(10, 'Baron Trantow', 'xokuneva', 'esther.greenfelder@example.com', '2023-12-10 12:07:03', '$2y$12$tzY28WZkMuUU0uGVy.y5u.9UvZ.Ztgbg4OSHgvvNfYoUvn3/yH74a', 'BpRW7fdDtu', '2023-12-10 12:07:03', '2023-12-10 12:07:03');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
