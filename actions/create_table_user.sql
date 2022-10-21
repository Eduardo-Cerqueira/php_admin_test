CREATE TABLE
  `users` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `username` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `created_at` varchar(255) NOT NULL DEFAULT current_timestamp(),
    `updated_at` varchar(255) NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`)
  )