--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id`, `name`) VALUES
(1, 'Акустическая гитара');

-- --------------------------------------------------------

--
-- Table structure for table `characteristic`
--

CREATE TABLE `characteristic` (
  `id` int NOT NULL,
  `orientation` varchar(50) NOT NULL,
  `num_strings` varchar(50) NOT NULL,
  `dreadnought_guitar` varchar(50) NOT NULL,
  `case_shape` varchar(50) NOT NULL,
  `top_deck` varchar(50) NOT NULL,
  `coating` varchar(50) NOT NULL,
  `bottom_and_sides` varchar(50) NOT NULL,
  `vulture` varchar(50) NOT NULL,
  `fretboard_and_nut` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `characteristic`
--

INSERT INTO `characteristic` (`id`, `orientation`, `num_strings`, `dreadnought_guitar`, `case_shape`, `top_deck`, `coating`, `bottom_and_sides`, `vulture`, `fretboard_and_nut`, `description`) VALUES
(1, 'Правосторонние', '6-струнные', 'Да', 'Дредноут с вырезом или фолк', 'Агатис', 'Фактура дерева', 'Сапеле', 'Махагони', 'Древесно-полимерный композит', 'Акустическая гитара фолк, цвет черный\r\n\r\nОсобенности:\r\n- Удобный профиль грифа -идеально для обучения\r\n- Анкерный стержень -возможность регулировки грифа\r\n- Анкерный ключ в комплекте\r\n- Накладка на гриф устойчива к перепадам влажности - надежнее стандартных накладок\r\n- Надежные колки закрытого типа\r\n–прослужат долго и точно\r\n'),
(2, 'Правосторонние', '6-струнные', 'Да', 'Дредноут', 'Массив красного кедра', 'Глянцевое', 'Африканское сапеле', 'Тропическая кайя', 'Браунвуд', 'Линейка 118 обладает самым широким модельным рядом и разнообразной палитрой цветов, что помогает удовлетворить любые требования музыкантов в поисках универсального инструмента. Сочетание красного кедра и африканского сапеле LAG GLA T118D-BLK обеспечивает теплое, глубокое и сбалансированное звучание инструмента. Данная модель представлена в черном цвете.\r\n\r\nВсе гитары LAG имеют стильный фирменный дизайн. Как знак соединения с Францией и ее историей, гитары LAG носят окситанский крест, вплетенный в розетку.'),
(3, 'Правосторонние', '6-струнные', 'Да', 'Дредноут', 'Ель', 'Глянцевое', 'Африканское сапеле', 'Махагон', 'Палисандр', 'Dean AX PDY - комплект акустическая гитара и аксессуары, цвет санбёрст.');

-- --------------------------------------------------------

--
-- Table structure for table `guitar`
--

CREATE TABLE `guitar` (
  `id` int NOT NULL,
  `id_catalog` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `id_characteristic` int NOT NULL,
  `amount` int NOT NULL,
  `price` int NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `guitar`
--

INSERT INTO `guitar` (`id`, `id_catalog`, `name`, `id_characteristic`, `amount`, `price`, `image`) VALUES
(1, 1, 'Rockdale Aurora D1CN ', 1, 20, 8899, 'guitar_1.jpg'),
(2, 1, 'Rockdale Folk Novel F1BK', 1, 107, 9700, 'guitar_2.jpg'),
(3, 1, 'Lag T-118D BLK', 2, 76, 46450, 'guitar_3.jpg'),
(4, 1, 'Dean AX PDY TSB PK', 3, 98, 36397, 'guitar_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'Sam', '123'),
(2, 'Mary', 'Mary123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `characteristic`
--
ALTER TABLE `characteristic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guitar`
--
ALTER TABLE `guitar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_catalog` (`id_catalog`),
  ADD KEY `id_characteristic` (`id_characteristic`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `characteristic`
--
ALTER TABLE `characteristic`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `guitar`
--
ALTER TABLE `guitar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guitar`
--
ALTER TABLE `guitar`
  ADD CONSTRAINT `guitar_ibfk_1` FOREIGN KEY (`id_catalog`) REFERENCES `catalog` (`id`),
  ADD CONSTRAINT `guitar_ibfk_2` FOREIGN KEY (`id_characteristic`) REFERENCES `characteristic` (`id`);
COMMIT;
