CREATE TABLE `Payment` (
  `Payment_ID` INTEGER,
  `Serv_ordem` INTEGER(15),
  `Payment_parts` DECIMAL(10,2),
  `Paymentt_serv` DECIMAL(10,2),
  `Payment_amount` DECIMAL(10,2),
  `Payment_date` DATE,
  `Other details` VARCHAR(300),
  PRIMARY KEY (`Payment_ID`),
  KEY `FK` (`Serv_ordem`),
  KEY `Key` (`Payment_parts`, `Paymentt_serv`, `Payment_amount`, `Payment_date`, `Other details`)
);

CREATE TABLE `Service` (
  `Serv_ordeR` INTEGER(15),
  `Service_ID` INTEGER(5),
  `Vehicle_license` VARCHAR(15),
  `Service_name` VARCHAR(15),
  `Price` NUMERIC(19,0),
  `Hours_serv` INTEGER(2),
  `Service_comments` VARCHAR(300),
  PRIMARY KEY (`Serv_ordeR`, `Service_ID`),
  KEY `FK` (`Vehicle_license`),
  KEY `Key` (`Service_name`, `Price`, `Hours_serv`, `Service_comments`)
);

CREATE TABLE `Identify` (
  `Login_user_ID` INTEGER(10),
  `Login_staff_ID` INTEGER(4),
  
  `Login_adm_ID` INTEGER(4),
  `Password` VARCHAR(70),
  `Last_login` DATETIME,
  `is_Login_adm_ID` ENUM('1','0'),
  `is_Login_user_ID` ENUM('1','0'),
  `is_Login_staff_ID` ENUM('1','0') ,
  KEY `FK` (`Login_user_ID`, `Login_staff_ID`, `Login_adm_ID`, `Password`),
  KEY `Key` (`Last_login`, `is_Login_adm_ID`, `is_Login_user_ID`, `is_Login_staff_ID`)
);

CREATE TABLE `Product` (
  `Product_ID` INTEGER(5),
  `Reference` TiNYTEXT,
  `Name_part` VARCHAR(25),
  `Quantity` INTEGER,
  `Price` DECIMAL(10,2),
  `Stockable` BOOLEAN,
  PRIMARY KEY (`Product_ID`),
  KEY `Key` (`Reference`, `Name_part`, `Quantity`, `Price`, `Stockable`)
);

CREATE TABLE `User` (
  `Password` VARCHAR(70),
  `Login_user_ID` INTEGER(10),
  `E-mail` VARCHAR(100),
  `First_name` VARCHAR(15),
  `Last_name` VARCHAR(30),
  `phone[0]: PhoneNumber (phoneType) (number)` VARCHAR(30),
  `DOB` DATE,
  `Adress_line1` VARCHAR(50),
  `Adress_line2` VARCHAR(50),
  `Post_code` VARCHAR(15),
  PRIMARY KEY (`Password`, `Login_user_ID`),
  KEY `Key` (`E-mail`, `First_name`, `Last_name`, `phone[0]: PhoneNumber (phoneType) (number)`, `DOB`, `Adress_line1`, `Adress_line2`, `Post_code`)
);

CREATE TABLE `Staff` (
  `E-mail` VARCHAR(100),
  `Login_staff_ID` INTEGER(10),
  `First_name` VARCHAR(15),
  `Last_name` VARCHAR(30),
  `DOB` DATE,
  `Start_date` DATE,
  `End_date` DATE,
  `Role` VARCHAR(15),
  `Salary` NUMERIC(19,0),
  `Daily_hours` INTEGER,
  PRIMARY KEY (`E-mail`, `Login_staff_ID`),
  KEY `Key` (`First_name`, `Last_name`, `DOB`, `Start_date`, `End_date`, `Role`, `Salary`, `Daily_hours`)
);

CREATE TABLE `ADM` (
  `iogin_staff_ID` INTEGER(4),
  `Password` VARCHAR(70),
  `E-mail` VARCHAR(100),
  PRIMARY KEY (`iogin_staff_ID`, `Password`),
  KEY `Key` (`E-mail`)
);

CREATE TABLE `Supplier` (
  `Supplier_ID` INTEGER,
  `Supplier_name` VARCHAR(45),
  `Supplier_phone` INTEGER,
  `Supplier_info` VARCHAR(200),
  PRIMARY KEY (`Supplier_ID`),
  KEY `Key` (`Supplier_name`, `Supplier_phone`, `Supplier_info`)
);

CREATE TABLE `Product_order` (
  `Product_ID` INTEGER,
  `Serv_order` iNTEGER,
  `Quantity` INTEGER,
  `Price` DECIMAL(10,2),
  `Ordered_at` DATETIME,
  KEY `FK` (`Product_ID`, `Serv_order`),
  KEY `Key` (`Quantity`, `Price`, `Ordered_at`)
);

CREATE TABLE `Supplying` (
  `Suppllier_ID` INTEGER,
  `Product_ID` INTEGER,
  `Quantity` INTEGER,
  `Price` DECIMAL(10,2),
  `Ordered_at` DATETIME,
  `Arrives_at` DATETIME,
  `Arrived` BOOLEAN,
  KEY `FK` (`Suppllier_ID`, `Product_ID`),
  KEY `Key` (`Quantity`, `Price`, `Ordered_at`, `Arrives_at`, `Arrived`)
);

CREATE TABLE `Vehicle` (
  `Vehicle_lincense` VARCHAR(15),
  `Login_user_ID` INTEGER(10),
  `Vehicle_type` VARCHAR(15),
  `Vehicle_year` DATE,
  `Vehicle_color` VARCHAR(10),
  `Vehicle_engine` VARCHAR(15),
  `Vehicle_make` VARCHAR(25),
  PRIMARY KEY (`Vehicle_lincense`),
  KEY `FK` (`Login_user_ID`),
  KEY `Key` (`Vehicle_type`, `Vehicle_year`, `Vehicle_color`, `Vehicle_engine`, `Vehicle_make`)
);

CREATE TABLE `Ref_Booking _Status` (
  `Status` VARCHAR(15),
  `Status_description` VARCHAR(100),
  PRIMARY KEY (`Status`),
  KEY `Key` (`Status_description`)
);

CREATE TABLE `Stock` (
  `Stock_ID` INTEGER,
  `Product_id` INTEGER,
  `Quantity` INTEGER,
  `Update_at` DATETIME,
  PRIMARY KEY (`Stock_ID`, `Product_id`),
  KEY `Key` (`Quantity`, `Update_at`)
);

CREATE TABLE `Booking` (
  `Booking_ID` INT,
  `Status ` VARCHAR(15),
  `Booking_date` DATE,
  `Other _details` VARCHAR(100),
  PRIMARY KEY (`Booking_ID`),
  KEY `FK` (`Status `),
  KEY `Key` (`Booking_date`, `Other _details`)
);

