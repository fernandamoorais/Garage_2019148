CREATE TABLE `Payment` (
  `payment_ID` INTEGER,
  `serv_ordem` INTEGER(15),
  `payment_parts` DECIMAL(10,2),
  `paymentt_serv` DECIMAL(10,2),
  `payment_amount` DECIMAL(10,2),
  `payment_date` DATE,
  `other details` VARCHAR(300),
  PRIMARY KEY (`payment_ID`),
  KEY `FK` (`serv_ordem`),
  KEY `Key` (`payment_parts`, `paymentt_serv`, `payment_amount`, `payment_date`, `other details`)
);

CREATE TABLE `Service` (
  `serv_ordeR` INTEGER(15),
  `service_ID` INTEGER(5),
  `vehicle_license` VARCHAR(15),
  `service_name` VARCHAR(15),
  `price` NUMERIC(19,0),
  `hours_serv` INTERGER(2),
  `service_comments` VARCHAR(300),
  PRIMARY KEY (`serv_ordeR`, `service_ID`),
  KEY `FK` (`vehicle_license`),
  KEY `Key` (`service_name`, `price`, `hours_serv`, `service_comments`)
);

CREATE TABLE `Identify` (
  `login_user_ID` INTEGER(10),
  `login_staff_ID` INTEGER(4),
  `login_adm_ID` INTEGER(4),
  `password` VARCHAR(70),
  `last_login` DATETIME,
  `is_Login_adm_ID` ENUM('1','0'),
  `is_Login_user_ID` ENUM('1','0'),
  `is_Login_staff_ID` ENUM('1','0') ,
  KEY `FK` (`login_user_ID`, `login_staff_ID`, `login_adm_ID`, `password`),
  KEY `Key` (`last_login`, `is_Login_adm_ID`, `is_Login_user_ID`, `is_Login_staff_ID`)
);

CREATE TABLE `Product` (
  `product_ID` INTEGER(5),
  `reference` TiNYTEXT,
  `name_part` VARCHAR(25),
  `quantity` INTEGER,
  `price` DECIMAL(10,2),
  `stockable` BOOLEAN,
  PRIMARY KEY (`product_ID`),
  KEY `Key` (`reference`, `name_part`, `quantity`, `price`, `stockable`)
);

CREATE TABLE `User` (
  `password` VARCHAR(70),
  `login_user_ID` INTEGER(10),
  `e-mail` VARCHAR(100),
  `first_name` VARCHAR(15),
  `last_name` VARCHAR(30),
  `phone[0]: phoneNumber (phoneType) (number)` VARCHAR(30),
  `DOB` DATE,
  `adress_line1` VARCHAR(50),
  `adress_line2` VARCHAR(50),
  `post_code` VARCHAR(15),
  PRIMARY KEY (`password`, `login_user_ID`),
  KEY `Key` (`e-mail`, `first_name`, `last_name`, `phone[0]: phoneNumber (phoneType) (number)`, `DOB`, `adress_line1`, `adress_line2`, `post_code`)
);

CREATE TABLE `Staff` (
  `e-mail` VARCHAR(100),
  `login_staff_ID` INTEGER(10),
  `first_name` VARCHAR(15),
  `last_name` VARCHAR(30),
  `DOB` DATE,
  `start_date` DATE,
  `end_date` DATE,
  `role` VARCHAR(15),
  `salary` NUMERIC(19,0),
  `daily_hours` INTEGER,
  PRIMARY KEY (`e-mail`, `login_staff_ID`),
  KEY `Key` (`first_name`, `last_name`, `DOB`, `start_date`, `end_date`, `role`, `salary`, `daily_hours`)
);

CREATE TABLE `ADM` (
  `login_staff_ID` INTEGER(4),
  `password` VARCHAR(70),
  `e-mail` VARCHAR(100),
  PRIMARY KEY (`login_staff_ID`, `password`),
  KEY `Key` (`e-mail`)
);

CREATE TABLE `Supplier` (
  `supplier_ID` INTEGER,
  `supplier_name` VARCHAR(45),
  `supplier_phone` INTEGER,
  `supplier_info` VARCHAR(200),
  PRIMARY KEY (`supplier_ID`),
  KEY `Key` (`supplier_name`, `supplier_phone`, `supplier_info`)
);

CREATE TABLE `Product_order` (
  `product_ID` INTEGER,
  `serv_order` INTEGER,
  `quantity` INTEGER,
  `price` DECIMAL(10,2),
  `ordered_at` DATETIME,
  KEY `FK` (`product_ID`, `serv_order`),
  KEY `Key` (`quantity`, `price`, `ordered_at`)
);

CREATE TABLE `Supplying` (
  `suppllier_ID` INTEGER,
  `product_ID` INTEGER,
  `quantity` INTEGER,
  `price` DECIMAL(10,2),
  `ordered_at` DATATIME,
  `arrives_at` DATATIME,
  `arrived` BOOLEAN,
  KEY `FK` (`suppllier_ID`, `product_ID`),
  KEY `Key` (`quantity`, `price`, `ordered_at`, `arrives_at`, `arrived`)
);

CREATE TABLE `Vehicle` (
  `vehicle_lincense` VARCHAR(15),
  `login_user_ID` INTEGER(10),
  `vehicle_type` VARCHAR(15),
  `vehicle_year` DATE,
  `vehicle_color` VARCHAR(10),
  `vehicle_engine` VARCHAR(15),
  `vehicle_make` VARCHAR(25),
  PRIMARY KEY (`vehicle_lincense`),
  KEY `FK` (`login_user_ID`),
  KEY `Key` (`vehicle_type`, `vehicle_year`, `vehicle_color`, `vehicle_engine`, `vehicle_make`)
);

CREATE TABLE `Ref_Booking _Status` (
  `status` VARCHAR(15),
  `status_description` VARCHAR(100),
  PRIMARY KEY (`status`),
  KEY `Key` (`status_description`)
);

CREATE TABLE `Stock` (
  `stock_ID` INTEGER,
  `product_id` INTEGER,
  `quantity` INTEGER,
  `update_at` DATETIME,
  PRIMARY KEY (`stock_ID`, `product_id`),
  KEY `Key` (`quantity`, `update_at`)
);

CREATE TABLE `Booking` (
  `booking_ID` INT,
  `status` VARCHAR(15),
  `booking_date` DATE,
  `other _details` VARCHAR(100),
  PRIMARY KEY (`booking_ID`),
  KEY `FK` (`status`),
  KEY `Key` (`booking_date`, `other _details`)
);

