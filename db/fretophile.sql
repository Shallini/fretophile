-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2013 at 10:35 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fretophile`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `versions_data` text NOT NULL,
  `name` tinyint(1) NOT NULL DEFAULT '1',
  `description` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `versions_data`, `name`, `description`) VALUES
(1, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(2, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(3, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(4, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(5, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(6, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(7, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(8, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(9, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(10, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(11, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(12, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(13, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(14, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(15, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(16, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(17, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(18, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(19, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(20, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(21, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(22, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(23, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(24, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(25, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(26, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(27, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(28, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(29, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(30, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(31, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(32, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(33, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(34, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(35, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(36, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(37, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(38, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(39, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(40, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(41, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(42, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(43, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(44, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(45, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(46, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(47, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(48, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1),
(49, 'a:2:{s:5:"small";a:1:{s:6:"resize";a:2:{i:0;i:200;i:1;N;}}s:6:"medium";a:1:{s:6:"resize";a:2:{i:0;i:800;i:1;N;}}}', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_photo`
--

CREATE TABLE IF NOT EXISTS `gallery_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_id` int(11) NOT NULL,
  `rank` int(11) NOT NULL DEFAULT '0',
  `name` varchar(512) NOT NULL DEFAULT '',
  `description` text,
  `file_name` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `fk_gallery_photo_gallery1` (`gallery_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `gallery_photo`
--


-- --------------------------------------------------------

--
-- Table structure for table `punbb_bans`
--

CREATE TABLE IF NOT EXISTS `punbb_bans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(200) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `expire` int(10) unsigned DEFAULT NULL,
  `ban_creator` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `punbb_bans`
--


-- --------------------------------------------------------

--
-- Table structure for table `punbb_categories`
--

CREATE TABLE IF NOT EXISTS `punbb_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(80) NOT NULL DEFAULT 'New Category',
  `disp_position` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `punbb_categories`
--

INSERT INTO `punbb_categories` (`id`, `cat_name`, `disp_position`) VALUES
(1, 'Test category', 1);

-- --------------------------------------------------------

--
-- Table structure for table `punbb_censoring`
--

CREATE TABLE IF NOT EXISTS `punbb_censoring` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `search_for` varchar(60) NOT NULL DEFAULT '',
  `replace_with` varchar(60) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `punbb_censoring`
--


-- --------------------------------------------------------

--
-- Table structure for table `punbb_config`
--

CREATE TABLE IF NOT EXISTS `punbb_config` (
  `conf_name` varchar(255) NOT NULL DEFAULT '',
  `conf_value` text,
  PRIMARY KEY (`conf_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `punbb_config`
--

INSERT INTO `punbb_config` (`conf_name`, `conf_value`) VALUES
('o_cur_version', '1.4.2'),
('o_database_revision', '5'),
('o_board_title', 'My PunBB forum'),
('o_board_desc', 'Unfortunately no one can be told what PunBB is — you have to see it for yourself'),
('o_default_timezone', '0'),
('o_time_format', 'H:i:s'),
('o_date_format', 'Y-m-d'),
('o_check_for_updates', '1'),
('o_check_for_versions', '1'),
('o_timeout_visit', '5400'),
('o_timeout_online', '300'),
('o_redirect_delay', '0'),
('o_show_version', '0'),
('o_show_user_info', '1'),
('o_show_post_count', '1'),
('o_signatures', '1'),
('o_smilies', '1'),
('o_smilies_sig', '1'),
('o_make_links', '1'),
('o_default_lang', 'English'),
('o_default_style', 'Oxygen'),
('o_default_user_group', '3'),
('o_topic_review', '15'),
('o_disp_topics_default', '30'),
('o_disp_posts_default', '25'),
('o_indent_num_spaces', '4'),
('o_quote_depth', '3'),
('o_quickpost', '1'),
('o_users_online', '1'),
('o_censoring', '0'),
('o_ranks', '1'),
('o_show_dot', '0'),
('o_topic_views', '1'),
('o_quickjump', '1'),
('o_gzip', '0'),
('o_additional_navlinks', ''),
('o_report_method', '0'),
('o_regs_report', '0'),
('o_default_email_setting', '1'),
('o_mailing_list', 'shallini_impinge@yahoo.com'),
('o_avatars', '1'),
('o_avatars_dir', 'img/avatars'),
('o_avatars_width', '60'),
('o_avatars_height', '60'),
('o_avatars_size', '15360'),
('o_search_all_forums', '1'),
('o_sef', 'Default'),
('o_admin_email', 'shallini_impinge@yahoo.com'),
('o_webmaster_email', 'shallini_impinge@yahoo.com'),
('o_subscriptions', '1'),
('o_smtp_host', NULL),
('o_smtp_user', NULL),
('o_smtp_pass', NULL),
('o_smtp_ssl', '0'),
('o_regs_allow', '1'),
('o_regs_verify', '0'),
('o_announcement', '0'),
('o_announcement_heading', 'Sample announcement'),
('o_announcement_message', '<p>Enter your announcement here.</p>'),
('o_rules', '0'),
('o_rules_message', 'Enter your rules here.'),
('o_maintenance', '0'),
('o_maintenance_message', 'The forums are temporarily down for maintenance. Please try again in a few minutes.<br /><br />Administrator'),
('o_default_dst', '0'),
('p_message_bbcode', '1'),
('p_message_img_tag', '1'),
('p_message_all_caps', '1'),
('p_subject_all_caps', '1'),
('p_sig_all_caps', '1'),
('p_sig_bbcode', '1'),
('p_sig_img_tag', '0'),
('p_sig_length', '400'),
('p_sig_lines', '4'),
('p_allow_banned_email', '1'),
('p_allow_dupe_email', '0'),
('p_force_guest_email', '1'),
('o_show_moderators', '0'),
('o_mask_passwords', '1');

-- --------------------------------------------------------

--
-- Table structure for table `punbb_extensions`
--

CREATE TABLE IF NOT EXISTS `punbb_extensions` (
  `id` varchar(150) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `version` varchar(25) NOT NULL DEFAULT '',
  `description` text,
  `author` varchar(50) NOT NULL DEFAULT '',
  `uninstall` text,
  `uninstall_note` text,
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  `dependencies` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `punbb_extensions`
--


-- --------------------------------------------------------

--
-- Table structure for table `punbb_extension_hooks`
--

CREATE TABLE IF NOT EXISTS `punbb_extension_hooks` (
  `id` varchar(150) NOT NULL DEFAULT '',
  `extension_id` varchar(50) NOT NULL DEFAULT '',
  `code` text,
  `installed` int(10) unsigned NOT NULL DEFAULT '0',
  `priority` tinyint(1) unsigned NOT NULL DEFAULT '5',
  PRIMARY KEY (`id`,`extension_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `punbb_extension_hooks`
--


-- --------------------------------------------------------

--
-- Table structure for table `punbb_forums`
--

CREATE TABLE IF NOT EXISTS `punbb_forums` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `forum_name` varchar(80) NOT NULL DEFAULT 'New forum',
  `forum_desc` text,
  `redirect_url` varchar(100) DEFAULT NULL,
  `moderators` text,
  `num_topics` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `num_posts` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `last_post` int(10) unsigned DEFAULT NULL,
  `last_post_id` int(10) unsigned DEFAULT NULL,
  `last_poster` varchar(200) DEFAULT NULL,
  `sort_by` tinyint(1) NOT NULL DEFAULT '0',
  `disp_position` int(10) NOT NULL DEFAULT '0',
  `cat_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `punbb_forums`
--

INSERT INTO `punbb_forums` (`id`, `forum_name`, `forum_desc`, `redirect_url`, `moderators`, `num_topics`, `num_posts`, `last_post`, `last_post_id`, `last_poster`, `sort_by`, `disp_position`, `cat_id`) VALUES
(1, 'Test forum', 'This is just a test forum', NULL, NULL, 1, 1, 1359031510, 1, 'shallini_impinge', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `punbb_forum_perms`
--

CREATE TABLE IF NOT EXISTS `punbb_forum_perms` (
  `group_id` int(10) NOT NULL DEFAULT '0',
  `forum_id` int(10) NOT NULL DEFAULT '0',
  `read_forum` tinyint(1) NOT NULL DEFAULT '1',
  `post_replies` tinyint(1) NOT NULL DEFAULT '1',
  `post_topics` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`group_id`,`forum_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `punbb_forum_perms`
--


-- --------------------------------------------------------

--
-- Table structure for table `punbb_forum_subscriptions`
--

CREATE TABLE IF NOT EXISTS `punbb_forum_subscriptions` (
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `forum_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`forum_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `punbb_forum_subscriptions`
--


-- --------------------------------------------------------

--
-- Table structure for table `punbb_groups`
--

CREATE TABLE IF NOT EXISTS `punbb_groups` (
  `g_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `g_title` varchar(50) NOT NULL DEFAULT '',
  `g_user_title` varchar(50) DEFAULT NULL,
  `g_moderator` tinyint(1) NOT NULL DEFAULT '0',
  `g_mod_edit_users` tinyint(1) NOT NULL DEFAULT '0',
  `g_mod_rename_users` tinyint(1) NOT NULL DEFAULT '0',
  `g_mod_change_passwords` tinyint(1) NOT NULL DEFAULT '0',
  `g_mod_ban_users` tinyint(1) NOT NULL DEFAULT '0',
  `g_read_board` tinyint(1) NOT NULL DEFAULT '1',
  `g_view_users` tinyint(1) NOT NULL DEFAULT '1',
  `g_post_replies` tinyint(1) NOT NULL DEFAULT '1',
  `g_post_topics` tinyint(1) NOT NULL DEFAULT '1',
  `g_edit_posts` tinyint(1) NOT NULL DEFAULT '1',
  `g_delete_posts` tinyint(1) NOT NULL DEFAULT '1',
  `g_delete_topics` tinyint(1) NOT NULL DEFAULT '1',
  `g_set_title` tinyint(1) NOT NULL DEFAULT '1',
  `g_search` tinyint(1) NOT NULL DEFAULT '1',
  `g_search_users` tinyint(1) NOT NULL DEFAULT '1',
  `g_send_email` tinyint(1) NOT NULL DEFAULT '1',
  `g_post_flood` smallint(6) NOT NULL DEFAULT '30',
  `g_search_flood` smallint(6) NOT NULL DEFAULT '30',
  `g_email_flood` smallint(6) NOT NULL DEFAULT '60',
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `punbb_groups`
--

INSERT INTO `punbb_groups` (`g_id`, `g_title`, `g_user_title`, `g_moderator`, `g_mod_edit_users`, `g_mod_rename_users`, `g_mod_change_passwords`, `g_mod_ban_users`, `g_read_board`, `g_view_users`, `g_post_replies`, `g_post_topics`, `g_edit_posts`, `g_delete_posts`, `g_delete_topics`, `g_set_title`, `g_search`, `g_search_users`, `g_send_email`, `g_post_flood`, `g_search_flood`, `g_email_flood`) VALUES
(1, 'Administrators', 'Administrator', 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0),
(2, 'Guest', NULL, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 60, 30, 0),
(3, 'Members', NULL, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 60, 30, 60),
(4, 'Moderators', 'Moderator', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `punbb_online`
--

CREATE TABLE IF NOT EXISTS `punbb_online` (
  `user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `ident` varchar(200) NOT NULL DEFAULT '',
  `logged` int(10) unsigned NOT NULL DEFAULT '0',
  `idle` tinyint(1) NOT NULL DEFAULT '0',
  `csrf_token` varchar(40) NOT NULL DEFAULT '',
  `prev_url` varchar(255) DEFAULT NULL,
  `last_post` int(10) unsigned DEFAULT NULL,
  `last_search` int(10) unsigned DEFAULT NULL,
  UNIQUE KEY `punbb_online_user_id_ident_idx` (`user_id`,`ident`(25)),
  KEY `punbb_online_ident_idx` (`ident`(25)),
  KEY `punbb_online_logged_idx` (`logged`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `punbb_online`
--

INSERT INTO `punbb_online` (`user_id`, `ident`, `logged`, `idle`, `csrf_token`, `prev_url`, `last_post`, `last_search`) VALUES
(1, '50.131.237.45', 1359354728, 0, '13d6fdbe79844a74de70b95a9d08cb1b3460e177', 'http://ganga.impingesolutions.com/projects/web/Jon_Chickneas/Fretophile/Source/fretophile/punbb/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `punbb_posts`
--

CREATE TABLE IF NOT EXISTS `punbb_posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `poster` varchar(200) NOT NULL DEFAULT '',
  `poster_id` int(10) unsigned NOT NULL DEFAULT '1',
  `poster_ip` varchar(39) DEFAULT NULL,
  `poster_email` varchar(80) DEFAULT NULL,
  `message` text,
  `hide_smilies` tinyint(1) NOT NULL DEFAULT '0',
  `posted` int(10) unsigned NOT NULL DEFAULT '0',
  `edited` int(10) unsigned DEFAULT NULL,
  `edited_by` varchar(200) DEFAULT NULL,
  `topic_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `punbb_posts_topic_id_idx` (`topic_id`),
  KEY `punbb_posts_multi_idx` (`poster_id`,`topic_id`),
  KEY `punbb_posts_posted_idx` (`posted`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `punbb_posts`
--

INSERT INTO `punbb_posts` (`id`, `poster`, `poster_id`, `poster_ip`, `poster_email`, `message`, `hide_smilies`, `posted`, `edited`, `edited_by`, `topic_id`) VALUES
(1, 'shallini_impinge', 2, '127.0.0.1', NULL, 'If you are looking at this (which I guess you are), the install of PunBB appears to have worked! Now log in and head over to the administration control panel to configure your forum.', 0, 1359031510, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `punbb_ranks`
--

CREATE TABLE IF NOT EXISTS `punbb_ranks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rank` varchar(50) NOT NULL DEFAULT '',
  `min_posts` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `punbb_ranks`
--

INSERT INTO `punbb_ranks` (`id`, `rank`, `min_posts`) VALUES
(1, 'New member', 0),
(2, 'Member', 10);

-- --------------------------------------------------------

--
-- Table structure for table `punbb_reports`
--

CREATE TABLE IF NOT EXISTS `punbb_reports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL DEFAULT '0',
  `topic_id` int(10) unsigned NOT NULL DEFAULT '0',
  `forum_id` int(10) unsigned NOT NULL DEFAULT '0',
  `reported_by` int(10) unsigned NOT NULL DEFAULT '0',
  `created` int(10) unsigned NOT NULL DEFAULT '0',
  `message` text,
  `zapped` int(10) unsigned DEFAULT NULL,
  `zapped_by` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `punbb_reports_zapped_idx` (`zapped`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `punbb_reports`
--


-- --------------------------------------------------------

--
-- Table structure for table `punbb_search_cache`
--

CREATE TABLE IF NOT EXISTS `punbb_search_cache` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `ident` varchar(200) NOT NULL DEFAULT '',
  `search_data` text,
  PRIMARY KEY (`id`),
  KEY `punbb_search_cache_ident_idx` (`ident`(8))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `punbb_search_cache`
--


-- --------------------------------------------------------

--
-- Table structure for table `punbb_search_matches`
--

CREATE TABLE IF NOT EXISTS `punbb_search_matches` (
  `post_id` int(10) unsigned NOT NULL DEFAULT '0',
  `word_id` int(10) unsigned NOT NULL DEFAULT '0',
  `subject_match` tinyint(1) NOT NULL DEFAULT '0',
  KEY `punbb_search_matches_word_id_idx` (`word_id`),
  KEY `punbb_search_matches_post_id_idx` (`post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `punbb_search_matches`
--

INSERT INTO `punbb_search_matches` (`post_id`, `word_id`, `subject_match`) VALUES
(1, 1, 0),
(1, 2, 0),
(1, 3, 0),
(1, 4, 0),
(1, 5, 0),
(1, 6, 0),
(1, 7, 0),
(1, 8, 0),
(1, 9, 0),
(1, 10, 0),
(1, 11, 0),
(1, 12, 0),
(1, 13, 0),
(1, 14, 0),
(1, 15, 0),
(1, 16, 0),
(1, 17, 0),
(1, 18, 0),
(1, 19, 0),
(1, 20, 0),
(1, 21, 0),
(1, 22, 0),
(1, 23, 0),
(1, 25, 1),
(1, 24, 1);

-- --------------------------------------------------------

--
-- Table structure for table `punbb_search_words`
--

CREATE TABLE IF NOT EXISTS `punbb_search_words` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `word` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`word`),
  KEY `punbb_search_words_id_idx` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `punbb_search_words`
--

INSERT INTO `punbb_search_words` (`id`, `word`) VALUES
(1, 'you'),
(2, 'are'),
(3, 'looking'),
(4, 'this'),
(5, 'which'),
(6, 'guess'),
(7, 'the'),
(8, 'install'),
(9, 'punbb'),
(10, 'appears'),
(11, 'have'),
(12, 'worked'),
(13, 'now'),
(14, 'log'),
(15, 'and'),
(16, 'head'),
(17, 'over'),
(18, 'administration'),
(19, 'control'),
(20, 'panel'),
(21, 'configure'),
(22, 'your'),
(23, 'forum'),
(24, 'test'),
(25, 'post');

-- --------------------------------------------------------

--
-- Table structure for table `punbb_subscriptions`
--

CREATE TABLE IF NOT EXISTS `punbb_subscriptions` (
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `topic_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`topic_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `punbb_subscriptions`
--


-- --------------------------------------------------------

--
-- Table structure for table `punbb_topics`
--

CREATE TABLE IF NOT EXISTS `punbb_topics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `poster` varchar(200) NOT NULL DEFAULT '',
  `subject` varchar(255) NOT NULL DEFAULT '',
  `posted` int(10) unsigned NOT NULL DEFAULT '0',
  `first_post_id` int(10) unsigned NOT NULL DEFAULT '0',
  `last_post` int(10) unsigned NOT NULL DEFAULT '0',
  `last_post_id` int(10) unsigned NOT NULL DEFAULT '0',
  `last_poster` varchar(200) DEFAULT NULL,
  `num_views` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `num_replies` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `closed` tinyint(1) NOT NULL DEFAULT '0',
  `sticky` tinyint(1) NOT NULL DEFAULT '0',
  `moved_to` int(10) unsigned DEFAULT NULL,
  `forum_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `punbb_topics_forum_id_idx` (`forum_id`),
  KEY `punbb_topics_moved_to_idx` (`moved_to`),
  KEY `punbb_topics_last_post_idx` (`last_post`),
  KEY `punbb_topics_first_post_id_idx` (`first_post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `punbb_topics`
--

INSERT INTO `punbb_topics` (`id`, `poster`, `subject`, `posted`, `first_post_id`, `last_post`, `last_post_id`, `last_poster`, `num_views`, `num_replies`, `closed`, `sticky`, `moved_to`, `forum_id`) VALUES
(1, 'shallini_impinge', 'Test post', 1359031510, 1, 1359031510, 1, 'shallini_impinge', 0, 0, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `punbb_users`
--

CREATE TABLE IF NOT EXISTS `punbb_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(10) unsigned NOT NULL DEFAULT '3',
  `username` varchar(200) NOT NULL DEFAULT '',
  `password` varchar(40) NOT NULL DEFAULT '',
  `salt` varchar(12) DEFAULT NULL,
  `email` varchar(80) NOT NULL DEFAULT '',
  `title` varchar(50) DEFAULT NULL,
  `realname` varchar(40) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `linkedin` varchar(100) DEFAULT NULL,
  `skype` varchar(100) DEFAULT NULL,
  `jabber` varchar(80) DEFAULT NULL,
  `icq` varchar(12) DEFAULT NULL,
  `msn` varchar(80) DEFAULT NULL,
  `aim` varchar(30) DEFAULT NULL,
  `yahoo` varchar(30) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `signature` text,
  `disp_topics` tinyint(3) unsigned DEFAULT NULL,
  `disp_posts` tinyint(3) unsigned DEFAULT NULL,
  `email_setting` tinyint(1) NOT NULL DEFAULT '1',
  `notify_with_post` tinyint(1) NOT NULL DEFAULT '0',
  `auto_notify` tinyint(1) NOT NULL DEFAULT '0',
  `show_smilies` tinyint(1) NOT NULL DEFAULT '1',
  `show_img` tinyint(1) NOT NULL DEFAULT '1',
  `show_img_sig` tinyint(1) NOT NULL DEFAULT '1',
  `show_avatars` tinyint(1) NOT NULL DEFAULT '1',
  `show_sig` tinyint(1) NOT NULL DEFAULT '1',
  `access_keys` tinyint(1) NOT NULL DEFAULT '0',
  `timezone` float NOT NULL DEFAULT '0',
  `dst` tinyint(1) NOT NULL DEFAULT '0',
  `time_format` int(10) unsigned NOT NULL DEFAULT '0',
  `date_format` int(10) unsigned NOT NULL DEFAULT '0',
  `language` varchar(25) NOT NULL DEFAULT 'English',
  `style` varchar(25) NOT NULL DEFAULT 'Oxygen',
  `num_posts` int(10) unsigned NOT NULL DEFAULT '0',
  `last_post` int(10) unsigned DEFAULT NULL,
  `last_search` int(10) unsigned DEFAULT NULL,
  `last_email_sent` int(10) unsigned DEFAULT NULL,
  `registered` int(10) unsigned NOT NULL DEFAULT '0',
  `registration_ip` varchar(39) NOT NULL DEFAULT '0.0.0.0',
  `last_visit` int(10) unsigned NOT NULL DEFAULT '0',
  `admin_note` varchar(30) DEFAULT NULL,
  `activate_string` varchar(80) DEFAULT NULL,
  `activate_key` varchar(8) DEFAULT NULL,
  `avatar` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `avatar_width` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `avatar_height` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `punbb_users_registered_idx` (`registered`),
  KEY `punbb_users_username_idx` (`username`(8))
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `punbb_users`
--

INSERT INTO `punbb_users` (`id`, `group_id`, `username`, `password`, `salt`, `email`, `title`, `realname`, `url`, `facebook`, `twitter`, `linkedin`, `skype`, `jabber`, `icq`, `msn`, `aim`, `yahoo`, `location`, `signature`, `disp_topics`, `disp_posts`, `email_setting`, `notify_with_post`, `auto_notify`, `show_smilies`, `show_img`, `show_img_sig`, `show_avatars`, `show_sig`, `access_keys`, `timezone`, `dst`, `time_format`, `date_format`, `language`, `style`, `num_posts`, `last_post`, `last_search`, `last_email_sent`, `registered`, `registration_ip`, `last_visit`, `admin_note`, `activate_string`, `activate_key`, `avatar`, `avatar_width`, `avatar_height`) VALUES
(1, 2, 'Guest', 'Guest', NULL, 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 'English', 'Oxygen', 0, NULL, NULL, NULL, 0, '0.0.0.0', 0, NULL, NULL, NULL, 0, 0, 0),
(2, 1, 'shallini_impinge', '7815d6542c47819d44609ef9d17846e9820334df', 'GZ"R{1x@aVFf', 'shallini_impinge@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 'English', 'Oxygen', 1, 1359031510, NULL, NULL, 1359031510, '127.0.0.1', 1359033958, NULL, NULL, NULL, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_albums`
--

CREATE TABLE IF NOT EXISTS `tbl_albums` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `pid` int(4) NOT NULL,
  `url` text NOT NULL,
  `translations` text NOT NULL,
  `imgsOrder` text NOT NULL,
  `imgsInfo` text NOT NULL,
  `cover` varchar(256) NOT NULL,
  `itemInfoShop` text NOT NULL,
  `author` varchar(128) NOT NULL,
  `tags` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `tbl_albums`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_collections`
--

CREATE TABLE IF NOT EXISTS `tbl_collections` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `pid` int(4) NOT NULL,
  `url` text NOT NULL,
  `translations` text NOT NULL,
  `albums` varchar(128) NOT NULL,
  `author` varchar(128) NOT NULL,
  `tags` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tbl_collections`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_forum_lookup`
--

CREATE TABLE IF NOT EXISTS `tbl_forum_lookup` (
  `forum_luid` int(11) NOT NULL AUTO_INCREMENT,
  `galleryid` int(11) NOT NULL,
  `forumthreadid` int(11) NOT NULL,
  PRIMARY KEY (`forum_luid`,`galleryid`,`forumthreadid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_forum_lookup`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_forum_post_lookup`
--

CREATE TABLE IF NOT EXISTS `tbl_forum_post_lookup` (
  `forum_post_luid` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  PRIMARY KEY (`forum_post_luid`,`post_id`,`image_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_forum_post_lookup`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE IF NOT EXISTS `tbl_gallery` (
  `galleryid` int(11) NOT NULL AUTO_INCREMENT,
  `siteid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`galleryid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`galleryid`, `siteid`, `userid`, `name`) VALUES
(1, 1, 250, 'test'),
(2, 1, 250, 'test'),
(3, 1, 250, 'test'),
(4, 1, 250, 'test'),
(5, 1, 250, 'test'),
(6, 1, 250, 'test'),
(7, 1, 250, 'test'),
(8, 1, 250, 'test'),
(9, 1, 250, 'test'),
(10, 0, 250, 'test'),
(11, 0, 250, 'test'),
(12, 0, 250, 'test'),
(13, 0, 250, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galleryConfig`
--

CREATE TABLE IF NOT EXISTS `tbl_galleryConfig` (
  `type` varchar(16) NOT NULL,
  `config` text NOT NULL,
  PRIMARY KEY (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_galleryConfig`
--

INSERT INTO `tbl_galleryConfig` (`type`, `config`) VALUES
('gallery', 'a:25:{s:8:"cssTheme";s:6:"simple";s:10:"thumbStyle";s:9:"landscape";s:10:"thumbWidth";i:160;s:10:"ratioThumb";d:0.6999999999999999555910790149937383830547332763671875;s:8:"imgWidth";i:900;s:7:"thWidth";i:200;s:7:"quality";i:75;s:7:"sharpen";i:20;s:7:"gFolder";s:9:"galleries";s:12:"keepOriginal";b:0;s:10:"useWysiwyg";b:1;s:9:"usedTitle";s:8:"filename";s:15:"predefinedTitle";s:114:"<strong>Title:</strong> Product title <br/><strong>Model:</strong> Product model<br/><strong>Price:</strong> $ 100";s:17:"editorCreateAlbum";b:1;s:13:"editorOfOther";b:1;s:23:"editorOperateCollection";b:1;s:18:"editorSeeAllAlbums";b:1;s:16:"coreScriptPosEnd";b:0;s:14:"isMultilingual";b:1;s:15:"defaultLanguage";s:2:"en";s:9:"languages";s:6:"en, ro";s:11:"isShopStyle";b:0;s:15:"hCollectionShop";b:1;s:23:"itemWidthCollectionShop";i:140;s:12:"itemInfoShop";s:61:"ProductID\nAvailability\nName\nModel\nPrice\nCoin\nVTA\nQuantity\nUrl";}'),
('album', 'a:8:{s:14:"showAlbumTitle";b:1;s:25:"showAlbumTitleDescription";b:1;s:13:"showAlbumTags";b:1;s:11:"thTitleShow";b:0;s:10:"useInfoBox";b:1;s:15:"itemsOnPaginate";i:12;s:11:"itemsOnLine";i:4;s:12:"hideTooltips";b:0;}'),
('fancybox', 'a:10:{s:13:"titlePosition";s:6:"inside";s:13:"easingEnabled";b:1;s:12:"mouseEnabled";i:1;s:12:"transitionIn";s:7:"elastic";s:13:"transitionOut";s:7:"elastic";s:7:"speedIn";i:600;s:8:"speedOut";i:200;s:11:"overlayShow";b:1;s:5:"width";i:350;s:6:"height";s:4:"auto";}'),
('uploader', 'a:6:{s:3:"max";i:-1;s:6:"accept";s:16:"jpg|png|gif|jpeg";s:12:"unique_names";b:0;s:13:"max_file_size";i:3;s:16:"pluploadLanguage";s:4:"auto";s:8:"runtimes";s:12:"html5, flash";}'),
('collection', 'a:7:{s:19:"showCollectionTitle";b:1;s:25:"showCollectionDescription";b:1;s:18:"showCollectionTags";b:1;s:18:"combinedAlbumsTags";b:1;s:13:"showCoverName";b:1;s:20:"showCoverDescription";b:1;s:13:"showCoverTags";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery_lookup`
--

CREATE TABLE IF NOT EXISTS `tbl_gallery_lookup` (
  `glry_luid` int(11) NOT NULL AUTO_INCREMENT,
  `galleryid` int(11) NOT NULL,
  `imageid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`glry_luid`,`galleryid`,`imageid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_gallery_lookup`
--

INSERT INTO `tbl_gallery_lookup` (`glry_luid`, `galleryid`, `imageid`, `userid`) VALUES
(1, 2, 1, 250),
(2, 2, 2, 250),
(3, 3, 3, 250),
(4, 3, 4, 250),
(5, 4, 5, 250),
(6, 4, 6, 250),
(7, 5, 7, 250),
(8, 6, 8, 250),
(9, 7, 9, 250),
(10, 8, 10, 250),
(11, 8, 11, 250),
(12, 9, 12, 250),
(13, 9, 13, 250),
(14, 9, 14, 250),
(15, 10, 15, 250),
(16, 10, 16, 250),
(17, 11, 17, 250),
(18, 12, 18, 250),
(19, 12, 19, 250),
(20, 13, 20, 250),
(21, 13, 21, 250);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE IF NOT EXISTS `tbl_images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `cover` int(1) NOT NULL DEFAULT '0' COMMENT '1 for cover image , 0 for non cover image',
  PRIMARY KEY (`image_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_images`
--

INSERT INTO `tbl_images` (`image_id`, `user_id`, `item_id`, `site_id`, `filename`, `cover`) VALUES
(1, 250, 1, 1, '250_0123130136_e8672ece3a61c135a41e34319ec0431b.jpg', 0),
(10, 250, 1, 1, '250_0122130530_a90c87f81c29e2e345454b928ca138ae.jpg', 0),
(11, 250, 1, 1, '250_0122130530_9ef44b026da9d8e973d439d50e74e668.jpg', 0),
(12, 250, 1, 1, '251_0122131735_ff20128c66820eab84d55008aa1768d9.jpg', 0),
(13, 250, 1, 1, '251_0122131735_87ab7f6808189abcbd2d3270bddb5801.jpg', 0),
(14, 250, 1, 1, '251_0122131735_3635f7998ad003d06687feb1bd7c8816.jpg', 0),
(15, 250, 1, 0, '250_0123130207_e8672ece3a61c135a41e34319ec0431b.jpg', 0),
(16, 250, 1, 0, '250_0123130207_4f0691cfe48c8f74fe413c7b92391ff4.jpg', 0),
(17, 250, 81, 0, '250_0123130231_9a60e485b53437f22247c7206aec44db.JPG', 0),
(18, 250, 82, 0, '250_0123130433_e8672ece3a61c135a41e34319ec0431b.jpg', 1),
(19, 250, 82, 0, '250_0123130433_4f0691cfe48c8f74fe413c7b92391ff4.jpg', 1),
(20, 250, 83, 0, '250_0123130434_e8672ece3a61c135a41e34319ec0431b.jpg', 0),
(21, 250, 83, 0, '250_0123130434_4f0691cfe48c8f74fe413c7b92391ff4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE IF NOT EXISTS `tbl_items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `make_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `year` varchar(255) NOT NULL,
  `manufacture_location` varchar(255) NOT NULL,
  `date_created` date DEFAULT NULL,
  `last_modified` date DEFAULT NULL,
  `forsale` int(1) NOT NULL,
  `sale_price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `tbl_items`
--

INSERT INTO `tbl_items` (`item_id`, `user_id`, `make_id`, `site_id`, `type_id`, `gallery_id`, `model`, `description`, `year`, `manufacture_location`, `date_created`, `last_modified`, `forsale`, `sale_price`) VALUES
(1, 250, 1, 0, 5, 0, ' Fender Custom Shop Strat', 'The company''s first production guitar was the ML1. In order to make the best guitar for the lowest initial outlay, Chapman chose a design philosophy by which any compromises would be reflected most in the parts which would be most likely and easily replaced by the owner later. Thus those components of the ML1 which were not so easily replaced could be of the very highest quality that the limited budget allowed - the ML1 featured a solid mahogany stratocaster-style body, a maple neck and an ebony fingerboard but pickups (Chapman boasted on his YouTube channel) which the factory supplied for only 50 pence each. The ML1''s body and distinctive reverse-style headstock had a simple black finish. The ML1 was competitively priced when it initially retailed for £299, but the second batch allowed its price to be reduced even further to £199.', '2005', '', '2013-01-07', '2013-01-07', 1, '0.00'),
(2, 251, 1, 0, 4, 0, ' Fender Custom Shop Strat', 'The company''s first production guitar was the ML1. In order to make the best guitar for the lowest initial outlay, Chapman chose a design philosophy by which any compromises would be reflected most in the parts which would be most likely and easily replaced by the owner later. Thus those components of the ML1 which were not so easily replaced could be of the very highest quality that the limited budget allowed - the ML1 featured a solid mahogany stratocaster-style body, a maple neck and an ebony fingerboard but pickups (Chapman boasted on his YouTube channel) which the factory supplied for only 50 pence each. The ML1''s body and distinctive reverse-style headstock had a simple black finish. The ML1 was competitively priced when it initially retailed for £299, but the second batch allowed its price to be reduced even further to £199.', '2005', '', '2013-01-07', '2013-01-07', 2, '0.00'),
(3, 250, 22, 0, 4, 0, 'test', '', '1999', '', '2013-01-09', '2013-01-09', 2, '0.00'),
(4, 251, 22, 0, 4, 0, '', '', '2013', '', '2013-01-09', '2013-01-09', 2, '0.00'),
(5, 251, 22, 0, 4, 0, 'Les Paul Custom', '', '2013', '', '2013-01-09', '2013-01-09', 2, '0.00'),
(6, 251, 22, 0, 4, 0, 'Les Paul Custom', 'Les Paul ', '2013', '', '2013-01-09', '2013-01-09', 2, '0.00'),
(7, 250, 5, 0, 5, 0, 'Amazing 513 with quilted maple top', '', '1945', '', '2013-01-10', '2013-01-10', 2, '0.00'),
(8, 250, 5, 0, 7, 0, '', '', '1945', '', '2013-01-10', '2013-01-10', 2, '0.00'),
(9, 250, 6, 0, 7, 0, '', '', '1990', '', '2013-01-10', '2013-01-10', 2, '0.00'),
(10, 250, 6, 0, 7, 0, 'Amazing 513 with quilted maple top', '', '1990', '', '2013-01-10', '2013-01-10', 2, '0.00'),
(11, 250, 6, 0, 7, 0, 'Amazing 513 with quilted maple top', '', '1990', '', '2013-01-10', '2013-01-10', 2, '0.00'),
(12, 252, 7, 0, 6, 0, '', '', '1925', '', '2013-01-10', '2013-01-10', 2, '0.00'),
(13, 252, 22, 0, 6, 0, 'Bigun', '', '1925', '', '2013-01-10', '2013-01-10', 2, '0.00'),
(14, 252, 22, 0, 6, 0, 'Bigun', 'sadasd', '1925', '', '2013-01-10', '2013-01-10', 2, '0.00'),
(15, 252, 22, 0, 6, 0, 'Bigun', 'sadasd', '1925', '', '2013-01-10', '2013-01-10', 2, '0.00'),
(32, 250, 1, 0, 5, 0, 'Amazing 513 with quilted maple top', '', '2009', '', '2013-01-15', '2013-01-15', 2, '0.00'),
(31, 250, 1, 0, 5, 0, 'Amazing 513 with quilted maple top', '', '2009', '', '2013-01-15', '2013-01-15', 2, '0.00'),
(30, 250, 1, 0, 5, 0, 'Amazing 513 with quilted maple top', '', '2009', '', '2013-01-15', '2013-01-15', 2, '0.00'),
(29, 250, 1, 0, 5, 0, '', '', '2009', '', '2013-01-15', '2013-01-15', 2, '0.00'),
(56, 250, 0, 0, 3, 0, '', 'rewr', '1990', '', '2013-01-15', '2013-01-15', 0, '0.00'),
(63, 250, 0, 0, 6, 0, 'Amazing 513 with quilted maple top', 'dgrtryrtu', '1990', '', '2013-01-15', '2013-01-15', 1, '0.00'),
(62, 250, 0, 0, 7, 0, 'abc', 'fgght', '1990', '', '2013-01-15', '2013-01-15', 2, '0.00'),
(58, 250, 0, 0, 7, 0, '', 'testing this', '1995', '', '2013-01-15', '2013-01-15', 0, '0.00'),
(59, 250, 0, 0, 8, 0, '', 'testing thsos', '1990', '', '2013-01-15', '2013-01-15', 2, '0.00'),
(60, 250, 0, 0, 5, 0, 'Amazing 513 with quilted maple top', '', '1948', '', '2013-01-15', '2013-01-15', 2, '0.00'),
(61, 250, 0, 0, 6, 0, 'Amazing 513 with quilted maple top', '', '1945', '', '2013-01-15', '2013-01-15', 2, '0.00'),
(64, 250, 0, 0, 6, 0, 'test', 'dfhrgreopgndfjdgjfdgjlkfdjgd fhgrigu', '1999', '', '2013-01-15', '2013-01-15', 1, '0.00'),
(65, 227, 9, 1, 5, 0, 'Amazing 513 with quilted maple top', 'testing this', '1990', '', '2013-01-15', '2013-01-15', 2, '0.00'),
(66, 227, 9, 1, 5, 0, 'Amazing 513 with quilted maple top', 'testing this', '1990', '', '2013-01-16', '2013-01-16', 2, '0.00'),
(67, 227, 12, 1, 8, 0, 'Amazing 513 with quilted maple top', '', '1990', '', '2013-01-16', '2013-01-16', 2, '0.00'),
(68, 227, 12, 1, 8, 0, 'Amazing 513 with quilted maple top', '', '1990', '', '2013-01-16', '2013-01-16', 2, '0.00'),
(69, 227, 12, 1, 8, 0, 'Amazing 513 with quilted maple top', '', '1990', '', '2013-01-16', '2013-01-16', 2, '0.00'),
(70, 227, 12, 1, 6, 0, 'Amazing 513 with quilted maple top', '', '1990', '', '2013-01-16', '2013-01-16', 2, '0.00'),
(71, 250, 3, 0, 5, 0, 'abc', 'sdff', '1945', '', '2013-01-20', '2013-01-20', 1, '1000.00'),
(72, 250, 3, 0, 5, 0, 'abc', 'sdff', '1945', '', '2013-01-20', '2013-01-20', 1, '1000.00'),
(73, 250, 3, 0, 5, 0, 'abc', 'sdff', '1945', '', '2013-01-20', '2013-01-20', 1, '1000.00'),
(74, 250, 9, 0, 7, 0, 'abc', '', '1999', '', '2013-01-20', '2013-01-20', 1, '5000.00'),
(75, 250, 3, 0, 5, 0, 'abc', '', '2005', '', '2013-01-22', '2013-01-22', 2, '0.00'),
(76, 250, 3, 0, 4, 4, 'travel guitar', '', '1945', '', '2013-01-22', '2013-01-22', 2, '0.00'),
(77, 250, 12, 0, 3, 8, 'bjbh', 'bhjb', 's', '', '2013-01-22', '2013-01-22', 2, '0.00'),
(78, 251, 1, 0, 4, 9, '513', 'Rosewood Neck 513', '2011', '', '2013-01-22', '2013-01-22', 2, '0.00'),
(79, 250, 14, 0, 5, 0, 'teste', '', '2007', '', '2013-01-23', '2013-01-23', 2, '0.00'),
(80, 250, 3, 0, 5, 0, 'teste', '', '2007', '', '2013-01-23', '2013-01-23', 2, '0.00'),
(81, 250, 3, 0, 4, 11, 'test', 'testing', '2006', '', '2013-01-23', '2013-01-23', 2, '0.00'),
(82, 250, 3, 0, 5, 12, 'test', '', '2006', '', '2013-01-23', '2013-01-23', 2, '0.00'),
(83, 250, 3, 0, 5, 13, 'teste', '', '2007', '', '2013-01-23', '2013-01-23', 2, '0.00'),
(84, 250, 3, 0, 3, 0, 'test', '', '2006', '', '2013-01-23', '2013-01-23', 2, '0.00'),
(85, 250, 3, 0, 3, 0, 'test', '', '2006', '', '2013-01-23', '2013-01-23', 2, '0.00'),
(86, 251, 1, 0, 7, 0, 'Custom 22', 'This guitar is rad', '2011', '', '2013-01-23', '2013-01-23', 1, '3500.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_itemtype`
--

CREATE TABLE IF NOT EXISTS `tbl_itemtype` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `siteid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parentid` int(11) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_itemtype`
--

INSERT INTO `tbl_itemtype` (`type_id`, `siteid`, `name`, `parentid`) VALUES
(3, 1, 'Acoustic Guitar', 0),
(4, 1, 'Electric Guitar', 0),
(5, 1, 'Acoustic Bass', 0),
(6, 1, 'Electric Bass ', 0),
(7, 0, 'Mandolin', 0),
(8, 0, 'Ukulele', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_make`
--

CREATE TABLE IF NOT EXISTS `tbl_make` (
  `make_id` int(11) NOT NULL AUTO_INCREMENT,
  `siteid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`make_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_make`
--

INSERT INTO `tbl_make` (`make_id`, `siteid`, `name`, `description`) VALUES
(1, 0, 'PRS', ''),
(2, 0, 'Fender', ''),
(3, 0, 'Pcs', ''),
(4, 0, 'Gibson', ''),
(5, 0, 'aaa', ''),
(6, 0, 'qw', ''),
(7, 0, 'Martin', ''),
(8, 0, 'test', NULL),
(9, 0, 'test1', NULL),
(10, 1, 'Pca', NULL),
(11, 1, 'pp', NULL),
(12, 1, 'pc', NULL),
(13, 0, '', NULL),
(14, 0, 'tets', NULL),
(15, 0, 's', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recover`
--

CREATE TABLE IF NOT EXISTS `tbl_recover` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `auth_id` int(11) NOT NULL COMMENT 'Generate random no.',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_recover`
--

INSERT INTO `tbl_recover` (`id`, `author_id`, `auth_id`, `create_time`, `status`) VALUES
(1, 250, 9801, '2013-01-22 04:30:06', 1),
(2, 250, 8208, '2013-01-22 04:39:03', 1),
(3, 250, 5589, '2013-01-23 21:46:51', 1),
(4, 250, 30424, '2013-01-23 21:31:55', 0),
(5, 250, 5694, '2013-01-23 22:41:50', 1),
(6, 250, 15647, '2013-01-23 23:44:48', 1),
(7, 250, 1997, '2013-01-24 01:34:02', 1),
(8, 251, 27170, '2013-01-24 05:45:54', 0),
(9, 251, 27046, '2013-01-24 08:41:58', 0),
(10, 251, 11026, '2013-01-25 08:13:58', 0),
(11, 251, 24057, '2013-01-25 08:25:30', 0),
(12, 251, 11496, '2013-01-25 18:07:47', 0),
(13, 251, 23290, '2013-01-27 16:37:51', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sites`
--

CREATE TABLE IF NOT EXISTS `tbl_sites` (
  `siteid` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `viewsLocation` varchar(255) NOT NULL,
  `controllerLocations` varchar(255) NOT NULL,
  `modelLocations` varchar(255) NOT NULL,
  PRIMARY KEY (`siteid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_sites`
--

INSERT INTO `tbl_sites` (`siteid`, `url`, `title`, `viewsLocation`, `controllerLocations`, `modelLocations`) VALUES
(1, 'www.test.com', '', '', '', ''),
(2, 'http://yahoo.com', '', '', '', ''),
(3, 'http://yahoo.com', '', '', '', ''),
(4, '', '', '', '', ''),
(5, '', '', '', '', ''),
(6, '', '', '', '', ''),
(7, '', '', '', '', ''),
(8, '', '', '', '', ''),
(9, '', '', '', '', ''),
(10, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tags`
--

CREATE TABLE IF NOT EXISTS `tbl_tags` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `siteid` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL,
  PRIMARY KEY (`tag_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_tags`
--

INSERT INTO `tbl_tags` (`tag_id`, `siteid`, `tag`) VALUES
(1, 0, 'PRS'),
(2, 0, 'Fender'),
(3, 0, 'Pcs'),
(4, 0, 'Gibson'),
(5, 0, 'abc'),
(6, 0, 'aaa'),
(7, 0, 'qw'),
(8, 0, 'Martin'),
(9, 0, 'test'),
(10, 0, 'test1'),
(11, 0, 'Pca'),
(12, 0, 'pp'),
(13, 0, 'pc'),
(14, 0, ''),
(15, 0, 'Rosewood neck, Charcoal Finish'),
(16, 0, 'tets'),
(17, 0, 'Maple neck, gold bridge'),
(18, 0, 'qqq');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tag_lookup`
--

CREATE TABLE IF NOT EXISTS `tbl_tag_lookup` (
  `tag_luid` int(11) NOT NULL AUTO_INCREMENT,
  `tagid` int(11) NOT NULL,
  `siteid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `make_id` int(11) NOT NULL,
  PRIMARY KEY (`tag_luid`,`tagid`,`itemid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `tbl_tag_lookup`
--

INSERT INTO `tbl_tag_lookup` (`tag_luid`, `tagid`, `siteid`, `itemid`, `make_id`) VALUES
(1, 2, 0, 1, 0),
(2, 2, 0, 1, 0),
(3, 2, 0, 2, 0),
(4, 2, 0, 2, 0),
(5, 3, 0, 3, 0),
(6, 3, 0, 3, 0),
(7, 4, 0, 4, 0),
(8, 4, 0, 4, 0),
(9, 4, 0, 5, 0),
(10, 4, 0, 5, 0),
(11, 4, 0, 6, 0),
(12, 4, 0, 6, 0),
(13, 6, 0, 7, 0),
(14, 6, 0, 7, 0),
(15, 6, 0, 8, 0),
(16, 6, 0, 8, 0),
(17, 8, 0, 9, 0),
(18, 7, 0, 9, 0),
(19, 7, 0, 10, 0),
(20, 7, 0, 10, 0),
(21, 7, 0, 11, 0),
(22, 7, 0, 11, 0),
(23, 8, 0, 12, 0),
(24, 8, 0, 12, 0),
(25, 8, 0, 13, 0),
(26, 8, 0, 13, 0),
(27, 8, 0, 14, 0),
(28, 8, 0, 14, 0),
(29, 8, 0, 15, 0),
(30, 8, 0, 15, 0),
(31, 8, 0, 16, 0),
(32, 8, 0, 16, 0),
(33, 8, 0, 17, 0),
(34, 8, 0, 17, 0),
(35, 8, 0, 18, 0),
(36, 8, 0, 18, 0),
(37, 1, 0, 29, 0),
(38, 1, 0, 29, 0),
(39, 1, 0, 30, 0),
(40, 1, 0, 30, 0),
(41, 1, 0, 31, 0),
(42, 1, 0, 31, 0),
(43, 1, 0, 32, 0),
(44, 1, 0, 32, 0),
(45, 13, 1, 69, 0),
(46, 13, 1, 70, 0),
(47, 3, 0, 73, 0),
(48, 10, 0, 74, 0),
(49, 3, 0, 75, 0),
(50, 3, 0, 76, 0),
(51, 13, 0, 77, 0),
(52, 15, 0, 78, 0),
(53, 16, 0, 79, 0),
(54, 3, 0, 81, 0),
(55, 3, 0, 82, 0),
(56, 3, 0, 83, 0),
(57, 3, 0, 85, 0),
(58, 17, 0, 86, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `siteid` int(11) NOT NULL,
  `usertypeid` int(11) NOT NULL,
  `favorite_brand` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar_location` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `user_created` datetime NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=256 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userid`, `siteid`, `usertypeid`, `favorite_brand`, `city`, `state`, `country`, `url`, `firstname`, `lastname`, `username`, `password`, `email`, `avatar_location`, `bio`, `user_created`, `status`) VALUES
(252, 0, 2, 0, 'New York', '', '', '', 'Will', 'Gladstone', 'will', 'ce5250df1c594cd260654e98cbf06141', 'will@fretophile.com', 'images/avatars/originals/5164-IMG_4375(2).JPG', '', '0000-00-00 00:00:00', 0),
(251, 0, 2, 0, 'Berkeley', 'California', 'United States', '', 'Jonathan', 'Chickneas', 'jchix', '5ac076c631c834755885a99e059c13db', 'jchickneas@gmail.com', 'images/avatars/originals/8963-jon_portrait.jpg', '', '0000-00-00 00:00:00', 0),
(250, 0, 2, 0, 'San Franc', 'California', 'USA', '', 'Priyanka', 'Sharma', 'priyanka', '202cb962ac59075b964b07152d234b70', 'shallini.impinge@gmail.com', 'images/avatars/originals/5718-banner1.jpg', '', '0000-00-00 00:00:00', 1),
(228, 2, 2, 2, 'sad2', 'asd', 'asd', 'sad', 'san', 'g', 'san', '202cb962ac59075b964b07152d234b70', 'santosh@impingeonline.com', '', '', '0000-00-00 00:00:00', 0),
(227, 1, 1, 0, 'city', 'qqq', '111', '', 'Shallini', 'Mehan', 'shallini', 'e10adc3949ba59abbe56e057f20f883e', 'shallini_impinge@yahoo.com', '', '', '0000-00-00 00:00:00', 0),
(253, 1, 1, 0, 'San d', '', '', '', 'Deepti', '', 'deepti', 'e10adc3949ba59abbe56e057f20f883e', 'deepti.impinge@gmail.com', 'images/avatars/originals/1370-doll1.jpg', '', '2013-01-07 05:29:27', 0),
(254, 2, 2, 0, 'Mohali', '', '', '', 'Birender', 'Rana', 'birender', 'fe01ce2a7fbac8fafaed7c982a04e229', 'birender.rana18@gmail.com', 'images/avatars/originals/5636-heading-bg.png', '', '2013-01-22 22:17:35', 1),
(255, 3, 2, 0, 'Mohali', '', '', '', 'Ramesh', 'Kumar', 'rana', 'fe01ce2a7fbac8fafaed7c982a04e229', 'birender.impinge404@gmail.com', 'images/avatars/originals/3648-', '', '2013-01-22 23:17:56', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usertype`
--

CREATE TABLE IF NOT EXISTS `tbl_usertype` (
  `usertypeid` int(11) NOT NULL AUTO_INCREMENT,
  `siteid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `permissions` text NOT NULL,
  PRIMARY KEY (`usertypeid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_usertype`
--

INSERT INTO `tbl_usertype` (`usertypeid`, `siteid`, `name`, `permissions`) VALUES
(1, 1, 'Dealer', ''),
(2, 1, 'Player', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
