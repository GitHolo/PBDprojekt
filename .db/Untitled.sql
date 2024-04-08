CREATE TABLE `customers` (
  `customer_ID` INT(255) PRIMARY KEY NOT NULL,
  `name` VARCHAR(50) NOT NULL,
  `surname` VARCHAR(50) NOT NULL,
  `address` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(15) NOT NULL
);

CREATE TABLE `employees` (
  `employee_ID` INT(255) PRIMARY KEY NOT NULL,
  `name` VARCHAR(50) NOT NULL,
  `surname` VARCHAR(50) NOT NULL,
  `position_ID` INT(50) NOT NULL,
  `address` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(15) NOT NULL,
  `hireDate` DATE NOT NULL DEFAULT (current_timestamp()),
  `hourPay` DECIMAL(10,2) NOT NULL
);

CREATE TABLE `ids` (
  `user_ID` INT(255) NOT NULL,
  `customer_ID` INT(255) DEFAULT null,
  `employee_ID` INT(255) DEFAULT null
);

CREATE TABLE `items` (
  `item_ID` INT(255) PRIMARY KEY NOT NULL,
  `name` VARCHAR(50) NOT NULL,
  `price` DECIMAL(10,2) NOT NULL
);

CREATE TABLE `jobs` (
  `position_ID` INT(255) PRIMARY KEY NOT NULL,
  `jobName` VARCHAR(100) NOT NULL
);

CREATE TABLE `login` (
  `user_ID` INT(255) PRIMARY KEY NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  `createDate` DATETIME NOT NULL DEFAULT (current_timestamp())
);

CREATE TABLE `orderdetails` (
  `order_ID` INT(255) NOT NULL,
  `item_ID` INT(255) NOT NULL,
  `amount` INT(10) NOT NULL
);

CREATE TABLE `orders` (
  `order_ID` BIGINT(255) PRIMARY KEY NOT NULL,
  `customer_ID` INT(255) NOT NULL,
  `employee_ID` INT(255) NOT NULL,
  `table_ID` INT(255) NOT NULL,
  `orderDate` DATETIME NOT NULL DEFAULT (current_timestamp()),
  `reservation` DATETIME NOT NULL,
  `completion` TINYINT(1) DEFAULT null
);

CREATE TABLE `tables` (
  `table_ID` INT(255) PRIMARY KEY NOT NULL,
  `seats` INT(10) NOT NULL
);

ALTER TABLE `customers` ADD FOREIGN KEY (`customer_ID`) REFERENCES `ids` (`customer_ID`);

ALTER TABLE `employees` ADD FOREIGN KEY (`employee_ID`) REFERENCES `ids` (`employee_ID`);

ALTER TABLE `employees` ADD FOREIGN KEY (`position_ID`) REFERENCES `jobs` (`position_ID`);

ALTER TABLE `customers` ADD FOREIGN KEY (`customer_ID`) REFERENCES `orders` (`customer_ID`);

ALTER TABLE `employees` ADD FOREIGN KEY (`employee_ID`) REFERENCES `orders` (`employee_ID`);

ALTER TABLE `tables` ADD FOREIGN KEY (`table_ID`) REFERENCES `orders` (`table_ID`);

ALTER TABLE `orderdetails` ADD FOREIGN KEY (`order_ID`) REFERENCES `orders` (`order_ID`);

ALTER TABLE `items` ADD FOREIGN KEY (`item_ID`) REFERENCES `orderdetails` (`item_ID`);

ALTER TABLE `ids` ADD FOREIGN KEY (`user_ID`) REFERENCES `login` (`user_ID`);
