CREATE TABLE `mailing_list`(
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`client_id` INT(11) NOT NULL,
	`first_name` VARCHAR(256) NOT NULL,
	`last_name` VARCHAR(256) NOT NULL,
	`email` VARCHAR(256) NOT NULL,
	`offer` INT(11) NULL,
	PRIMARY KEY (`id`) 
) ENGINE=InnoDB;