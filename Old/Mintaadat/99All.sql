INSERT INTO `school` (`name`) VALUES
('Nagypeterdi Általános Iskola'),
('Alternatíva Általános Iskola, Gimnázium és Szakképző Iskola'),
('Teszt Iskola1'),
('Teszt Iskola2'),
('Teszt Iskola3'),
('Teszt Iskola4');

INSERT INTO `county` (`name`) VALUES
('Bács-Kiskun'),
('Baranya'),
('Békés'),
('Borsod-Abaúj-Zemplén'),
('Csongrád-Csanád'),
('Fejér'),
('Győr-Moson-Sopron'),
('Hajdú-Bihar'),
('Heves'),
('Jász-Nagykun-Szolnok'),
('Komárom-Esztergom'),
('Nógrád'),
('Pest'),
('Somogy'),
('Szabolcs-Szatmár-Bereg'),
('Tolna'),
('Vas'),
('Veszprém'),
('Zala'),
('Budapest');

INSERT INTO `files` (`PATH`) VALUES
('');

INSERT INTO `subject` (`name`) VALUES
('Mindegy'),
('Kémia'),
('Matematika'),
('Idegen nyelv'),
('Biológia'),
('Földrajz'),
('Történelem'),
('Irodalom'),
('Nyelvtan'),
('Erkölcstan'),
('Hittan'),
('Környezetismeret'),
('Ének-zene'),
('Vizuális kultúra'),
('Technika'),
('Dráma és tánc'),
('Informatika'),
('Társadalmi és állampolgári imeretek'),
('Hon- és népismeret'),
('Természetismeret'),
('Fizika'),
('Kémia'),
('Etika'),
('Mozgóképkultúra és médiaismeret'),
('Művészetek'),
('Filozófia');

INSERT INTO `users` (`email`, `password`, `class_from`, `class_to`, `school_ID`, `name`, `county_ID`, `file_ID`, `created_at`, `updated_at`, `api_token`) VALUES
('kis.miki@gmail.com', '$2y$10$QC8.AidSXXMbQUMczJ4eSOSwIqLm3RKUwSig6yt8el5gWGPuZpq3C', '1', '4', '1', 'Kis Miklós', '2', '1', '2022-03-08 18:03:19', '2022-03-08 18:03:19', '1'), /*jelszo12345*/
('nagyandrea@yahoo.com', '$2y$10$eQxXRot.48gzyqohBplcN.nujBG45NUxk4tw0M/z5mgCd/8zp4So6', '1', '8', '1', 'Nagy Andrea', '2', '1', '2022-03-08 18:03:19', '2022-03-08 18:03:19', '2'), /*semmi*/
('pap.gizella@citromail.hu', '$2y$10$ib9xtkScB8fgNjrjdmgXlO1Oz5J/ChlR6wM9pd4YcTJRJDWHPSCWy', '5', '8', '1', 'Kovácsné Gizella', '2', '1', '2022-03-08 18:03:19', '2022-03-08 18:03:19', '3'), /*ugysejosszra*/
('abelarengetegben@gmail.com', '$2y$10$iIcZH3/bL1qFdpH4Nquyp./787G3/W9llVj66lkwE8hW5v00Zomje', '9', '12', '2', 'Gál Ábel', '4', '1', '2022-03-08 18:03:19', '2022-03-08 18:03:19', '4'), /*qwert*/
('eszembence@gmail.com', '$2y$10$muXqmnHGRZq98DwhmIWLWOncAg1HNL1tUTXGEHgsrpTn9hkRFrhbu', '1', '4', '2', 'Egyed Bence', '4', '1', '2022-03-08 18:03:19', '2022-03-08 18:03:19', '5'), /*akarmi*/
('edes.csengi@yahoo.com', '$2y$10$PFtBu8.RTuKEx5kSNbSJhOKkMfwCbA8QhGw1QFoDeOR44mEbtemKq', '1', '8', '3', 'Soós Csenge', '20', '1', '2022-03-08 18:03:19', '2022-03-08 18:03:19','6'), /*121212*/
('sos.mogyi@gmail.com', '$2y$10$4b6XYzTErGRg3vNYzLm5MuuuPFyETE8mOHtOG8ZkiZ5T0j9fKXW8y', '5', '8', '4', 'Somogyi Gabriella', '20', '1', '2022-03-08 18:03:19', '2022-03-08 18:03:19', '7'), /*asdasdasd*/
('kende75@gmail.com', '$2y$10$iE22j0qMH3uZFpFsBnAVjueuuL/diq4E/3s2bUCwpwecUiwEI8Zky', '9', '12', '4', 'Kende Martina', '20', '1', '2022-03-08 18:03:19', '2022-03-08 18:03:19', '8'), /*1qa2ws3ed*/
('szabo.zsuzsi.80@citromail.hu', '$2y$10$t7RZSjic47IyyQjM4f4No.e24PDfj6sOdXZtBQ0qPLukhhEFKbJYy', '7', '8', '5', 'Szabó Zsuzsanna', '20', '1', '2022-03-08 18:03:19', '2022-03-08 18:03:19','9'), /*987654321*/
('fa.soma.tamas@gmail.com', '$2y$10$s5nw5S87M6C1jsCW.UuvGuW89gIPVmvgZPh6Zcwh4N48tPY1jDZJi', '7', '8', '6', 'Tamás Soma', '20', '1', '2022-03-08 18:03:19', '2022-03-08 18:03:19', '10'); /*valami*/

