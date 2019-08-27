--
-- Table structure for table `a21`
--

CREATE TABLE `a21` (
  `id` int(11) NOT NULL,
  `pcname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `a21`
--

INSERT INTO `a21` (`id`, `pcname`) VALUES
(1, 'ABC');

-- --------------------------------------------------------

--
-- Table structure for table `academic_years`
--

CREATE TABLE `academic_years` (
  `id` int(11) NOT NULL,
  `year` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `academic_years`
--

INSERT INTO `academic_years` (`id`, `year`) VALUES
(1, '2011-2012'),
(2, '2012-2013'),
(4, '2013-2014'),
(5, '2014-2015'),
(6, '2015-2016');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `department` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department`) VALUES
(3, 'E&TC'),
(4, 'Computer'),
(8, 'Electrical'),
(9, 'ALL');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(14, '::1', 'admin', '2019-07-06 10:56:26');

-- --------------------------------------------------------

--
-- Table structure for table `master_college`
--

CREATE TABLE `master_college` (
  `id` int(11) NOT NULL,
  `college` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master_college`
--

INSERT INTO `master_college` (`id`, `college`) VALUES
(1, 'G. H. Raisoni Institute of Engineering and Technology');

-- --------------------------------------------------------

--
-- Table structure for table `master_status`
--

CREATE TABLE `master_status` (
  `id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master_status`
--

INSERT INTO `master_status` (`id`, `status`) VALUES
(1, 'Pending'),
(2, 'Complete'),
(3, 'Ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `master_user_type`
--

CREATE TABLE `master_user_type` (
  `id` int(11) NOT NULL,
  `type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master_user_type`
--

INSERT INTO `master_user_type` (`id`, `type`) VALUES
(1, 'Admin'),
(2, 'HOD / Dean / VP'),
(3, 'Faculty'),
(4, 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `skillbased`
--

CREATE TABLE `skillbased` (
  `id` int(11) NOT NULL,
  `academic_year` text NOT NULL,
  `department_id` text NOT NULL,
  `event_name` text NOT NULL,
  `coordinator` text NOT NULL,
  `expert` text NOT NULL,
  `sponsoring_authority` text NOT NULL,
  `financial` text NOT NULL,
  `academic` text NOT NULL,
  `faculty_beneficiaries` text NOT NULL,
  `student_beneficiaries` text NOT NULL,
  `status` text NOT NULL,
  `added_by` text NOT NULL,
  `verified` int(11) NOT NULL,
  `file` text NOT NULL,
  `datetime_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skillbased`
--

INSERT INTO `skillbased` (`id`, `academic_year`, `department_id`, `event_name`, `coordinator`, `expert`, `sponsoring_authority`, `financial`, `academic`, `faculty_beneficiaries`, `student_beneficiaries`, `status`, `added_by`, `verified`, `file`, `datetime_added`, `start_date`, `end_date`, `note`) VALUES
(16, '6', '3', 'Tanmay Nigde', 'Coordinator Ajay', 'Expert Jeevan', 'Sponsoring Prajakta', '1000000', 'Support Given', '100', '100', '1', '1', 1, '774652137d56fa8e269ac98cf91b2174.pdf', '2019-07-04 12:42:23', '2019-07-01', '2019-07-18', '                                                                                                                                                                                                                                 NA                                                                                                                                                                                                                                 ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_approved`
--

CREATE TABLE `tb_approved` (
  `approved_id` int(11) NOT NULL,
  `approved_buyer_id` varchar(230) NOT NULL,
  `approved_lot_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_bidding`
--

CREATE TABLE `tb_bidding` (
  `id_bidding` int(11) NOT NULL,
  `lot_id` int(20) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `bidding_price` varchar(15) NOT NULL,
  `bid_time` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_buyers`
--

CREATE TABLE `tb_buyers` (
  `buyer_id` int(11) NOT NULL,
  `buyer_company_name` varchar(100) NOT NULL,
  `buyer_type` int(11) NOT NULL,
  `buyer_address` varchar(100) NOT NULL,
  `buyer_city` varchar(100) NOT NULL,
  `buyer_state` varchar(50) NOT NULL,
  `buyer_zip` varchar(10) NOT NULL,
  `buyer_country` varchar(30) NOT NULL,
  `buyer_phone_1` varchar(20) NOT NULL,
  `buyer_phone_2` varchar(100) NOT NULL,
  `buyer_fax` varchar(100) NOT NULL,
  `buyer_alt_email` varchar(100) NOT NULL,
  `buyer_contact_1` varchar(100) NOT NULL,
  `buyer_contact_2` varchar(100) NOT NULL,
  `user_type` int(20) NOT NULL DEFAULT '3',
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_buyer_invite`
--

CREATE TABLE `tb_buyer_invite` (
  `id_buyer_invite` int(11) NOT NULL,
  `buyer_invite_auction_id` int(11) NOT NULL,
  `buyer_invite_buyer_id` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_companies`
--

CREATE TABLE `tb_companies` (
  `company_id` int(25) NOT NULL,
  `seller_company_name` varchar(30) NOT NULL,
  `seller_type` varchar(10) NOT NULL,
  `seller_address` varchar(100) NOT NULL,
  `seller_city` varchar(20) NOT NULL,
  `seller_state` varchar(20) NOT NULL,
  `seller_zip` int(20) NOT NULL,
  `seller_country` varchar(15) NOT NULL,
  `seller_phone_1` bigint(15) NOT NULL,
  `seller_phone_2` bigint(15) NOT NULL,
  `seller_fax` bigint(15) NOT NULL,
  `seller_image` varchar(100) NOT NULL,
  `seller_alt_email` varchar(20) NOT NULL,
  `seller_contact_1` varchar(20) NOT NULL,
  `seller_contact_2` varchar(20) NOT NULL,
  `seller_contact_3` varchar(20) NOT NULL,
  `seller_description` varchar(100) NOT NULL,
  `user_type` int(10) NOT NULL DEFAULT '2',
  `status` int(10) NOT NULL DEFAULT '1',
  `username` text NOT NULL,
  `password` text NOT NULL,
  `enc_username` text NOT NULL,
  `enc_password` text NOT NULL,
  `email` text NOT NULL,
  `banned` int(11) NOT NULL DEFAULT '0',
  `activated` int(11) NOT NULL DEFAULT '1',
  `id` int(11) NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL DEFAULT '3',
  `new_password_key` text NOT NULL,
  `new_password_requested` text NOT NULL,
  `last_ip` text NOT NULL,
  `last_login` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_companies`
--

INSERT INTO `tb_companies` (`company_id`, `seller_company_name`, `seller_type`, `seller_address`, `seller_city`, `seller_state`, `seller_zip`, `seller_country`, `seller_phone_1`, `seller_phone_2`, `seller_fax`, `seller_image`, `seller_alt_email`, `seller_contact_1`, `seller_contact_2`, `seller_contact_3`, `seller_description`, `user_type`, `status`, `username`, `password`, `enc_username`, `enc_password`, `email`, `banned`, `activated`, `id`, `type`, `new_password_key`, `new_password_requested`, `last_ip`, `last_login`) VALUES
(1, 'Demo Company 1', '1', '', '', '', 0, '', 0, 0, 0, '', '', '', '', '', '', 2, 1, 'demo1', '$P$BAooVxpalYerKTfj1HH3DekK5VGVyF1', '', 'demo1', '', 0, 1, 0, 3, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact_profile`
--

CREATE TABLE `tb_contact_profile` (
  `id` int(1) NOT NULL,
  `org_name` text NOT NULL,
  `org_address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `country` text NOT NULL,
  `phone1` text NOT NULL,
  `phone2` text NOT NULL,
  `zip` text NOT NULL,
  `fax` text NOT NULL,
  `email1` text NOT NULL,
  `use_email_1` text NOT NULL,
  `email2` text NOT NULL,
  `use_email_2` text NOT NULL,
  `email3` text NOT NULL,
  `use_email_3` text NOT NULL,
  `email4` text NOT NULL,
  `use_email_4` text NOT NULL,
  `contact1` text NOT NULL,
  `contact2` text NOT NULL,
  `business_detail` text NOT NULL,
  `comp_profile` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_images`
--

CREATE TABLE `tb_images` (
  `id` int(11) NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_lot`
--

CREATE TABLE `tb_lot` (
  `id_lot` int(11) NOT NULL,
  `auction_id` int(11) NOT NULL,
  `lot_number` varchar(200) NOT NULL,
  `lot_description` varchar(200) NOT NULL,
  `lot_product_qty` varchar(200) NOT NULL,
  `lot_bid_unit` varchar(200) NOT NULL,
  `lot_emd_cmd` varchar(200) NOT NULL,
  `lot_start_bid` varchar(200) NOT NULL,
  `lot_increment_by` varchar(200) NOT NULL,
  `lot_img_1` varchar(200) NOT NULL,
  `lot_img_2` varchar(200) NOT NULL,
  `lot_img_3` varchar(200) NOT NULL,
  `lot_catalogue_1` varchar(200) NOT NULL,
  `lot_catalogue_2` varchar(200) NOT NULL,
  `lot_catalogue_3` varchar(200) NOT NULL,
  `lot_status` int(11) NOT NULL DEFAULT '1',
  `activate` int(11) NOT NULL DEFAULT '0',
  `lot_start_date` text,
  `lot_start_time` time DEFAULT NULL,
  `lot_end_date` text,
  `lot_end_time` time DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_manage_auctions`
--

CREATE TABLE `tb_manage_auctions` (
  `id_m_a` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `auction_type` int(11) NOT NULL,
  `auction_number` varchar(200) NOT NULL,
  `auction_description` text NOT NULL,
  `material_venue` text NOT NULL,
  `auction_start_dt` varchar(30) NOT NULL,
  `auction_end_dt` varchar(30) NOT NULL,
  `auction_start_time` time NOT NULL,
  `auction_end_time` time NOT NULL,
  `term` varchar(200) NOT NULL,
  `catalogue` varchar(200) NOT NULL,
  `live` int(11) NOT NULL DEFAULT '0',
  `archive` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `type` int(11) NOT NULL DEFAULT '2',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `loggedin` text COLLATE utf8_bin NOT NULL,
  `lastUpdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `college_id` int(11) NOT NULL DEFAULT '1',
  `department_id` int(11) NOT NULL DEFAULT '1',
  `mobile` bigint(20) NOT NULL DEFAULT '0',
  `fullname` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activated`, `type`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`, `loggedin`, `lastUpdate`, `college_id`, `department_id`, `mobile`, `fullname`) VALUES
(1, 'r.kharadkar@raisoni.net', '$P$BI3fjQpUNHfEN3o85H2kFq6w64YP8V0', 'r.kharadkar@raisoni.net', 1, 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2019-07-06 16:26:45', '2019-06-19 01:21:04', '2019-07-06 10:58:43', '', '2019-06-02 00:00:00', 1, 4, 9657724102, 'Dr. R D Kharadkar'),
(2, 'amol.bhoi@raisoni.net', '$P$BQwhMQf46wqmZNM8x2MAg7T0/.5S5s0', 'amol.bhoi@raisoni.net', 1, 2, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2019-07-04 22:16:50', '2019-06-28 13:09:56', '2019-07-04 16:46:50', '', '2019-06-28 13:09:56', 1, 3, 9028450440, 'Amol Bhoi'),
(5, 'tanmay@gmail.com', '$P$Bq8xwUKH3CmArCJp3m44orbasOeuNa/', 'tanmay@gmail.com', 1, 4, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2019-07-04 13:03:38', '2019-07-04 12:59:25', '2019-07-04 07:33:38', '', '2019-07-04 12:59:25', 1, 4, 9898989898, 'Tanmay');

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

CREATE TABLE `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `country`, `website`) VALUES
(1, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a21`
--
ALTER TABLE `a21`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `academic_years`
--
ALTER TABLE `academic_years`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_college`
--
ALTER TABLE `master_college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_status`
--
ALTER TABLE `master_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_user_type`
--
ALTER TABLE `master_user_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skillbased`
--
ALTER TABLE `skillbased`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_approved`
--
ALTER TABLE `tb_approved`
  ADD PRIMARY KEY (`approved_id`);

--
-- Indexes for table `tb_bidding`
--
ALTER TABLE `tb_bidding`
  ADD PRIMARY KEY (`id_bidding`);

--
-- Indexes for table `tb_buyers`
--
ALTER TABLE `tb_buyers`
  ADD PRIMARY KEY (`buyer_id`);

--
-- Indexes for table `tb_buyer_invite`
--
ALTER TABLE `tb_buyer_invite`
  ADD PRIMARY KEY (`id_buyer_invite`);

--
-- Indexes for table `tb_companies`
--
ALTER TABLE `tb_companies`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `tb_contact_profile`
--
ALTER TABLE `tb_contact_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_images`
--
ALTER TABLE `tb_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_lot`
--
ALTER TABLE `tb_lot`
  ADD PRIMARY KEY (`id_lot`);

--
-- Indexes for table `tb_manage_auctions`
--
ALTER TABLE `tb_manage_auctions`
  ADD PRIMARY KEY (`id_m_a`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_autologin`
--
ALTER TABLE `user_autologin`
  ADD PRIMARY KEY (`key_id`,`user_id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a21`
--
ALTER TABLE `a21`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `academic_years`
--
ALTER TABLE `academic_years`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `master_college`
--
ALTER TABLE `master_college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_status`
--
ALTER TABLE `master_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `master_user_type`
--
ALTER TABLE `master_user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skillbased`
--
ALTER TABLE `skillbased`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_approved`
--
ALTER TABLE `tb_approved`
  MODIFY `approved_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_bidding`
--
ALTER TABLE `tb_bidding`
  MODIFY `id_bidding` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_buyers`
--
ALTER TABLE `tb_buyers`
  MODIFY `buyer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_buyer_invite`
--
ALTER TABLE `tb_buyer_invite`
  MODIFY `id_buyer_invite` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_companies`
--
ALTER TABLE `tb_companies`
  MODIFY `company_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_contact_profile`
--
ALTER TABLE `tb_contact_profile`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_images`
--
ALTER TABLE `tb_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_lot`
--
ALTER TABLE `tb_lot`
  MODIFY `id_lot` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_manage_auctions`
--
ALTER TABLE `tb_manage_auctions`
  MODIFY `id_m_a` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
