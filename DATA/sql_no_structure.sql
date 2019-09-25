-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 30, 2018 at 09:38 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `viavi`
--

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_icon`, `category_name`, `category_slug`, `status`) VALUES
(1, 'fa-globe', 'Dentist', 'dentist', 1);

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `user_id`, `cat_id`, `sub_cat_id`, `location_id`, `featured_listing`, `title`, `listing_slug`, `description`, `video`, `address`, `map_lat`, `map_long`, `amenities`, `working_hours_mon`, `working_hours_tue`, `working_hours_wed`, `working_hours_thurs`, `working_hours_fri`, `working_hours_sat`, `working_hours_sun`, `featured_image`, `review_avg`, `status`, `created_at`, `updated_at`, `keywords`, `consultation_fee`, `contact`) VALUES
(1, 2, 1, 1, 0, 1, 'Test', 'test', '<p>Test</p>', '', '', '', '', 'Parking,WiFi,Terrace', '', '', '', '', '', '', '', '', '', 1, '2018-10-26 06:17:34', '2018-10-27 11:12:21', '', 100, 0),
(2, 2, 6, 6, 0, 1, 'Test 2 ', 'test-2', '<p>Test 2</p>', '', 'GNB Road,\r\nAmbari', '123.12313', '12.123', 'Parking,WiFi,Terrace', '9:00-10:00', '', '', '', '', '', '', 'test-2_1540555374', '', 1, '2018-10-26 06:32:54', '2018-10-26 06:32:54', '', 2000, 0),
(3, 2, 1, 1, 0, 1, 'test ', 'test', '<p>test&nbsp;</p>', '', '', '', '', 'Parking,WiFi,Terrace', '', '', '', '', '', '', '', '', '', 1, '2018-10-27 14:22:36', '2018-10-27 14:22:36', '', 350, 0),
(4, 2, 1, 1, 0, 0, 'Test 3', 'test-3', '<p>test</p>', '', '', '', '', 'Parking,WiFi,Terrace', '', '', '', '', '', '', '', '', '', 1, '2018-10-27 14:23:23', '2018-10-27 14:23:23', '', 400, 0),
(5, 2, 1, 1, 0, 0, 'hey', 'hey', '<p>hey</p>', '', '', '', '', 'Parking,WiFi,Terrace', '', '', '', '', '', '', '', '', '', 1, '2018-10-27 15:03:21', '2018-10-27 15:03:21', '', 0, 0),
(6, 2, 1, 1, 0, 0, 'hajg', 'hajg', '<p>asjkdh</p>', '', '', '', '', 'Parking,WiFi,Terrace', '', '', '', '', '', '', '', '', '', 1, '2018-10-27 15:03:52', '2018-10-27 15:03:52', '', 0, 0),
(7, 2, 1, 1, 0, 0, 'amdja', 'amdja', '<p>kjahsd</p>', '', '', '', '', 'Parking,WiFi,Terrace', '', '', '', '', '', '', '', '', '', 1, '2018-10-27 15:08:22', '2018-10-27 15:08:22', '', 0, 0),
(8, 2, 1, 1, 0, 0, 'akjsdhalhk', 'akjsdhalhk', '<p>asdasd</p>', '', '', '', '', 'Parking,WiFi,Terrace', '', '', '', '', '', '', '', '', '', 1, '2018-10-27 15:09:51', '2018-10-27 15:09:51', 'Parking,WiFi,Terrace', 0, 0),
(9, 2, 1, 1, 0, 0, 'aldhalhd', 'aldhalhd', '<p>adkjhakdh</p>', '', '', '', '', 'Parking,WiFi,Terrace,lift', '', '', '', '', '', '', '', '', '', 1, '2018-10-27 23:03:41', '2018-10-27 23:03:41', 'parking,, ', 0, 0),
(10, 41, 1, 1, 0, 0, 'asasda', 'asasda', '<p>dad</p>', '', '', '', '', 'Parking,WiFi,Terrace', '14:12', '', '', '', '', '', '', '', '', 0, '2018-10-28 01:43:19', '2018-10-28 01:43:19', 'RCT,Cleaning,Braces', 0, 0),
(11, 48, 1, 1, 0, 0, 'dd', 'dd', '<p>dasd</p>', '', '', '', '', 'Parking,WiFi,Terrace', '', '', '', '', '', '', '', '', '', 0, '2018-10-28 02:51:31', '2018-10-28 02:51:31', 'RCT,Cleaning,Braces', 0, 0),
(12, 51, 1983719287, 1983719287, 1983719287, 0, '1983719287', '1983719287', '1983719287', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2018-10-28 02:59:40', '2018-10-28 02:59:40', '', 0, 0),
(13, 52, 1234456788, 1234456788, 1234456788, 0, '1234456788', '1234456788', '1234456788', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2018-10-28 03:00:30', '2018-10-28 03:00:30', '', 0, 0),
(14, 52, 1, 1, 0, 0, 'asda', 'asda', '<p>dasdd</p>', '', '', '', '', 'Parking,WiFi,Terrace', '', '', '', '', '', '', '', '', '', 0, '2018-10-28 03:01:08', '2018-10-28 03:01:08', 'RCT,Cleaning,Braces', 0, 0),
(15, 53, 19327138, 19327138, 19327138, 0, '19327138', '19327138', '19327138', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2018-10-28 03:04:20', '2018-10-28 03:04:20', '', 0, 0),
(16, 54, 0, 0, 0, 0, '0000000000', '0000000000', '0000000000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2018-10-28 03:05:09', '2018-10-28 03:05:09', '', 0, 0),
(17, 55, 2147483647, 2147483647, 2147483647, 0, '99999999999', '99999999999', '99999999999', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-10-28 03:07:52', '2018-10-28 03:07:52', '', 0, 0),
(18, 56, 2147483647, 2147483647, 2147483647, 0, '12983721837', '12983721837', '12983721837', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-10-28 03:17:51', '2018-10-28 03:17:51', '', 0, 0),
(19, 58, 1, 1, 1, 0, 'kajdhakjdh', '120938120938', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-10-28 03:23:55', '2018-10-28 03:23:55', '', 0, 0),
(20, 59, 1, 1, 1, 0, 'akjdhakjshd', '45454545454544545', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-10-28 03:25:37', '2018-10-28 03:25:37', '', 0, 0),
(21, 60, 1, 1, 0, 0, 'Gentle Dental', 'gentle-dental', 'Some extra description is needed', '', '', '', '', '', '02:00', '', '', '', '', '', '', '', '', 1, '2018-10-28 04:54:26', '2018-10-28 04:55:26', 'rct,cleaninf,braces', 0, 0),
(22, 61, 1, 1, 1, 0, 'dugdugi', '1921310923810938', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-10-29 03:44:33', '2018-10-29 03:44:33', '', 0, 0),
(23, 62, 1, 1, 1, 0, 'akljdalkj', '113213123123', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-11-03 02:02:54', '2018-11-03 02:02:54', '', 0, 0),
(24, 63, 1, 1, 1, 0, 'kadjdalkdj', '1203981038', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-11-03 03:53:02', '2018-11-03 03:53:02', '', 0, 0),
(25, 64, 1, 1, 1, 0, 'kjasdhl', '123701923', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-11-03 03:54:53', '2018-11-03 03:54:53', '', 0, 0),
(26, 65, 1, 1, 1, 0, 'kdsjhdkjh', '129837918273', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-11-03 03:55:30', '2018-11-03 03:55:30', '', 0, 0),
(27, 66, 1, 1, 0, 1, 'kabir', 'kabir', 'Some Clinic', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-11-13 02:48:57', '2018-12-29 22:07:04', 'Pulpectomy Procedure', 0, 0),
(28, 67, 1, 1, 1, 0, 'lhdalsdh', '0090909099090909', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-11-13 03:15:16', '2018-11-13 03:15:16', '', 0, 0),
(29, 68, 1, 1, 1, 0, ',jwhdkjashd', '8763827364872364', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-11-14 00:47:37', '2018-11-14 00:47:37', '', 0, 0),
(30, 69, 2, 1, 1, 0, 'kajsdhkajsdh', '1826912837', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-11-14 08:22:14', '2018-11-14 08:22:14', '', 0, 0),
(31, 70, 1, 1, 1, 0, 'kajgdkg', '6767676767676', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-11-15 05:15:45', '2018-11-15 05:15:45', '', 0, 0),
(32, 71, 1, 1, 0, 0, 'jhsgdaksgd', 'jhsgdaksgd', 'I am great', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-11-15 05:16:14', '2018-11-15 05:20:35', '', 0, 0),
(33, 72, 1, 1, 0, 0, 'NEw clinic', 'new-clinic', 'Hey', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-11-25 00:36:59', '2018-11-25 05:43:30', 'Rotary Rct Procedure,Sealant Treatment,Tooth Veneers ProcedurePeriodontal Flap Surgery,Periodontal Plastic Surgery,Advanced Surgery In Implantology Procedures', 0, 0),
(34, 73, 1, 1, 1, 0, 'jahdkjh', '100000010000', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-12-14 00:41:50', '2018-12-14 00:41:50', '', 0, 0),
(35, 74, 1, 1, 1, 0, 'kldjalskdj', '0230230240', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-12-14 00:52:37', '2018-12-14 00:52:37', '', 0, 0),
(36, 75, 1, 1, 1, 0, 'jhaklsdh', '45458989889', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-12-14 00:54:05', '2018-12-14 00:54:05', '', 0, 0),
(37, 79, 1, 1, 1, 0, 'dlsjhdlkja', '923701983', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-12-14 01:16:53', '2018-12-14 01:16:53', '', 0, 0),
(38, 80, 1, 1, 1, 0, 'askdj', '12345678', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-12-14 02:36:58', '2018-12-14 02:36:58', '', 0, 0),
(39, 81, 1, 1, 1, 0, 'AKLJD', '81731923898', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-12-14 02:38:28', '2018-12-14 02:38:28', '', 0, 0),
(40, 82, 1, 1, 1, 0, 'kjahdkjh', '9284091283', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-12-14 02:39:48', '2018-12-14 02:39:48', '', 0, 0),
(41, 83, 1, 1, 1, 0, 'dksjdaksdj', '92391238183', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-12-14 10:22:13', '2018-12-14 10:22:13', '', 0, 0),
(42, 84, 1, 1, 1, 0, 'lsjdlsdj', '7273723', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-12-14 10:23:02', '2018-12-14 10:23:02', '', 0, 0),
(43, 85, 1, 1, 1, 0, 'lakdjalksdj', '98789987897', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-12-14 10:57:44', '2018-12-14 10:57:44', '', 0, 0),
(44, 86, 1, 1, 1, 0, 'asdh', '7676767676', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-12-14 11:02:21', '2018-12-14 11:02:21', '', 0, 0),
(45, 87, 1, 1, 1, 0, 'lkhasldhl', '7696987987978', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-12-14 11:10:09', '2018-12-14 11:10:09', '', 0, 0);

--
-- Dumping data for table `listing_gallery`
--

INSERT INTO `listing_gallery` (`id`, `listing_id`, `image_name`) VALUES
(1, 2, 'test-2_8392-b.jpg'),
(2, 2, 'test-2_3840-b.jpg');

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location_name`, `location_slug`, `status`) VALUES
(1, 'Guwahati', 'guwahati', 1),
(2, 'Bangalore', 'bangalore', 1),
(3, 'Delhi', 'delhi', 1);

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_04_18_094331_create_settings_table', 1),
('2016_05_11_101945_create_categories_table', 1),
('2016_05_11_102900_create_listings_table', 1),
('2016_05_11_102933_create_listings_reviews_table', 1),
('2016_05_11_102956_create_listing_gallery_table', 1),
('2016_05_11_103038_create_location_table', 1),
('2016_05_11_103103_create_sub_categories_table', 1);

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('kabird1196@gmail.com', 'ae300da65ab553120c9d15b08465ecab19e8b969bff67be5ac33d4341b4850e6', '2018-11-13 02:47:49');

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_email`, `site_logo`, `site_favicon`, `site_description`, `google_map_api`, `site_header_code`, `site_footer_code`, `site_copyright`, `addthis_share_code`, `disqus_comment_code`, `facebook_comment_code`, `home_slide_image1`, `home_slide_image2`, `home_slide_image3`, `home_slide_title`, `home_slide_text`, `page_bg_image`, `about_title`, `about_description`, `contact_title`, `contact_address`, `contact_email`, `contact_number`, `contact_lat`, `contact_long`, `terms_of_title`, `terms_of_description`, `privacy_policy_title`, `privacy_policy_description`, `facebook_url`, `twitter_url`, `gplus_url`, `linkedin_url`) VALUES
(1, 'Directory Listings', 'admin@admin.com', 'logo.png', 'favicon.png', 'Doctor Listing', '', '', '', '2018', '', '', '', 'a.png', '', '', '', '', 'page_bg_image.png', 'About Us', '', 'Contact Us', '', '', '', '', '', 'Terms and Condition', '', 'Privacy Policy', '', '', '', '', '');

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `cat_id`, `sub_category_name`, `sub_category_slug`, `status`) VALUES
(1, 1, 'Dentist General ', 'dentist genereal', 1);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login_with`, `usertype`, `first_name`, `last_name`, `email`, `password`, `gender`, `image_icon`, `mobile`, `contact_email`, `website`, `address`, `facebook_url`, `twitter_url`, `linkedin_url`, `dribbble_url`, `instagram_url`, `facebook_id`, `google_id`, `remember_token`, `created_at`, `updated_at`, `membership`, `service_1`, `consultation_fee`, `referral`, `refers`) VALUES
(1, '', 'Admin', 'John', 'Deo', 'admin@admin.com', '$2y$10$92xK8EZay.XUdDUYTLjNZ.VGFKfgqasYsS6t/f3ecWTcVMccZdIAK', '', 'upload/members/john-5d8c77eb422e0df92e3bc80d445f4661-b.jpg', '', '', '', '', '', '', '', '', '', '', '', '3ZuDzo4IwfDRHGONcQk8ds1olX4qBzLCcXviCO5b5bbr2Ust3cPjPsYIgvWh', '2018-10-25 12:44:40', '2018-10-26 08:05:48', NULL, '0', 0, 0, 0),
(3, '', 'User', 'test', 'test', 'test@com.com', '$2y$10$Wz9l6jmoTStsE43xS7NLnOPKKf9zZUAQpY3FMF2zqiJhCuJngsdQe', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 05:02:06', '2018-10-27 05:02:06', NULL, '0', 0, 0, 0),
(4, '', 'User', 'test', 'test', 'test2@com.com', '$2y$10$UQJzKwEsGJO68zcds.1LjO5zKzkxIGLT8Qlfii2USY1RiueTb/6ba', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 05:02:58', '2018-10-27 05:02:58', NULL, '0', 0, 0, 0),
(5, '', 'User', 'test', 'test', 'test3@com.com', '$2y$10$UZvfcjERXToWU3vq7iLQNORKntO9wEKMUSR9ApOvTBQdwFOrHDqtG', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 05:06:39', '2018-10-27 05:06:39', NULL, '0', 0, 0, 0),
(6, '', 'User', 'test', 'test', 'test4@com.com', '$2y$10$jGvv/yIV46hVj1sf0VPXNOuxCnnubigeKAHS0J7ZvHURBXn1mbhWq', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 05:28:45', '2018-10-27 05:28:45', NULL, '0', 0, 0, 0),
(7, '', 'User', 'test', 'test', 'test5@com.com', '$2y$10$1JHu594Q4EZcuPHfV3N0f.UMcLbHEJgDtVPsu22Jhm3pgRcp8jHga', '', NULL, '', '', '', '', '', '', '', '', '', '', '', 'rU4gCt8ScriTQTQal9QH1krgnK5EEMvkA7LZ5KfmLA983q5rOSOMKxEBApDK', '2018-10-27 05:29:47', '2018-10-27 05:33:12', NULL, '0', 0, 0, 0),
(8, '', 'User', 'test', 'test', 'test6@com.com', '$2y$10$v.Pn6jrfBq74w4vESZfyi.sRe8s4.Y6P/XE1uZM90MtJQofHw1kQq', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 05:31:19', '2018-10-27 05:31:19', NULL, '0', 0, 0, 0),
(9, '', 'User', 'test', 'test', 'test7@com.com', '$2y$10$BQ3v1DDuhCFM4oSF7A3PtOmnGwciQXvcThnxtEvABID0dUluom9TW', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 05:33:31', '2018-10-27 05:33:31', NULL, '0', 0, 0, 0),
(10, '', 'User', 'test', 'test', 'test8@com.com', '$2y$10$4utWDR7rohqKthF8JsmCKeK.tvIu5XQhlauF3j5Z.nPSxT0uQZ1tu', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 05:38:01', '2018-10-27 05:38:01', NULL, '0', 0, 0, 0),
(11, '', 'User', 'test', 'test', 'test13@com.com', '$2y$10$cW1Sj76WboAdj5.F2vrAzuj5luu9x53LmBs2gcvWFpoe1GICdvA4i', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 06:11:00', '2018-10-27 06:11:00', NULL, '0', 0, 0, 0),
(12, '', 'User', 'test', 'test', 'test18@com.com', '$2y$10$monDsNrp424OhacPi7NPfuJM1gErg4vj3srwOwpIwcxYU5aoWUNvq', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 09:51:19', '2018-10-27 09:51:19', NULL, '0', 0, 0, 0),
(13, '', 'User', 'test', 'test', 'test19@com.com', '$2y$10$V1s6jIxwYBHB1xhhJf2OXOlXDVzeSTUDwnV1U.XUA3PsrBetHHWom', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 09:51:37', '2018-10-27 09:51:37', NULL, '0', 0, 0, 0),
(14, '', 'User', 'test', 'test', 'test31@com.com', '$2y$10$/lK6yCrDQljOjCFZa/m0meCabetVX.lKw2Ynd05wlzckdLMNKG4r6', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 09:52:56', '2018-10-27 09:52:56', NULL, '0', 0, 0, 0),
(15, '', 'User', 'test', 'test', 'test32@com.com', '$2y$10$HHLOBCPqnqxS0XKLHODsOepzqcBBVRNCS.ejAiN/Vj0LNCZ0ka8qq', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 09:53:28', '2018-10-27 09:53:28', NULL, '0', 0, 0, 0),
(16, '', 'User', 'test', 'test', 'test34@com.com', '$2y$10$.FfBb1LJmv/rUwFOGPT0aOUNHL1ECI3KONS1nkS3iVpd1PbGM4RYe', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 09:53:58', '2018-10-27 09:53:58', NULL, '0', 0, 0, 0),
(17, '', 'User', 'test', 'test', 'test35@com.com', '$2y$10$081bVCvKz5c/PyP82m66Ae9A3asrw4wpzX2xkkXlZaYFfPtfZHHGW', '', NULL, '', '', '', '', '', '', '', '', '', '', '', 'AIY8XKIciaRUTXvw6lSNICHihptSKZlsYsDqRs6CnUKyRRwpxJht7fPSZieN', '2018-10-27 09:54:52', '2018-10-27 10:26:38', NULL, '0', 0, 0, 0),
(18, '', 'User', 'test', 'test', 'test36@com.com', '$2y$10$AjU6PZxmsS7.lNnSfiXpIOtMwYTR7unGM0.uYt9VdH2xmVpobqesC', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 10:02:01', '2018-10-27 10:02:01', NULL, '0', 0, 0, 0),
(19, '', 'User', 'test', 'test', 'test37@com.com', '$2y$10$8xnU0ZH5lAeO23D2uQO61O1wdYOGDOGvd9dJ1c1fvybqwYnWa.N0m', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 10:02:33', '2018-10-27 10:02:33', NULL, '0', 0, 0, 0),
(20, '', 'User', 'test', 'test', 'test39@com.com', '$2y$10$p17ZYzEpYvJDnxllSAFQc.gtI669QHsk8lV4S/Ja2AvpCIrXTzR46', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 10:04:02', '2018-10-27 10:04:02', NULL, '0', 0, 0, 0),
(21, '', 'User', 'test', 'test', 'test40@com.com', '$2y$10$il/4N71xYiJtHe97uyO2OOYGdMIJsYibW1kE/4AeYz093J3tVStBO', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 10:04:27', '2018-10-27 10:04:27', NULL, '0', 0, 0, 0),
(22, '', 'User', 'test', 'test', 'test41@com.com', '$2y$10$OHEM.wFTVckcODtRj/Jms.35vNjaTScn8uqkovdJ1v3FPnxaHabJq', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 10:06:34', '2018-10-27 10:06:34', NULL, '0', 0, 0, 0),
(23, '', 'User', 'test', 'test', 'test43@com.com', '$2y$10$jEwxyo8T0Gpa5XESmhiixu9U9rjc0fU2t8HhqjKC0gjTDx2BoQnoK', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 10:09:22', '2018-10-27 10:09:22', NULL, '0', 0, 0, 0),
(24, '', 'User', 'test', 'test', 'tset44@com.com', '$2y$10$8n4lY.o/z1xw5H9At05FE.0qIjChy8kd.mKXocyBoKRhrx7fGrTRm', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 10:10:19', '2018-10-27 10:10:19', NULL, '0', 0, 0, 0),
(25, '', 'User', 'test', 'test', 'test00@com.com', '$2y$10$iG.oBTp.t13ZsrofIrB5q.gUmkMd946b1E2RHML/t/Y1wFZW/ZJ4m', '', NULL, '', '', '', '', '', '', '', '', '', '', '', 'lt7Jo8YqkbmwDgaddO8azTMd9rO8ZFp6Hnld2JhEkFXd1ZMdLfKwLJq9PQv7', '2018-10-27 10:11:50', '2018-10-27 10:14:49', NULL, '0', 0, 0, 0),
(26, '', 'User', 'test', 'test', 'test51@com.com', '$2y$10$AKsM1WltqPQXFRVCV3UPcuakIs/DR9Z/oG4V9fFYo76Cmbpby4TKO', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 10:15:16', '2018-10-27 10:15:16', NULL, '0', 0, 0, 0),
(27, '', 'User', 'test', 'test', 'test52@com.com', '$2y$10$Q7esk5NbhiUprFHM4mQT4OUjWuvRI/dGbQmjA99LAim9uDSxyxjCW', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 10:15:40', '2018-10-27 10:15:40', NULL, '0', 0, 0, 0),
(28, '', 'User', 'test', 'tset', 't1@com.com', '$2y$10$tS5KvKZPPhnnkUdXx.6rHOZSbKg1zQ./6wCHZvBlE2qBiXmQQ/9Ha', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 10:17:28', '2018-10-27 10:17:28', NULL, '0', 0, 0, 0),
(29, '', 'User', 'test', 'tets', 't2@com.com', '$2y$10$uGFxkSzk.JbZaKkQJ.FqQOzDs7I/XJWyRcI4JS9tVmYSAoO4QLWLS', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 10:18:00', '2018-10-27 10:18:00', NULL, '0', 0, 0, 0),
(30, '', 'User', 'test', 'test', 't3@com.com', '$2y$10$UlTp2vU6so5ZzK74RkEgs.J76FHepS0lIKKf8msJnO9ZieZkDPcGu', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-27 10:18:26', '2018-10-27 10:18:26', NULL, '0', 0, 0, 0),
(31, '', 'User', 'tt', 't', 'a3@com.com', '$2y$10$Wg9QN2QKLtT5l8IKJ8SOfOctRow/lQ0Cs2A52s.Fxw.atNyYObnKe', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 00:26:43', '2018-10-28 00:26:43', NULL, '0', 0, 0, 0),
(32, '', 'User', 'alsjdh', 'kjdh', 'aldh@com.com', '$2y$10$r9H2iu5knahe5c7orkEdtONgktLyLAjqxUI.9Hgw22PN7qH.JW0Gq', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 00:43:24', '2018-10-28 00:43:24', NULL, '0', 0, 0, 0),
(33, '', 'User', 'aksd', 'aksdhakjdh', 'aksdjald@com.com', '$2y$10$iTMIO6994BND5/i94YqXKuFRRcw8pb67nG.D9AOS6k82pKsw4YNmG', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 00:54:12', '2018-10-28 00:54:12', NULL, '0', 0, 0, 0),
(34, '', 'User', 'ajshdkajh', 'ksdhakjdh', 'akjdhakdjh@com.com', '$2y$10$twIactmk6zRttFABzHzfq.wqdaEOiWqrx/dmjPxKZThjBeFVGexLK', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 00:54:53', '2018-10-28 00:54:53', NULL, '0', 0, 0, 0),
(35, '', 'User', 'asdkjah', 'akjhsdakhd', 'kajhdakhd@com.com', '$2y$10$w0qCr7ZiJNdhDCKIiUAQU.kXmzA2H9szYfs1vB8WrW8LIdqMgg6Hm', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 01:04:32', '2018-10-28 01:04:32', NULL, '0', 0, 0, 0),
(36, '', 'User', 'asdkadljk', 'ajdhakjdh', 'lalkdjasdasd@com.com', '$2y$10$MxkMZgLysf16REbrSCJPKOzwXuaukQQ0lHVbeWb56VOQAtgjchg5W', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 01:12:35', '2018-10-28 01:12:35', NULL, '0', 0, 0, 0),
(37, '', 'User', 'sd,hasdjk', 'akjdhajdh', 'slksdhalkdj@com.com', '$2y$10$HC8gcwUIZu3eV/CtMpbVQOGfTtBh9TZ88GOyttJKG8.rxTOYexUqy', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 01:18:21', '2018-10-28 01:18:21', NULL, '0', 0, 0, 0),
(38, '', 'User', 'asdklhalsdkh', 'kjahdajh', 'aldkalskdj@com.com', '$2y$10$ZNwwpHZFZmSNWKhkvCOp6uPZH.FYpm9.di.YizHb43G9lfPHcYXnu', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 01:19:09', '2018-10-28 01:19:09', NULL, '0', 0, 0, 0),
(39, '', 'User', 'asdjhalsdk', 'aljdhlsd', 'laksdjalskd@com.com', '$2y$10$Fwsz2CpxRA7SzOxFtDwUvOJuSAQTq/aIeU019vZMTuU4Pi4kxm56K', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 01:36:45', '2018-10-28 01:36:45', NULL, '0', 0, 0, 0),
(40, '', 'User', 'asdjhalsdk', 'aljdhlsd', 'laksdasdjalskd@com.com', '$2y$10$ncD.7Vo8fR77yEEwht6ebOJE6SB0IA6vhqtcfDnABkdr5IUH078T6', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 01:37:06', '2018-10-28 01:37:06', NULL, '0', 0, 0, 0),
(41, '', 'User', 'aljsdhlaksdj', 'adjalksdj', 'alkjdlkjaja@com.com', '$2y$10$FiyYmdHSNvQTyUhMNmCjNu8bRhYl0uMyRuAIgPBluXLlXoXHHL62m', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 01:40:43', '2018-10-28 01:40:43', NULL, '0', 0, 0, 0),
(42, '', 'User', 'aldkahsldkh', 'kjshkdjh', 'kajhdajdh@co.com', '$2y$10$H/1oTSqATAxONuTu7iLeNegxayC1/DGS.O7vjxP6WikJOZJpPmGuO', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 01:55:04', '2018-10-28 01:55:04', NULL, '0', 0, 0, 0),
(43, '', 'User', 'aldalkdj', 'kajhdkasjhd', 'lkajdlakdjalj@com.com', '$2y$10$aHXoZ.5.fdEazDaHi14Xg./Hi3bkVOsccp.nElrmD8YtcGlSGsbpS', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 02:11:43', '2018-10-28 02:11:43', NULL, '0', 0, 0, 0),
(44, '', 'User', 'alskdhalskdh', 'jadlaksdj', 'lakjdalksdj@dkjd.com', '$2y$10$d/66hKBQnjOQuF4fiGSqd.Vu8Lrm4sc6G3JVBH7KSmm2pHso08Y2i', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 02:28:41', '2018-10-28 02:28:41', NULL, '0', 0, 0, 0),
(45, '', 'User', 'aksjdhakdsjh', 'kjahdkajh', 'dakjdhakjdh@co.com', '$2y$10$R46zULmQTcDp2lxpBytDSOqIi5Er1U/1FgpF1WHzzPM4G.Z6qr46K', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 02:36:38', '2018-10-28 02:36:38', NULL, '0', 0, 0, 0),
(46, '', 'User', 'alsdjhalkd', 'kadjhdkjah', 'dkajdhaljhd@dc.com', '$2y$10$nNyFei0C9pYUKYexqbpBEOG/w.DqgqK68Bu1fxD9NqmaqKdfCAstK', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 02:42:14', '2018-10-28 02:42:14', NULL, '0', 0, 0, 0),
(47, '', 'User', 'alsjdhlkh', 'kajhdh', 'dlakhdlakdh@cnc.com', '$2y$10$y3zKShadO/2L5uMfA03gZ.Zx5ysl0MEmofDGJ5shckdhfKI9nOOHa', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 02:43:15', '2018-10-28 02:43:15', NULL, '0', 0, 0, 0),
(48, '', 'User', 'alkdjlakjd', 'akjdhak', 'lakdjalkdj@c.com', '$2y$10$qvWHqOn5Q8boTGiogm7qPOTvhtLZQ/KLLq40U33lDNEYR0zOe4ani', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 02:51:12', '2018-10-28 02:51:12', NULL, '0', 0, 0, 0),
(49, '', 'User', 'aldklksdjalkj', 'kdajhdkajh', 'dakjsdlakdj@cjc.com', '$2y$10$WyqHJQmNk7xydJBAxZym4ueHJ7yqoMhE9wBygtY.cfemVGhJdwiQC', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 02:54:40', '2018-10-28 02:54:40', NULL, '0', 0, 0, 0),
(50, '', 'User', 'kdajhdakjhd', 'akdhakjdh', 'dkajhdkajhdc@cjc.com', '$2y$10$Lv6YeVZyrmq5LA2eFBCnTe.Z66uml6zmVQLgIU.WA7VCBnDZyA1MK', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 02:55:05', '2018-10-28 02:55:05', NULL, '0', 0, 0, 0),
(51, '', 'User', 'aksjdhalskdh', 'dakjhdakjdh', 'dalkdj@ck.com', '$2y$10$2cRxTve9o.Gx0P3EWP74tuAIkAuRdAiobTnm4QMgkKr7F8ufOMKkS', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 02:59:40', '2018-10-28 02:59:40', NULL, '0', 0, 0, 0),
(52, '', 'User', 'alskdjalksdj', 'kajdhkahd', 'aidhakjhsdkh@com.com', '$2y$10$IZQaSiZfgJYNZFKJFOlJqeF2YAon5dqRpTBWhuvujFNGVS2J6KIZi', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 03:00:29', '2018-10-28 03:00:29', NULL, '0', 0, 0, 0),
(53, '', 'User', 'asdkjaldkjaldj', 'akjdhsajkd', 'thep@com.com', '$2y$10$Jzg.C.MJ4.vvQaR5.UpGjuMyOAEuArNrIpu7lKZWw133skGinxXRu', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 03:04:19', '2018-10-28 03:04:19', NULL, '0', 0, 0, 0),
(54, '', 'User', 'alskdjaldj', 'kadjhdakjhd', 'kajsdhajdh@com.co', '$2y$10$9nMHcdBVWPASySUdcomAfuPaZfV.CVkqMkdzyqYbN62vmpLC6oJDO', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 03:05:09', '2018-10-28 03:05:09', NULL, '0', 0, 0, 0),
(55, '', 'User', 'lakdsjlajd', 'kahdkjhsd', 'aksdjhaskjdh!@com.com', '$2y$10$z2Yqdl6J/6RCjeSrm42PWOY7w8Cg/SHKK4UjFuaiCUXqduZ43FZTC', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 03:07:51', '2018-10-28 03:07:51', NULL, '0', 0, 0, 0),
(56, '', 'User', 'dkajhdkjh', 'akjdhkjha', 'dkajshdkasjhd@ckn.com', '$2y$10$1jUpIkbW6R8Q2V./xYny8eWY891sgtQHI3.FuZIkxh/V79c8x/Azi', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 03:17:51', '2018-10-28 03:17:51', NULL, '0', 0, 0, 0),
(57, '', 'User', 'hello', ' ', 'kajdh@com.com', '$2y$10$69dWpatshDrL3wKwOKTsSegtSD8R4o9V1TmgPk0oN6LB8Adp7UKVK', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 03:21:32', '2018-10-28 03:21:32', NULL, '0', 0, 0, 0),
(58, '', 'User', 'akjdhakjh', ' ', 'kajdhakjhd@cmc.com', '$2y$10$xa0VqD2KXPAsXHLTfYjtR..9jH1ojlMtLSICnQqZuqafNkSmp/zym', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-28 03:23:55', '2018-10-28 03:23:55', NULL, '0', 0, 0, 0),
(59, '', 'User', 'kajsdkajh', ' ', 'akjdshakhd@c.com', '$2y$10$St.89eG92KYxGHTa0FcJNuxosMRK6t1Ty.6YRdOJQfQ0GotGj68Xi', '', NULL, '45454545454544545', '', '', '', '', '', '', '', '', '', '', 'ygEa7EOeXIIeaNSE77q2LdMNnF9zxq4IhsWa5pxBdV8GzDVODK0Fdl6pq2CH', '2018-10-28 03:25:37', '2018-10-28 04:39:26', NULL, '0', 0, 0, 0),
(60, '', 'User', 'Chinmoy', ' ', 'drchinmoyhazarika@gmail.com', '$2y$10$ljZKikewfS.sxK4/1dEgceO0QIqVN4WZT2XZN7jB/w7YwU9JxMw5i', '', NULL, '07896646246', '', '', '', '', '', '', '', '', '', '', 'I587UFZJJ5YqWWof4HBL4kXfMfjhKLl4QAqLNLZKrxFwdKiw9Zfjjr7T8HWL', '2018-10-28 04:54:25', '2018-10-28 04:56:01', NULL, '0', 0, 0, 0),
(61, '', 'User', 'Simanta', ' ', 'laskdhlakhr@p.com', '$2y$10$uXry3hxsFkwSr5HQJRNOU.tEJBR65M86ilcBRcTUqsss9QWoNzkxy', '', NULL, '1921310923810938', '', '', '', '', '', '', '', '', '', '', NULL, '2018-10-29 03:44:32', '2018-10-29 03:44:32', NULL, '0', 0, 0, 0),
(62, '', 'User', 'adslk', ' ', 'kljakj@ckj.com', '$2y$10$zIvIsfE4fXtkoaO8MuiBouJxiCegrsyyyzhlFFRhMiQVuriQuAm8y', '', NULL, '113213123123', '', '', '', '', '', '', '', '', '', '', 'VVBoeH0wUmSzfv0UMmw7ho2fxA6oEZkZhXIqKBvi7toiiPeO9plAnaA9PAA7', '2018-11-03 02:02:54', '2018-11-03 02:07:26', NULL, '0', 0, 0, 0),
(63, '', 'User', 'asdkjalkdj', ' ', 'kdjshdkajh@alsdkj.com', '$2y$10$MUfiIM6zxqKIzaIT9Gy3lOJ1f42DRLDQUecWjwDADusIpIr3j4Vwy', '', NULL, '1203981038', '', '', '', '', '', '', '', '', '', '', NULL, '2018-11-03 03:53:02', '2018-11-03 03:53:02', NULL, '0', 0, 0, 0),
(64, '', 'User', 'asjdh', ' ', 'akjdshsd@ci.com', '$2y$10$u3qdT2E.rb6cuKfhulpeG.jvgd9roQYYydEYgoOgcIDwpWJwQjWMe', '', NULL, '123701923', '', '', '', '', '', '', '', '', '', '', NULL, '2018-11-03 03:54:53', '2018-11-03 03:54:53', 'Basic', '0', 0, 0, 0),
(65, '', 'User', 'akjsdhah', ' ', 'alsdjkalkj@kj.com', '$2y$10$wi00UnVmKla3FF5/r92JpuXHYo6l.yq5xC2KiZoPQBSAUwWQ0i3q2', '', NULL, '129837918273', '', '', '', '', '', '', '', '', '', '', NULL, '2018-11-03 03:55:30', '2018-11-03 03:55:30', 'Basic', '0', 0, 0, 0),
(66, '', 'Admin', 'Kabir', ' ', 'kabird1196@gmail.com', '$2y$10$mPSj8bGQD13ZRDMDzzW1tuhN1Y9Ph/ZSVzPN7WNPCF5EQm3.zBBjG', '', NULL, '08876721208', '', '', '', '', '', '', '', '', '', '', NULL, '2018-11-13 02:48:57', '2018-12-29 22:36:10', 'Basic', 'Zirconia Crowns Procedure : 6000 , Implant Surgeries : 7000 , Preventive Dentistry Procedure : 4000 , Zirconia Crowns Procedure : 2000 , Teeth Whitening Procedure : 20000 , Teeth Whitening Procedure : 50000 , Teeth Whitening Procedure : 50000 , Implant Retained Dentures Procedure : 30000 , Oral Rehabilitation : 40000 , Dental Extractions Procedure : 20000 , Toothache Treatment : 4000 , Fillings Procedure : 1500 , Implant Tooth Fixing Procedure : 1000 , Fillings Procedure : 3000 , Implant Tooth Fixing Procedure : 35000 , Fillings Procedure : 1200 , Implant Tooth Fixing Procedure  : 35000 , Dental Extractions Procedure : 2000 , Fillings Procedure : 21000 , Dental Extractions Procedure : 15000 , ', 200, 67, 6),
(67, '', 'User', 'alsdjkh', ' ', 'skjdh@kclh.com', '$2y$10$XSC382pBsjWsXqsNobppiuOKWOas/GP.T3BN2KkLwhIgObmVIw1xC', '', NULL, '0090909099090909', '', '', '', '', '', '', '', '', '', '', NULL, '2018-11-13 03:15:15', '2018-11-13 03:15:15', 'Basic', '0', 0, 0, 0),
(68, '', 'User', 'kajshdkj', ' ', 'ksgdkasjg@jhk.com', '$2y$10$VcN6qiXL09vt05TpaWtpV.6M0XbUOWWJjs2aQy8yvrYEuSg7L824C', '', NULL, '8763827364872364', '', '', '', '', '', '', '', '', '', '', NULL, '2018-11-14 00:47:36', '2018-11-14 00:47:36', 'Basic', '0', 0, 0, 0),
(69, '', 'User', 'ksjdhakjshd', ' ', 'akjdhakjsdh@m.com', '$2y$10$yi2UYy52zFih/IZaFtDDyO1ECJwOq2PBl4PEF34wBLBYC9KhmJVgm', '', NULL, '1826912837', '', '', '', '', '', '', '', '', '', '', NULL, '2018-11-14 08:22:14', '2018-11-14 08:22:14', 'Basic', '0', 0, 0, 0),
(70, '', 'User', 'tanya', ' ', 'ksjdgkgjd@khg.com', '$2y$10$esKLqCftNQ3wZ5T5ih/tY.K9a/zyiy05k4b.eBKf2o1GuMdeBAjOO', '', NULL, '6767676767676', '', '', '', '', '', '', '', '', '', '', NULL, '2018-11-15 05:15:45', '2018-11-15 05:15:45', 'Basic', '0', 0, 0, 0),
(71, '', 'User', 'tanya1', ' ', 'ksjhdkadjhf@cmom.com', '$2y$10$dRbdoNH3zVtYvMFfMOYP6.vxaTpgY3OWN69uAA0U4ogABgDzDQHg.', '', NULL, '76766676767676', '', '', '', '', '', '', '', '', '', '', NULL, '2018-11-15 05:16:13', '2018-11-15 05:16:13', 'Basic', '0', 0, 0, 0),
(72, '', 'User', 'New ', ' ', 'aldkdlah@dsdj.com', '$2y$10$w3.rP.Q4AP2aMigK/hKBmesnVnoyjzObi62OSPneNjo.D4x6rYKVy', '', NULL, '090000000', '', '', '', '', '', '', '', '', '', '', 'AeRXt3tLIDvC0vPCl1kDjC7hLR8KglJjT0H6PtYlrY2spq5CMxXAgsloG4Cj', '2018-11-25 00:36:58', '2018-11-25 05:44:39', 'Basic', 'Sealant Treatment : 2000 , Sealant Treatment : 20000 , Tooth Veneers ProcedurePeriodontal Flap Surgery : 10000 , Sealant Treatment : 10000 , ', 0, 0, 0),
(73, '', 'User', 'akdjh', ' ', 'aldadh@cklj.com', '$2y$10$P1gx2tpKr5SndOMoAcOIp.M9IefrCbhGxYfQHeogjPWYlzDQDcXim', '', NULL, '100000010000', '', '', '', '', '', '', '', '', '', '', NULL, '2018-12-14 00:41:50', '2018-12-14 00:41:50', 'Basic', '', 0, 66, 0),
(74, '', 'User', 'askdjalskjd', ' ', 'alkdja@jc.com', '$2y$10$CX8IadCFsWcLiawnQupNT..6ELJIaG0iaHbyV/po35Z1iMRzc8iDC', '', NULL, '0230230240', '', '', '', '', '', '', '', '', '', '', NULL, '2018-12-14 00:52:36', '2018-12-14 00:54:05', 'Basic', '', 0, 1, 0),
(75, '', 'User', 'asdjhasd', ' ', 'akjdh@cij.com', '$2y$10$tr.lxz5vu0uDQC29QZpbsecNdo6ak8gwT5WZ/pAzzTVEEytgZ1T.i', '', NULL, '45458989889', '', '', '', '', '', '', '', '', '', '', NULL, '2018-12-14 00:54:05', '2018-12-14 00:54:05', 'Basic', '', 0, 66, 0),
(76, '', 'User', 'alkdjallkh', ' ', 'LSDHK@kj.com', '$2y$10$npzw0p7cfz1kNp8P0Dv47ekhXyQp6hF00N59ijEXGQPgVmHTfa0m2', '', NULL, '77777777777', '', '', '', '', '', '', '', '', '', '', NULL, '2018-12-14 01:05:27', '2018-12-14 01:05:27', 'Basic', '', 0, 66, 0),
(77, '', 'User', 'akdjh', ' ', 'kajdh@kj.com', '$2y$10$L2UolSwFDn7Zfq1jNNyAmuSTdl7O9bGQx9xGKkDxYe//7QuxgtEk2', '', NULL, '7717171717', '', '', '', '', '', '', '', '', '', '', NULL, '2018-12-14 01:08:41', '2018-12-14 01:08:41', 'Basic', '', 0, 66, 0),
(78, '', 'User', 'asdljh', ' ', 'ahkjdsha@jc.com', '$2y$10$EKiHJzuc9jtFzl7ApW1btuyNc0XAT9AZCdYqC3JAkC5SB3n169FUS', '', NULL, '872493843', '', '', '', '', '', '', '', '', '', '', NULL, '2018-12-14 01:12:05', '2018-12-14 01:12:05', 'Basic', '', 0, 66, 0),
(79, '', 'User', 'asdjhla', ' ', 'ljsadhlash@kc.com', '$2y$10$82DU9mk2R.65mJQfi.C8w.caBzaIXizz0cTBPFWrKMG0kpD6VWDSS', '', NULL, '923701983', '', '', '', '', '', '', '', '', '', '', NULL, '2018-12-14 01:16:53', '2018-12-14 01:16:53', 'Basic', '', 0, 66, 0),
(80, '', 'User', 'lambda', ' ', 'ksflaskdj@lkj.com', '$2y$10$VVOce2.qbmI9HC1VX4v7UuIHsuPYbGWzoUuxAEJQwyKvUhNKA/vKW', '', NULL, '12345678', '', '', '', '', '', '', '', '', '', '', NULL, '2018-12-14 02:36:58', '2018-12-14 02:36:58', 'Basic', '', 0, 66, 0),
(81, '', 'User', 'asldjhlkDHALSKDJL', ' ', 'jdaksld@lask.com', '$2y$10$o5uRrJFowYnFG.U0QQIB1O/sUn/MyIOiH4jmfSog4AVgBgcHvdtH.', '', NULL, '81731923898', '', '', '', '', '', '', '', '', '', '', NULL, '2018-12-14 02:38:28', '2018-12-14 02:38:28', 'Basic', '', 0, 66, 0),
(82, '', 'User', 'aksjdh', ' ', 'aojdo@k.com', '$2y$10$ijc5JSEYWC8qcIT5XoSaw.qPNHJXFhS6lYT6V2LBs.v7g9eBIgj.O', '', NULL, '9284091283', '', '', '', '', '', '', '', '', '', '', NULL, '2018-12-14 02:39:48', '2018-12-14 02:39:48', 'Basic', '', 0, 66, 0),
(83, '', 'User', 'aksfjakj', ' ', 'aldjslad@kk.com', '$2y$10$mZ/mgYjN06Xez9YaI9nqMuGgMrz1r9yIz9Zk2EPppDleuybaaDPSW', '', NULL, '92391238183', '', '', '', '', '', '', '', '', '', '', NULL, '2018-12-14 10:22:12', '2018-12-14 10:22:12', 'Basic', '', 0, 66, 0),
(84, '', 'User', 'ksdjak', ' ', 'ksjdkdj@jj.com', '$2y$10$f51wQah/JnsaLFcft0W1v.8t98EGpyEd7kjvXbXlMGt2wdpZEHsXS', '', NULL, '7273723', '', '', '', '', '', '', '', '', '', '', NULL, '2018-12-14 10:23:02', '2018-12-14 10:23:02', 'Basic', '', 0, 66, 0),
(85, '', 'User', 'alksdjalskjd', ' ', 'alksdjaslkdj@kj.com', '$2y$10$Wi6lDm0sBN.7ov4vf721dOFPNyv9ddor4tLKhhU6x1DeLwr5i.8TK', '', NULL, '98789987897', '', '', '', '', '', '', '', '', '', '', 'W06UmMzNLqVWIPxAXe2IAGxOjcqjC2MUEfOHaEHIJ2oBXMS2Ti6tFFeCP7wm', '2018-12-14 10:57:44', '2018-12-14 11:10:09', 'Basic', '', 0, 66, 2),
(86, '', 'User', 'someone', ' ', 'daljsdha@kh.com', '$2y$10$p4ViXQkpXTI1tTKZfmRl0u8jNSyYwrEOEcQATKl7praLj751bdUm6', '', NULL, '7676767676', '', '', '', '', '', '', '', '', '', '', 'rDw1HapMFCcdFhE7DX5W37YHF8oNKI2eX379avBln5EYOBBmh8BWe7AxK9Eg', '2018-12-14 11:02:21', '2018-12-14 11:02:44', 'Basic', '', 0, 85, 0),
(87, '', 'User', 'asdlkhasldjh', ' ', 'lkhalsdkhasld@asd.com', '$2y$10$xrlK4qWrmRZpaSY8wIF7y.vBV6MFE5z2aA4UpuSvZs2Up6bzQzkxa', '', NULL, '7696987987978', '', '', '', '', '', '', '', '', '', '', 'qgktBNQweS6WQFjRnPED657RYB8UVIG1MTLILnGPbIrD6ugeQyldTFzPTV15', '2018-12-14 11:10:09', '2018-12-14 11:10:20', 'Basic', '', 0, 85, 0);