INSERT INTO `post` (`user_ID`, `text`, `title`, `class`, `file_ID`, `subject_ID`, `created_at`, `updated_at`) VALUES
(1, 'Hello, én vagyok Kis Miklós, és ez egy Angol jegyzet, negyedikeseknek.', 'mintacím1', 4, 1, 4, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(1, 'Hello, én vagyok Kis Miklós, és ez egy Angol jegyzet, negyedikeseknek.', 'mintacím1', 4, 1, 4, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(1, 'Hello, én vagyok Kis Miklós, és ez egy Angol jegyzet, negyedikeseknek.', 'mintacím1', 4, 1, 4, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(1, 'Hello, én vagyok Kis Miklós, és ez egy Angol jegyzet, negyedikeseknek.', 'mintacím1', 4, 1, 4, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(1, 'Hello, én vagyok Kis Miklós, és ez egy Angol jegyzet, negyedikeseknek.', 'mintacím1', 4, 1, 4, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(1, 'Hello, én vagyok Kis Miklós, és ez egy Angol jegyzet, negyedikeseknek.', 'mintacím1', 4, 1, 4, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(1, 'Hello, én vagyok Kis Miklós, és ez egy Angol jegyzet, negyedikeseknek.', 'mintacím1', 4, 1, 4, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(1, 'Hello, én vagyok Kis Miklós, és ez egy Angol jegyzet, negyedikeseknek.', 'mintacím1', 4, 1, 4, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(1, 'Hello, én vagyok Kis Miklós, és ez egy Angol jegyzet, negyedikeseknek.', 'mintacím1', 4, 1, 4, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(1, 'Hello, én vagyok Kis Miklós, és ez egy Angol jegyzet, negyedikeseknek.', 'mintacím1', 4, 1, 4, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(1, 'Hello, én vagyok Kis Miklós, és ez egy Német jegyzet, harmadikosoknak.', 'mintacím2', 3, 1, 5, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(2, 'Hello, én vagyok Nagy Andrea, és ez egy Matematika jegyzet, hetedikeseknek.', 'mintacím3', 7, 1, 3, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(2, 'Hello, én vagyok Nagy Andrea, és ez egy Matematika jegyzet, nyolcadikosoknak.', 'mintacím4', 8, 1, 3, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(3, 'Hello, én vagyok Kovácsné Gizella, és ez egy Történelem jegyzet, ötödikeseknek.', 'mintacím5', 5, 1, 7, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(4, 'Hello, én vagyok akárki, és ez egy Angol jegyzet, negyedikeseknek.', 'mintacím6', 4, 1, 4, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(5, 'Hello, én vagyok akárki, és ez egy Német jegyzet, harmadikosoknak.', 'mintacím7', 3, 1, 5, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(6, 'Hello, én vagyok akárki, és ez egy Matematika jegyzet, hetedikeseknek.', 'mintacím8', 7, 1, 3, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(7, 'Hello, én vagyok akárki, és ez egy Matematika jegyzet, nyolcadikosoknak.', 'mintacím9', 8, 1, 3, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(8, 'Hello, én vagyok akárki, és ez egy Történelem jegyzet, ötödikeseknek.', 'mintacím10', 5, 1, 7, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(9, 'Hello, én vagyok akárki, és ez egy Angol jegyzet, negyedikeseknek.', 'mintacím11', 4, 1, 4, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(10, 'Hello, én vagyok akárki, és ez egy Német jegyzet, harmadikosoknak.', 'mintacím12', 3, 1, 5, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(2, 'Hello, én vagyok Nagy Andrea, és ez egy Matematika jegyzet, hetedikeseknek.', 'mintacím13', 7, 1, 3, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(2, 'Hello, én vagyok Nagy Andrea, és ez egy Matematika jegyzet, nyolcadikosoknak.', 'mintacím14', 8, 1, 3, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(3, 'Hello, én vagyok Kovácsné Gizella, és ez egy Történelem jegyzet, ötödikeseknek.', 'mintacím15', 5, 1, 7, '2022-03-08 18:03:19', '2022-03-08 18:03:19');

INSERT INTO `post_like` (`post_ID`, `user_ID`, `created_at`, `updated_at`) VALUES
(1, 4, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(1, 5, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(1, 6, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(2, 4, '2022-03-08 18:03:19', '2022-03-08 18:03:19');

INSERT INTO `comment` (`post_ID`, `user_ID`, `text`, `created_at`, `updated_at`) VALUES
(1, 4, 'Ez egy nagyon jó jegyzet', '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(1, 5, 'Ez egy jó jegyzet, annyit javítanék, hogy...', '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(2, 4, 'Mintakomment', '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(1, 4, 'Ez egy nagyon jó jegyzet', '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(1, 5, 'Ez egy jó jegyzet, annyit javítanék, hogy...', '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(2, 4, 'Mintakomment', '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(1, 4, 'Ez egy nagyon jó jegyzet', '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(1, 5, 'Ez egy jó jegyzet, annyit javítanék, hogy...', '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(2, 4, 'Mintakomment', '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(1, 4, 'Ez egy nagyon jó jegyzet', '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(1, 5, 'Ez egy jó jegyzet, annyit javítanék, hogy...', '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(2, 4, 'Mintakomment', '2022-03-08 18:03:19', '2022-03-08 18:03:19');

INSERT INTO `user_subject_lookup` (`user_ID`, `subject_ID`) VALUES
(1, 4),
(1, 5),
(2, 3),
(3, 7),
(4, 4),
(4, 5),
(5, 4),
(6, 4),
(7, 8),
(8, 8),
(9, 8),
(10, 8);

INSERT INTO `comment_like` (`comment_ID`, `user_ID`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(2, 1, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(3, 1, '2022-03-08 18:03:19', '2022-03-08 18:03:19'),
(1, 5, '2022-03-08 18:03:19', '2022-03-08 18:03:19');
