-
-- Table structure for table `identify`
--

CREATE TABLE `identify` (
  `login_user_ID` int(10) DEFAULT NULL,
  `login_staff_ID` int(4) DEFAULT NULL,
  `login_adm_ID` int(4) DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `is_Login_adm_ID` enum('1','0') DEFAULT NULL,
  `is_Login_user_ID` enum('1','0') DEFAULT NULL,
  `is_Login_staff_ID` enum('1','0') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_ID` int(11) NOT NULL,
  `serv_ordem` int(15) DEFAULT NULL,
  `payment_parts` decimal(10,2) DEFAULT NULL,
  `paymentt_serv` decimal(10,2) DEFAULT NULL,
  `payment_amount` decimal(10,2) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `other details` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_ID` int(5) NOT NULL,
  `reference` tinytext DEFAULT NULL,
  `name_part` varchar(25) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `stockable` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `product_ID` int(11) DEFAULT NULL,
  `serv_order` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `ordered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ref_booking _status`
--

CREATE TABLE `ref_booking _status` (
  `status` varchar(15) NOT NULL,
  `status_description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `serv_ordeR` int(15) NOT NULL,
  `service_ID` int(5) NOT NULL,
  `vehicle_license` varchar(15) DEFAULT NULL,
  `service_name` varchar(15) DEFAULT NULL,
  `price` decimal(19,0) DEFAULT NULL,
  `hours_serv` int(2) DEFAULT NULL,
  `service_comments` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_ID` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_ID` int(11) NOT NULL,
  `supplier_name` varchar(45) DEFAULT NULL,
  `supplier_phone` int(11) DEFAULT NULL,
  `supplier_info` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplying`
--

CREATE TABLE `supplying` (
  `suppllier_ID` int(11) DEFAULT NULL,
  `product_ID` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `ordered_at` datetime DEFAULT NULL,
  `arrives_at` datetime DEFAULT NULL,
  `arrived` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `first_name` varchar(15) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `adress_line1` varchar(50) DEFAULT NULL,
  `adress_line2` varchar(50) DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL,
  `password2` varchar(70) DEFAULT NULL,
  `login_user_ID` int(10) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `phoneNumber` varchar(30) DEFAULT NULL,
  `post_code` varchar(15) DEFAULT NULL,
  `user_type` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicle_lincense` varchar(15) NOT NULL,
  `login_user_ID` int(10) DEFAULT NULL,
  `vehicle_type` varchar(15) DEFAULT NULL,
  `vehicle_year` date DEFAULT NULL,
  `vehicle_color` varchar(10) DEFAULT NULL,
  `vehicle_engine` varchar(15) DEFAULT NULL,
  `vehicle_make` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`login_staff_ID`,`password`),
  ADD KEY `Key` (`e-mail`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_ID`),
  ADD KEY `FK` (`status`),
  ADD KEY `Key` (`booking_date`,`other _details`);

--
-- Indexes for table `identify`
--
ALTER TABLE `identify`
  ADD KEY `FK` (`login_user_ID`,`login_staff_ID`,`login_adm_ID`,`password`),
  ADD KEY `Key` (`last_login`,`is_Login_adm_ID`,`is_Login_user_ID`,`is_Login_staff_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_ID`),
  ADD KEY `FK` (`serv_ordem`),
  ADD KEY `Key` (`payment_parts`,`paymentt_serv`,`payment_amount`,`payment_date`,`other details`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_ID`),
  ADD KEY `Key` (`reference`(255),`name_part`,`quantity`,`price`,`stockable`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD KEY `FK` (`product_ID`,`serv_order`),
  ADD KEY `Key` (`quantity`,`price`,`ordered_at`);

--
-- Indexes for table `ref_booking _status`
--
ALTER TABLE `ref_booking _status`
  ADD PRIMARY KEY (`status`),
  ADD KEY `Key` (`status_description`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serv_ordeR`,`service_ID`),
  ADD KEY `FK` (`vehicle_license`),
  ADD KEY `Key` (`service_name`,`price`,`hours_serv`,`service_comments`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_ID`,`product_id`),
  ADD KEY `Key` (`quantity`,`update_at`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_ID`),
  ADD KEY `Key` (`supplier_name`,`supplier_phone`,`supplier_info`);

--
-- Indexes for table `supplying`
--
ALTER TABLE `supplying`
  ADD KEY `FK` (`suppllier_ID`,`product_ID`),
  ADD KEY `Key` (`quantity`,`price`,`ordered_at`,`arrives_at`,`arrived`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicle_lincense`),
  ADD KEY `FK` (`login_user_ID`),
  ADD KEY `Key` (`vehicle_type`,`vehicle_year`,`vehicle_color`,`vehicle_engine`,`vehicle_make`);
