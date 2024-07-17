ALTER TABLE `agahi` 
ADD `agahi_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY AFTER `image`, 
ADD `company_name` VARCHAR(200) NOT NULL AFTER `agahi_id`, 
ADD `work_experience` VARCHAR(30) NOT NULL AFTER `company_name`, 
ADD `reward` VARCHAR(200) NOT NULL AFTER `work_experience`, 
ADD `business_travel` VARCHAR(200) NOT NULL AFTER `reward`, 
ADD UNIQUE (`company_name`);
