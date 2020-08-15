CREATE TABLE `Payment` (
  `payment_ID` INTEGER,
  `serv_ordem` INTEGER(15),
  `payment_parts` DECIMAL(10,2),
  `Invoice` INTEGER(15),
  `paymentt_serv` DECIMAL(10,2),
  `payment_amount` DECIMAL(10,2),
  `payment_date` DATE,
  `other details` VARCHAR(300),
  PRIMARY KEY (`payment_ID`),
  KEY `Key` (`payment_parts`, `Invoice`, `paymentt_serv`, `payment_amount`, `payment_date`, `other details`)
);

CREATE TABLE `service` (
  `invoice` INTEGER(15),
  `service_ID` INTEGER(5),
  `vehicle_license` VARCHAR(15),
  `service_name` VARCHAR(15),
  `service_price` NUMERIC(19,0),
  `service_comments` VARCHAR(300),
  PRIMARY KEY (`invoice`, `service_ID`),
  KEY `Key` (`service_name`, `service_price`, `service_comments`)
);

CREATE TABLE `Identify` (
  `user_ID` INTEGER(10),
  `staff_ID` INTEGER(4),
  `ladm_ID` INTEGER(4),
  `password` VARCHAR(70),
  `password2` VARCHAR(70),
  `last_login` DATETIME,
  `is_adm_ID` ENUM('1','0'),
  `is_user_ID` ENUM('1','0'),
  `is_staff_ID` ENUM('1','0') ,
  KEY `Key` (`password2`, `last_login`, `is_adm_ID`, `is_user_ID`, `is_staff_ID`)
);

CREATE TABLE `product` (
  `product_ID` INTEGER(5),
  `product_type` VARCHAR(30),
  `product_name` VARCHAR(25),
  `product_quantity` INTEGER,
  `product_description` VARCHAR(100),
  `product_price` DECIMAL(10,2),
  `stockable` BOOLEAN,
  PRIMARY KEY (`product_ID`, `product_type`),
  KEY `Key` (`product_name`, `product_quantity`, `product_description`, `product_price`, `stockable`)
);

CREATE TABLE `user` (
  `password` VARCHAR(70),
  `login_user_ID` INTEGER(10),
  `password2` VARCHAR(70),
  `user_type` VARCHAR(25),
  `usernameEmail` VARCHAR(100),
  `first_name` VARCHAR(15),
  `last_name` VARCHAR(30),
  `phone` VARCHAR(30),
  `birthday` DATE,
  `address` VARCHAR(50),
  `address2` VARCHAR(50),
  `eircode` VARCHAR(15),
  `info` VARCHAR(300),
  PRIMARY KEY (`password`, `login_user_ID`),
  KEY `key` (`password2`),
  KEY `Key` (`user_type`, `usernameEmail`, `first_name`, `last_name`, `phone`, `birthday`, `address`, `address2`, `eircode`, `info`)
);

CREATE TABLE `staff` (
  `staff_email` VARCHAR(100),
  `staff_ID` INTEGER(10),
  `password` VARCHAR(70),
  `password2` VARCHAR(70),
  `staff_name` VARCHAR(15),
  `staff_second` VARCHAR(30),
  `staff_address` VARCHAR(50),
  `DOB` DATE,
  `staff_phone` INTEGER(30),
  `from_date` DATE,
  `end_date` DATE,
  `staff_type` VARCHAR(10),
  `salary` NUMERIC(19,0),
  `daily_hours` INTEGER(2),
  PRIMARY KEY (`staff_email`, `staff_ID`),
  KEY `Key` (`password`, `password2`, `staff_name`, `staff_second`, `DOB`, `staff_phone`, `from_date`, `end_date`, `staff_type`, `salary`, `daily_hours`),
  KEY `key` (`staff_address`)
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
  `invoice` INTEGER,
  `product_quantity` INTEGER,
  `product_price` DECIMAL(10,2),
  `ordered_at` DATETIME,
  KEY `Key` (`product_quantity`, `product_price`, `ordered_at`)
);

CREATE TABLE `Supplying` (
  `suppllier_ID` INTEGER,
  `product_ID` INTEGER,
  `quantity` INTEGER,
  `price` DECIMAL(10,2),
  `ordered_at` DATETIME,
  `arrives_at` DATETIME,
  `arrived` BOOLEAN,
  KEY `Key` (`quantity`, `price`, `ordered_at`, `arrives_at`, `arrived`)
);

CREATE TABLE `vehicle` (
  `vehicle_lincense` VARCHAR(15),
  `login_user_ID` INTEGER(10),
  `vehicle_type` VARCHAR(15),
  `vehicle_year` DATE,
  `vehicle_model` VARCHAR(15),
  `vehicle_color` VARCHAR(10),
  `vehicle_engine` VARCHAR(15),
  `vehicle_make` VARCHAR(25),
  `adicional` VARCHAR(300),
  PRIMARY KEY (`vehicle_lincense`),
  KEY `Key` (`vehicle_type`, `vehicle_year`, `vehicle_color`, `vehicle_engine`, `vehicle_make`, `adicional`),
  KEY `key` (`vehicle_model`)
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
  KEY `Key` (`booking_date`, `other _details`)
);

