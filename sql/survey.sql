--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(30) NOT NULL,
  `last_name` VARCHAR(40) NOT NULL,
  `age` int(11) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` VARCHAR(55) NOT NULL,
  `location` INT(11) NOT NULL,
  `frequency` INT(11) NOT NULL,
  `stylist` INT(11) NOT NULL,
  `salon` INT(11) NOT NULL,
  `other_salon` INT(11) NULL,
  `cut_spend` INT(11) NOT NULL,
  `colour_spend` INT(11) NOT NULL,
  `stylist_skill` INT(11) NOT NULL,
  `friendliness` INT(11) NOT NULL,
  `price` INT(11) NOT NULL,
  `customer_service` INT(11) NOT NULL,
  `environment` INT(11) NOT NULL,
  `convenience` INT(11) NOT NULL,
  `reputation` INT(11) NOT NULL,
  `end_result` INT(11) NOT NULL,
  `poor_service` INT(11) NOT NULL,
  `comp_offer` INT(11) NOT NULL,
  `hygiene` INT(11) NOT NULL,
  `boredom` INT(11) NOT NULL,
  `products` INT(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;


