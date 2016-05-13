<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function insert_Iran_provinces_and_cities_to_db()
{
	$CI=&get_instance();
	$table=$CI->db->dbprefix("province"); 
	$CI->db->query("
		CREATE TABLE IF NOT EXISTS `$table` (
			`province_id` int(11) NOT NULL
			,`province_lang` char(2) NOT NULL
			,`province_name` varchar(100) NOT NULL
			,PRIMARY KEY (`province_id`, `province_lang`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;
	");

	$CI->db->query("
		INSERT INTO `$table` (`province_id`, `province_lang`, `province_name`) VALUES
			(1, 'en', 'East Azerbaijan'),
			(1, 'fa', 'آذربایجان شرقی'),
			(2, 'en', 'West Azerbaijan'),
			(2, 'fa', 'آذربایجان غربی'),
			(3, 'en', 'Ardabil'),
			(3, 'fa', 'اردبیل'),
			(4, 'en', 'Isfahan'),
			(4, 'fa', 'اصفهان'),
			(5, 'en', 'Alborz'),
			(5, 'fa', 'البرز'),
			(6, 'en', 'Ilam'),
			(6, 'fa', 'ایلام'),
			(7, 'en', 'Bushehr'),
			(7, 'fa', 'بوشهر'),
			(8, 'en', 'Tehran'),
			(8, 'fa', 'تهران'),
			(9, 'en', 'Chahar Mahal and Bakhtiari'),
			(9, 'fa', 'چهارمحال و بختیاری'),
			(10, 'en', 'South Korasan'),
			(10, 'fa', 'خراسان جنوبی'),
			(11, 'en', 'Razavi Korasan'),
			(11, 'fa', 'خراسان رضوی'),
			(12, 'en', 'North Korasan'),
			(12, 'fa', 'خراسان شمالی'),
			(13, 'en', 'Khuzestan'),
			(13, 'fa', 'خوزستان'),
			(14, 'en', 'Zanjan'),
			(14, 'fa', 'زنجان'),
			(15, 'en', 'Semnan'),
			(15, 'fa', 'سمنان'),
			(16, 'en', 'Sistan and Baluchestan'),
			(16, 'fa', 'سیستان و بلوچستان'),
			(17, 'en', 'Fars'),
			(17, 'fa', 'فارس'),
			(18, 'en', 'Qazvin'),
			(18, 'fa', 'قزوین'),
			(19, 'en', 'Qom'),
			(19, 'fa', 'قم'),
			(20, 'en', 'Kurdistan'),
			(20, 'fa', 'کردستان'),
			(21, 'en', 'Kerman'),
			(21, 'fa', 'کرمان'),
			(22, 'en', 'Kermanshah'),
			(22, 'fa', 'کرمانشاه'),
			(23, 'en', 'Kohgiluye and Boyer Ahmad'),
			(23, 'fa', 'کهکیلویه و بویراحمد'),
			(24, 'en', 'Golestan'),
			(24, 'fa', 'گلستان'),
			(25, 'en', 'Gilan'),
			(25, 'fa', 'گیلان'),
			(26, 'en', 'Lorestan'),
			(26, 'fa', 'لرستان'),
			(27, 'en', 'Mazandaran'),
			(27, 'fa', 'مازندران'),
			(28, 'en', 'Markazi'),
			(28, 'fa', 'مرکزی'),
			(29, 'en', 'Hormozgan'),
			(29, 'fa', 'هرمزگان'),
			(30, 'en', 'Hamadan'),
			(30, 'fa', 'همدان'),
			(31, 'en', 'Yazd'),
			(31, 'fa', 'یزد');
	");

	$table=$CI->db->dbprefix("city"); 
	$CI->db->query("
		CREATE TABLE IF NOT EXISTS `$table` (
		  `city_id` int(11) NOT NULL
		  ,`city_province_id` int(11) 
		  ,`city_lang` char(2) NOT NULL
		  ,`city_name` varchar(255) DEFAULT NULL
		  ,PRIMARY KEY (`city_id`, `city_lang`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;
	");

	$CI->db->query("
		INSERT INTO `$table` (`city_id`, `city_province_id`, `city_lang`, `city_name`) VALUES
			(1, 1, 'en', 'Azarshahr'),
			(1, 1, 'fa', 'آذر شهر'),
			(2, 1, 'en', 'Osku'),
			(2, 1, 'fa', 'اسکو'),
			(3, 1, 'en', 'Ahar'),
			(3, 1, 'fa', 'اهر'),
			(4, 1, 'en', 'Bostan Abad'),
			(4, 1, 'fa', 'بستان آباد'),
			(5, 1, 'en', 'Bonab'),
			(5, 1, 'fa', 'بناب'),
			(6, 1, 'en', 'Bandar Sharafkhane'),
			(6, 1, 'fa', 'بندر شرفخانه'),
			(7, 1, 'en', 'Tabriz'),
			(7, 1, 'fa', 'تبریز'),
			(8, 1, 'en', 'Tasuj'),
			(8, 1, 'fa', 'تسوج'),
			(9, 1, 'en', 'Jolfa'),
			(9, 1, 'fa', 'جلفا'),
			(10, 1, 'en', 'Sarab'),
			(10, 1, 'fa', 'سراب'),
			(11, 1, 'en', 'Shabestar'),
			(11, 1, 'fa', 'شبستر'),
			(12, 1, 'en', 'Sufian'),
			(12, 1, 'fa', 'صوفیان'),
			(13, 1, 'en', 'Ajabshir'),
			(13, 1, 'fa', 'عجبشیر'),
			(14, 1, 'en', 'Qarah Aghaj'),
			(14, 1, 'fa', 'قره آغاج'),
			(15, 1, 'en', 'Kaleybar'),
			(15, 1, 'fa', 'کلیبر'),
			(16, 1, 'en', 'Kandovan'),
			(16, 1, 'fa', 'کندوان'),
			(17, 1, 'en', 'Maraqe'),
			(17, 1, 'fa', 'مراغه'),
			(18, 1, 'en', 'Marand'),
			(18, 1, 'fa', 'مرند'),
			(19, 1, 'en', 'Malekan'),
			(19, 1, 'fa', 'ملکان'),
			(20, 1, 'en', 'Mamqan'),
			(20, 1, 'fa', 'ممقان'),
			(21, 1, 'en', 'Miane'),
			(21, 1, 'fa', 'میانه'),
			(22, 1, 'en', 'Hadishahr'),
			(22, 1, 'fa', 'هادیشهر'),
			(23, 1, 'en', 'Haris'),
			(23, 1, 'fa', 'هریس'),
			(24, 1, 'en', 'Hashtrud'),
			(24, 1, 'fa', 'هشترود'),
			(25, 1, 'en', 'Varzaqan'),
			(25, 1, 'fa', 'ورزقان'),
			(26, 2, 'en', 'Urmia'),
			(26, 2, 'fa', 'ارومیه'),
			(27, 2, 'en', 'Oshnavie'),
			(27, 2, 'fa', 'اشنویه'),
			(28, 2, 'en', 'Bazargan'),
			(28, 2, 'fa', 'بازرگان'),
			(29, 2, 'en', 'Bukan'),
			(29, 2, 'fa', 'بوکان'),
			(30, 2, 'en', 'Poldasht'),
			(30, 2, 'fa', 'پلدشت'),
			(31, 2, 'en', 'PiranShahr'),
			(31, 2, 'fa', 'پیرانشهر'),
			(32, 2, 'en', 'Takab'),
			(32, 2, 'fa', 'تکاب'),
			(33, 2, 'en', 'Khooy'),
			(33, 2, 'fa', 'خوی'),
			(34, 2, 'en', 'Sardasht'),
			(34, 2, 'fa', 'سردشت'),
			(35, 2, 'en', 'Salmas'),
			(35, 2, 'fa', 'سلماس'),
			(36, 2, 'en', 'Siah Chesmeh and Chaldoran'),
			(36, 2, 'fa', 'سیه چشمه و چالدران'),
			(37, 2, 'en', 'Simine'),
			(37, 2, 'fa', 'سیمینه'),
			(38, 2, 'en', 'Shahin Dezh'),
			(38, 2, 'fa', 'شاهین دژ'),
			(39, 2, 'en', 'Showt'),
			(39, 2, 'fa', 'شوط'),
			(40, 2, 'en', 'Maku'),
			(40, 2, 'fa', 'ماکو'),
			(41, 2, 'en', 'Mahabad'),
			(41, 2, 'fa', 'مهاباد'),
			(42, 2, 'en', 'Miandoab'),
			(42, 2, 'fa', 'میاندوآب'),
			(43, 2, 'en', 'Naqde'),
			(43, 2, 'fa', 'نقده'),
			(44, 3, 'en', 'Ardabil'),
			(44, 3, 'fa', 'اردبیل'),
			(45, 3, 'en', 'Bile Savar'),
			(45, 3, 'fa', 'بیله سوار'),
			(46, 3, 'en', 'Pars Abad'),
			(46, 3, 'fa', 'پارس آباد'),
			(47, 3, 'en', 'Khalkhal'),
			(47, 3, 'fa', 'خلخال'),
			(48, 3, 'en', 'Sarein'),
			(48, 3, 'fa', 'سرعین'),
			(49, 3, 'en', 'Kivi Kowsar'),
			(49, 3, 'fa', 'کیوی کوثر'),
			(50, 3, 'en', 'Garmi Moqan'),
			(50, 3, 'fa', 'گرمی مغان'),
			(51, 3, 'en', 'Meshgin Shahr'),
			(51, 3, 'fa', 'مشگین شهر'),
			(52, 3, 'en', 'Namin'),
			(52, 3, 'fa', 'نمین'),
			(53, 3, 'en', 'Naier'),
			(53, 3, 'fa', 'نیر'),
			(54, 4, 'en', 'Aran and Bidgol'),
			(54, 4, 'fa', 'آران و بیدگل'),
			(55, 4, 'en', 'Ardestan'),
			(55, 4, 'fa', 'اردستان'),
			(56, 4, 'en', 'Isfahan'),
			(56, 4, 'fa', 'اصفهان'),
			(57, 4, 'en', 'Baq Bahadoran'),
			(57, 4, 'fa', 'باغ بهادران'),
			(58, 4, 'en', 'Tiran'),
			(58, 4, 'fa', 'تیران'),
			(59, 4, 'en', 'Khomeini Shahr'),
			(59, 4, 'fa', 'خمینی شهر'),
			(60, 4, 'en', 'Khansar'),
			(60, 4, 'fa', 'خوانسار'),
			(61, 4, 'en', 'Dehaqan'),
			(61, 4, 'fa', 'دهاقان'),
			(62, 4, 'en', 'Dolat Aabad'),
			(62, 4, 'fa', 'دولت آباد'),
			(63, 4, 'en', 'Zarin Shahr'),
			(63, 4, 'fa', 'زرین شهر'),
			(64, 4, 'en', 'Zibashahr'),
			(64, 4, 'fa', 'زیباشهر'),
			(65, 4, 'en', 'Semirom'),
			(65, 4, 'fa', 'سمیرم'),
			(66, 4, 'en', 'Shahin Shahr'),
			(66, 4, 'fa', 'شاهین شهر'),
			(67, 4, 'en', 'Shahreza'),
			(67, 4, 'fa', 'شهرضا'),
			(68, 4, 'en', 'Fereidan'),
			(68, 4, 'fa', 'فریدن'),
			(69, 4, 'en', 'Fereidun Shahr'),
			(69, 4, 'fa', 'فریدون شهر'),
			(70, 4, 'en', 'Felavarjan'),
			(70, 4, 'fa', 'فلاورجان'),
			(71, 4, 'en', 'Fulad Shahr'),
			(71, 4, 'fa', 'فولاد شهر'),
			(72, 4, 'en', 'Qahderijan'),
			(72, 4, 'fa', 'قهدریجان'),
			(73, 4, 'en', 'Kashan'),
			(73, 4, 'fa', 'کاشان'),
			(74, 4, 'en', 'Golpaigan'),
			(74, 4, 'fa', 'گلپایگان'),
			(75, 4, 'en', 'Mobarake'),
			(75, 4, 'fa', 'مبارکه '),
			(76, 4, 'en', 'Mahabad'),
			(76, 4, 'fa', 'مهاباد'),
			(77, 4, 'en', 'Nain'),
			(77, 4, 'fa', 'نایین'),
			(78, 4, 'en', 'Nadjaf Aabd'),
			(78, 4, 'fa', 'نجف آباد'),
			(79, 4, 'en', 'Natanz'),
			(79, 4, 'fa', 'نطنز'),
			(80, 4, 'en', 'Harand'),
			(80, 4, 'fa', 'هرند'),
			(81, 5, 'en', 'Asara'),
			(81, 5, 'fa', 'آسارا'),
			(82, 5, 'en', 'Eshtehard'),
			(82, 5, 'fa', 'اشتهارد'),
			(83, 5, 'en', 'Hashtgerd'),
			(83, 5, 'fa', 'هشتگرد'),
			(84, 5, 'en', 'Taleqan'),
			(84, 5, 'fa', 'طالقان'),
			(85, 5, 'en', 'Karaj'),
			(85, 5, 'fa', 'کرج'),
			(86, 5, 'en', 'Nazar Aabd'),
			(86, 5, 'fa', 'نظرآباد'),
			(87, 6, 'en', 'Abdanan'),
			(87, 6, 'fa', 'آبدانان'),
			(88, 6, 'en', 'Ilam'),
			(88, 6, 'fa', 'ایلام'),
			(89, 6, 'en', 'Ivan'),
			(89, 6, 'fa', 'ایوان'),
			(90, 6, 'en', 'Dare Shahr'),
			(90, 6, 'fa', 'دره شهر'),
			(91, 6, 'en', 'Dehloran'),
			(91, 6, 'fa', 'دهلران'),
			(92, 6, 'en', 'Sarable'),
			(92, 6, 'fa', 'سرابله'),
			(93, 6, 'en', 'Shirvan'),
			(93, 6, 'fa', 'شیروان چرداول'),
			(94, 6, 'en', 'Mehran'),
			(94, 6, 'fa', 'مهران'),
			(95, 7, 'en', 'Abpakhsh'),
			(95, 7, 'fa', 'آبپخش'),
			(96, 7, 'en', 'Ahram'),
			(96, 7, 'fa', 'اهرم'),
			(97, 7, 'en', 'Borazjan'),
			(97, 7, 'fa', 'برازجان'),
			(98, 7, 'en', 'Bandar Dayer'),
			(98, 7, 'fa', 'بندر دیر'),
			(99, 7, 'en', 'Bandar Deylam'),
			(99, 7, 'fa', 'بندر دیلم'),
			(100, 7, 'en', 'Bandar Kangan'),
			(100, 7, 'fa', 'بندر کنگان'),
			(101, 7, 'en', 'Bandar Genave'),
			(101, 7, 'fa', 'بندر گناوه'),
			(102, 7, 'en', 'Bushehr'),
			(102, 7, 'fa', 'بوشهر'),
			(103, 7, 'en', 'Tangestan'),
			(103, 7, 'fa', 'تنگستان'),
			(104, 7, 'en', 'Khark'),
			(104, 7, 'fa', 'جزیره خارک'),
			(105, 7, 'en', 'Jam'),
			(105, 7, 'fa', 'جم'),
			(106, 7, 'en', 'Khurmoj'),
			(106, 7, 'fa', 'خورموج'),
			(107, 7, 'en', 'Dashtestan and Shabankare'),
			(107, 7, 'fa', 'دشتستان و شبانکاره'),
			(108, 7, 'en', 'Delvar'),
			(108, 7, 'fa', 'دلوار'),
			(109, 7, 'en', 'Asaluye'),
			(109, 7, 'fa', 'عسلویه'),
			(110, 8, 'en', 'Islam Shahr'),
			(110, 8, 'fa', 'اسلامشهر'),
			(111, 8, 'en', 'Bumehen'),
			(111, 8, 'fa', 'بومهن'),
			(112, 8, 'en', 'Pakdasht'),
			(112, 8, 'fa', 'پاکدشت'),
			(113, 8, 'en', 'Tehran'),
			(113, 8, 'fa', 'تهران'),
			(114, 8, 'en', 'Chahar Dange'),
			(114, 8, 'fa', 'چهاردانگه'),
			(115, 8, 'en', 'Damavnd'),
			(115, 8, 'fa', 'دماوند'),
			(116, 8, 'en', 'Rudehen'),
			(116, 8, 'fa', 'رودهن'),
			(117, 8, 'en', 'Rei'),
			(117, 8, 'fa', 'ری'),
			(118, 8, 'en', 'Sharif Abad'),
			(118, 8, 'fa', 'شریف آباد'),
			(119, 8, 'en', 'Robat Karim'),
			(119, 8, 'fa', 'رباط کریم'),
			(120, 8, 'en', 'Shahriar'),
			(120, 8, 'fa', 'شهریار'),
			(121, 8, 'en', 'Fasham'),
			(121, 8, 'fa', 'فشم'),
			(122, 8, 'en', 'Firuzkuh'),
			(122, 8, 'fa', 'فیروزکوه'),
			(123, 8, 'en', 'Quds'),
			(123, 8, 'fa', 'قدس'),
			(124, 8, 'en', 'Kahrizak'),
			(124, 8, 'fa', 'کهریزک'),
			(125, 8, 'en', 'Lavasan'),
			(125, 8, 'fa', 'لواسان'),
			(126, 8, 'en', 'Malard'),
			(126, 8, 'fa', 'ملارد'),
			(127, 8, 'en', 'Varamin'),
			(127, 8, 'fa', 'ورامین'),
			(128, 9, 'en', 'Ardal'),
			(128, 9, 'fa', 'اردل'),
			(129, 9, 'en', 'Brujen'),
			(129, 9, 'fa', 'بروجن'),
			(130, 9, 'en', 'Chelgerd and Kuhrang'),
			(130, 9, 'fa', 'چلگرد و کوهرنگ'),
			(131, 9, 'en', 'Saman'),
			(131, 9, 'fa', 'سامان'),
			(132, 9, 'en', 'Shahrekord'),
			(132, 9, 'fa', 'شهرکرد'),
			(133, 9, 'en', 'Farsan'),
			(133, 9, 'fa', 'فارسان'),
			(134, 9, 'en', 'Lordegan'),
			(134, 9, 'fa', 'لردگان'),
			(135, 10, 'en', 'Boshruye'),
			(135, 10, 'fa', 'بشرویه'),
			(136, 10, 'en', 'Birjand'),
			(136, 10, 'fa', 'بیرجند'),
			(137, 10, 'en', 'Khezri'),
			(137, 10, 'fa', 'خضری'),
			(138, 10, 'en', 'Khusf'),
			(138, 10, 'fa', 'خوسف'),
			(139, 10, 'en', 'Sarayan'),
			(139, 10, 'fa', 'سرایان'),
			(140, 10, 'en', 'Sarbishe'),
			(140, 10, 'fa', 'سربیشه'),
			(141, 10, 'en', 'Tabas'),
			(141, 10, 'fa', 'طبس'),
			(142, 10, 'en', 'Ferdos'),
			(142, 10, 'fa', 'فردوس'),
			(143, 10, 'en', 'Qaen'),
			(143, 10, 'fa', 'قائن'),
			(144, 10, 'en', 'Nehbandan'),
			(144, 10, 'fa', 'نهبندان'),
			(145, 11, 'en', 'Bajestan'),
			(145, 11, 'fa', 'بجستان'),
			(146, 11, 'en', 'Bardeskan'),
			(146, 11, 'fa', 'بردسکن'),
			(147, 11, 'en', 'Taybad'),
			(147, 11, 'fa', 'تایباد'),
			(148, 11, 'en', 'Torbate Jam'),
			(148, 11, 'fa', 'تربت جام'),
			(149, 11, 'en', 'Torbate Heidaried'),
			(149, 11, 'fa', 'تربت حیدریه'),
			(150, 11, 'en', 'Joqatai'),
			(150, 11, 'fa', 'جغتای'),
			(151, 11, 'en', 'Jovein'),
			(151, 11, 'fa', 'جوین'),
			(152, 11, 'en', 'Chenaran'),
			(152, 11, 'fa', 'چناران'),
			(153, 11, 'en', 'Khalil Abad'),
			(153, 11, 'fa', 'خلیل آباد'),
			(154, 11, 'en', 'Khaf'),
			(154, 11, 'fa', 'خواف'),
			(155, 11, 'en', 'Dargaz'),
			(155, 11, 'fa', 'درگز'),
			(156, 11, 'en', 'Roshtkhar'),
			(156, 11, 'fa', 'رشتخوار'),
			(157, 11, 'en', 'Sabzevar'),
			(157, 11, 'fa', 'سبزوار'),
			(158, 11, 'en', 'Sarakhs'),
			(158, 11, 'fa', 'سرخس'),
			(159, 11, 'en', 'Torqabe'),
			(159, 11, 'fa', 'طرقبه'),
			(160, 11, 'en', 'Fariman'),
			(160, 11, 'fa', 'فریمان'),
			(161, 11, 'en', 'Quchan'),
			(161, 11, 'fa', 'قوچان'),
			(162, 11, 'en', 'Kashmar'),
			(162, 11, 'fa', 'کاشمر'),
			(163, 11, 'en', 'Kalat'),
			(163, 11, 'fa', 'کلات'),
			(164, 11, 'en', 'Gonabad'),
			(164, 11, 'fa', 'گناباد'),
			(165, 11, 'en', 'Mashad'),
			(165, 11, 'fa', 'مشهد'),
			(166, 11, 'en', 'Neishabur'),
			(166, 11, 'fa', 'نیشابور'),
			(167, 12, 'en', 'Ashkhane and Mane and Samarqan'),
			(167, 12, 'fa', 'آشخانه و مانه و سمرقان'),
			(168, 12, 'en', 'Esfaraien'),
			(168, 12, 'fa', 'اسفراین'),
			(169, 12, 'en', 'Bojnurd'),
			(169, 12, 'fa', 'بجنورد'),
			(170, 12, 'en', 'Jajarm'),
			(170, 12, 'fa', 'جاجرم'),
			(171, 12, 'en', 'Shirvan'),
			(171, 12, 'fa', 'شیروان'),
			(172, 12, 'en', 'Farooj'),
			(172, 12, 'fa', 'فاروج'),
			(173, 13, 'en', 'Abadan'),
			(173, 13, 'fa', 'آبادان'),
			(174, 13, 'en', 'Omidie'),
			(174, 13, 'fa', 'امیدیه'),
			(175, 13, 'en', 'Andimeshk'),
			(175, 13, 'fa', 'اندیمشک'),
			(176, 13, 'en', 'Ahvaz'),
			(176, 13, 'fa', 'اهواز'),
			(177, 13, 'en', 'Ieze'),
			(177, 13, 'fa', 'ایذه'),
			(178, 13, 'en', 'Bagh Malek'),
			(178, 13, 'fa', 'باغ ملک'),
			(179, 13, 'en', 'Bostan Abad'),
			(179, 13, 'fa', 'بستان'),
			(180, 13, 'en', 'Bandar Mahshahr'),
			(180, 13, 'fa', 'بندر ماهشهر'),
			(181, 13, 'en', 'Bandar Imam Khomeini'),
			(181, 13, 'fa', 'بندرامام خمینی'),
			(182, 13, 'en', 'Behbahan'),
			(182, 13, 'fa', 'بهبهان'),
			(183, 13, 'en', 'Khoram Shahr'),
			(183, 13, 'fa', 'خرمشهر'),
			(184, 13, 'en', 'Dezful'),
			(184, 13, 'fa', 'دزفول'),
			(185, 13, 'en', 'Ramshir'),
			(185, 13, 'fa', 'رامشیر'),
			(186, 13, 'en', 'Ramhormoz'),
			(186, 13, 'fa', 'رامهرمز'),
			(187, 13, 'en', 'Susangerd'),
			(187, 13, 'fa', 'سوسنگرد'),
			(188, 13, 'en', 'Shadegan'),
			(188, 13, 'fa', 'شادگان'),
			(189, 13, 'en', 'Shush'),
			(189, 13, 'fa', 'شوش'),
			(190, 13, 'en', 'Shushtar'),
			(190, 13, 'fa', 'شوشتر'),
			(191, 13, 'en', 'Lali'),
			(191, 13, 'fa', 'لالی'),
			(192, 13, 'en', 'Masjed Soleiman'),
			(192, 13, 'fa', 'مسجد سلیمان'),
			(193, 13, 'en', 'Hendijan'),
			(193, 13, 'fa', 'هندیجان'),
			(194, 13, 'en', 'Hoveize'),
			(194, 13, 'fa', 'هویزه'),
			(195, 14, 'en', 'Ab Bar and Tarem'),
			(195, 14, 'fa', 'آب بر و طارم'),
			(196, 14, 'en', 'Abhar'),
			(196, 14, 'fa', 'ابهر'),
			(197, 14, 'en', 'Khoram Dare'),
			(197, 14, 'fa', 'خرمدره'),
			(198, 14, 'en', 'Zarin Abad'),
			(198, 14, 'fa', 'زرین آباد'),
			(199, 14, 'en', 'Zanjan'),
			(199, 14, 'fa', 'زنجان'),
			(200, 14, 'en', 'Qeydar and Khoda Bande'),
			(200, 14, 'fa', 'قیدار و خدا بنده'),
			(201, 14, 'en', 'Mahneshan'),
			(201, 14, 'fa', 'ماهنشان'),
			(202, 15, 'en', 'Eivanaki'),
			(202, 15, 'fa', 'ایوانکی'),
			(203, 15, 'en', 'Bastam'),
			(203, 15, 'fa', 'بسطام'),
			(204, 15, 'en', 'Damqan'),
			(204, 15, 'fa', 'دامغان'),
			(205, 15, 'en', 'Sorkhe'),
			(205, 15, 'fa', 'سرخه'),
			(206, 15, 'en', 'Semnan'),
			(206, 15, 'fa', 'سمنان'),
			(207, 15, 'en', 'Shahrud'),
			(207, 15, 'fa', 'شاهرود'),
			(208, 15, 'en', 'Shahmirzad'),
			(208, 15, 'fa', 'شهمیرزاد'),
			(209, 15, 'en', 'Garmsar'),
			(209, 15, 'fa', 'گرمسار'),
			(210, 15, 'en', 'Mehdi Shahr'),
			(210, 15, 'fa', 'مهدیشهر'),
			(211, 16, 'en', 'Iran Shahr'),
			(211, 16, 'fa', 'ایرانشهر'),
			(212, 16, 'en', 'Chabahar'),
			(212, 16, 'fa', 'چابهار'),
			(213, 16, 'en', 'Khash'),
			(213, 16, 'fa', 'خاش'),
			(214, 16, 'en', 'Rask'),
			(214, 16, 'fa', 'راسک'),
			(215, 16, 'en', 'Zabol'),
			(215, 16, 'fa', 'زابل'),
			(216, 16, 'en', 'Zahedan'),
			(216, 16, 'fa', 'زاهدان'),
			(217, 16, 'en', 'Saravan'),
			(217, 16, 'fa', 'سراوان'),
			(218, 16, 'en', 'Sarbaz'),
			(218, 16, 'fa', 'سرباز'),
			(219, 16, 'en', 'Mirjave'),
			(219, 16, 'fa', 'میرجاوه'),
			(220, 16, 'en', 'Nik Shahr'),
			(220, 16, 'fa', 'نیکشهر'),
			(221, 17, 'en', 'Abade'),
			(221, 17, 'fa', 'آباده'),
			(222, 17, 'en', 'Abade Tashak'),
			(222, 17, 'fa', 'آباده طشک'),
			(223, 17, 'en', 'Ardakan'),
			(223, 17, 'fa', 'اردکان'),
			(224, 17, 'en', 'Arsanjan'),
			(224, 17, 'fa', 'ارسنجان'),
			(225, 17, 'en', 'Estahban'),
			(225, 17, 'fa', 'استهبان'),
			(226, 17, 'en', 'Eshkenan'),
			(226, 17, 'fa', 'اشکنان'),
			(227, 17, 'en', 'Eqlid'),
			(227, 17, 'fa', 'اقلید'),
			(228, 17, 'en', 'Evaz'),
			(228, 17, 'fa', 'اوز'),
			(229, 17, 'en', 'Iej'),
			(229, 17, 'fa', 'ایج'),
			(230, 17, 'en', 'Izad Khast'),
			(230, 17, 'fa', 'ایزد خواست'),
			(231, 17, 'en', 'Bab Anar'),
			(231, 17, 'fa', 'باب انار'),
			(232, 17, 'en', 'Balade'),
			(232, 17, 'fa', 'بالاده'),
			(233, 17, 'en', 'Banaruye'),
			(233, 17, 'fa', 'بنارویه'),
			(234, 17, 'en', 'Bahaman'),
			(234, 17, 'fa', 'بهمن'),
			(235, 17, 'en', 'Bavanat'),
			(235, 17, 'fa', 'بوانات'),
			(236, 17, 'en', 'Beiram'),
			(236, 17, 'fa', 'بیرم'),
			(237, 17, 'en', 'Beiza'),
			(237, 17, 'fa', 'بیضا'),
			(238, 17, 'en', 'Janat Shahr'),
			(238, 17, 'fa', 'جنت شهر'),
			(239, 17, 'en', 'Jahrom'),
			(239, 17, 'fa', 'جهرم'),
			(240, 17, 'en', 'Haji Abad and Zarin Dasht'),
			(240, 17, 'fa', 'حاجی آباد و زرین دشت'),
			(241, 17, 'en', 'Khavaran'),
			(241, 17, 'fa', 'خاوران'),
			(242, 17, 'en', 'Kharame'),
			(242, 17, 'fa', 'خرامه'),
			(243, 17, 'en', 'Khesht'),
			(243, 17, 'fa', 'خشت'),
			(244, 17, 'en', 'Khonj'),
			(244, 17, 'fa', 'خنج'),
			(245, 17, 'en', 'Khur'),
			(245, 17, 'fa', 'خور'),
			(246, 17, 'en', 'Darab'),
			(246, 17, 'fa', 'داراب'),
			(247, 17, 'en', 'Runiz'),
			(247, 17, 'fa', 'رونیز'),
			(248, 17, 'en', 'Zahed Shahr'),
			(248, 17, 'fa', 'زاهدشهر'),
			(249, 17, 'en', 'Zarqan'),
			(249, 17, 'fa', 'زرقان'),
			(250, 17, 'en', 'Sede'),
			(250, 17, 'fa', 'سده'),
			(251, 17, 'en', 'Sarvestan'),
			(251, 17, 'fa', 'سروستان'),
			(252, 17, 'en', 'Saadat Shahr'),
			(252, 17, 'fa', 'سعادت شهر'),
			(253, 17, 'en', 'Sourmoq'),
			(253, 17, 'fa', 'سورمق'),
			(254, 17, 'en', 'Sheshdeh'),
			(254, 17, 'fa', 'ششده'),
			(255, 17, 'en', 'Shiraz'),
			(255, 17, 'fa', 'شیراز'),
			(256, 17, 'en', 'Soghad'),
			(256, 17, 'fa', 'صغاد'),
			(257, 17, 'en', 'Safa Shahr'),
			(257, 17, 'fa', 'صفاشهر'),
			(258, 17, 'en', 'Ala and Marvdasht'),
			(258, 17, 'fa', 'علاء و مرودشت'),
			(259, 17, 'en', 'Ambar'),
			(259, 17, 'fa', 'عنبر'),
			(260, 17, 'en', 'Farshband'),
			(260, 17, 'fa', 'فراشبند'),
			(261, 17, 'en', 'Fasa'),
			(261, 17, 'fa', 'فسا'),
			(262, 17, 'en', 'Firuz Abad'),
			(262, 17, 'fa', 'فیروز آباد'),
			(263, 17, 'en', 'Qaemie'),
			(263, 17, 'fa', 'قائمیه'),
			(264, 17, 'en', 'Qader Abad'),
			(264, 17, 'fa', 'قادر آباد'),
			(265, 17, 'en', 'Qotb Abad'),
			(265, 17, 'fa', 'قطب آباد'),
			(266, 17, 'en', 'Qir'),
			(266, 17, 'fa', 'قیر'),
			(267, 17, 'en', 'Kazeroon'),
			(267, 17, 'fa', 'کازرون'),
			(268, 17, 'en', 'Kenar Takhte'),
			(268, 17, 'fa', 'کنار تخته'),
			(269, 17, 'en', 'Gerash'),
			(269, 17, 'fa', 'گراش'),
			(270, 17, 'en', 'Laar'),
			(270, 17, 'fa', 'لار'),
			(271, 17, 'en', 'Lamerd'),
			(271, 17, 'fa', 'لامرد'),
			(272, 17, 'en', 'Lepuie'),
			(272, 17, 'fa', 'لپوئی'),
			(273, 17, 'en', 'Latifi'),
			(273, 17, 'fa', 'لطیفی'),
			(274, 17, 'en', 'Marvdasht'),
			(274, 17, 'fa', 'مرودشت'),
			(275, 17, 'en', 'Meshkan'),
			(275, 17, 'fa', 'مشکان'),
			(276, 17, 'en', 'Masiri'),
			(276, 17, 'fa', 'مصیری'),
			(277, 17, 'en', 'Mehr'),
			(277, 17, 'fa', 'مهر'),
			(278, 17, 'en', 'Meimand'),
			(278, 17, 'fa', 'میمند'),
			(279, 17, 'en', 'Nobandegan'),
			(279, 17, 'fa', 'نوبندگان'),
			(280, 17, 'en', 'Nudan'),
			(280, 17, 'fa', 'نودان'),
			(281, 17, 'en', 'Nurabad'),
			(281, 17, 'fa', 'نورآباد'),
			(282, 17, 'en', 'Neiriz'),
			(282, 17, 'fa', 'نی ریز'),
			(283, 17, 'en', 'Kovar'),
			(283, 17, 'fa', 'کوار'),
			(284, 18, 'en', 'Abyek'),
			(284, 18, 'fa', 'آبیک'),
			(285, 18, 'en', 'Alborz'),
			(285, 18, 'fa', 'البرز'),
			(286, 18, 'en', 'Buien Zahra'),
			(286, 18, 'fa', 'بوئین زهرا'),
			(287, 18, 'en', 'Takstan'),
			(287, 18, 'fa', 'تاکستان'),
			(288, 18, 'en', 'Qazvin'),
			(288, 18, 'fa', 'قزوین'),
			(289, 18, 'en', 'Mahmud Abad'),
			(289, 18, 'fa', 'محمود آباد نمونه'),
			(290, 19, 'en', 'Qom'),
			(290, 19, 'fa', 'قم'),
			(291, 20, 'en', 'Bane'),
			(291, 20, 'fa', 'بانه'),
			(292, 20, 'en', 'Bijar'),
			(292, 20, 'fa', 'بیجار'),
			(293, 20, 'en', 'Dehgolan'),
			(293, 20, 'fa', 'دهگلان'),
			(294, 20, 'en', 'Divandare'),
			(294, 20, 'fa', 'دیواندره'),
			(295, 20, 'en', 'Saqez'),
			(295, 20, 'fa', 'سقز'),
			(296, 20, 'en', 'Sanandaj'),
			(296, 20, 'fa', 'سنندج'),
			(297, 20, 'en', 'Qarve'),
			(297, 20, 'fa', 'قروه'),
			(298, 20, 'en', 'Kamyaran'),
			(298, 20, 'fa', 'کامیاران'),
			(299, 20, 'en', 'Marivan'),
			(299, 20, 'fa', 'مریوان'),
			(300, 21, 'en', 'babak'),
			(300, 21, 'fa', 'بابک'),
			(301, 21, 'en', 'Baft'),
			(301, 21, 'fa', 'بافت'),
			(302, 21, 'en', 'Bardesir'),
			(302, 21, 'fa', 'بردسیر'),
			(303, 21, 'en', 'Bam'),
			(303, 21, 'fa', 'بم'),
			(304, 21, 'en', 'Jiroft'),
			(304, 21, 'fa', 'جیرفت'),
			(305, 21, 'en', 'Raver'),
			(305, 21, 'fa', 'راور'),
			(306, 21, 'en', 'Rafsanjan'),
			(306, 21, 'fa', 'رفسنجان'),
			(307, 21, 'en', 'Zarand'),
			(307, 21, 'fa', 'زرند'),
			(308, 21, 'en', 'Sirjan'),
			(308, 21, 'fa', 'سیرجان'),
			(309, 21, 'en', 'Kerman'),
			(309, 21, 'fa', 'کرمان'),
			(310, 21, 'en', 'Kahnuj'),
			(310, 21, 'fa', 'کهنوج'),
			(311, 21, 'en', 'Manujan'),
			(311, 21, 'fa', 'منوجان'),
			(312, 22, 'en', 'West Islam Abad '),
			(312, 22, 'fa', 'اسلام آباد غرب'),
			(313, 22, 'en', 'Pve'),
			(313, 22, 'fa', 'پاوه'),
			(314, 22, 'en', 'Taze Abad and Solase Babajani'),
			(314, 22, 'fa', 'تازه آباد و ثلاث باباجانی'),
			(315, 22, 'en', 'Javanrud'),
			(315, 22, 'fa', 'جوانرود'),
			(316, 22, 'en', 'Sar Pole Zahab'),
			(316, 22, 'fa', 'سر پل ذهاب'),
			(317, 22, 'en', 'Sonqor'),
			(317, 22, 'fa', 'سنقر'),
			(318, 22, 'en', 'Sahne'),
			(318, 22, 'fa', 'صحنه'),
			(319, 22, 'en', 'Qasre Shirin'),
			(319, 22, 'fa', 'قصر شیرین'),
			(320, 22, 'en', 'Kermanshah'),
			(320, 22, 'fa', 'کرمانشاه'),
			(321, 22, 'en', 'Kangavar'),
			(321, 22, 'fa', 'کنگاور'),
			(322, 22, 'en', 'Wes Gilan'),
			(322, 22, 'fa', 'گیلان غرب'),
			(323, 22, 'en', 'Harsin'),
			(323, 22, 'fa', 'هرسین'),
			(324, 23, 'en', 'Dehdasht'),
			(324, 23, 'fa', 'دهدشت'),
			(325, 23, 'en', 'Do Gonbadan'),
			(325, 23, 'fa', 'دوگنبدان'),
			(326, 23, 'en', 'Sisakht and Dena'),
			(326, 23, 'fa', 'سی سخت و دنا'),
			(327, 23, 'en', 'Gachsaran'),
			(327, 23, 'fa', 'گچساران'),
			(328, 23, 'en', 'Yasuj'),
			(328, 23, 'fa', 'یاسوج'),
			(329, 24, 'en', 'Azad Shahr'),
			(329, 24, 'fa', 'آزاد شهر'),
			(330, 24, 'en', 'Aq Ghala'),
			(330, 24, 'fa', 'آق قلا'),
			(331, 24, 'en', 'Ambar Alum'),
			(331, 24, 'fa', 'انبارآلوم'),
			(332, 24, 'en', 'Inche Borun'),
			(332, 24, 'fa', 'اینچه برون'),
			(333, 24, 'en', 'Bandar Gaz'),
			(333, 24, 'fa', 'بندر گز'),
			(334, 24, 'en', 'Torkaman'),
			(334, 24, 'fa', 'ترکمن'),
			(335, 24, 'en', 'Jelin'),
			(335, 24, 'fa', 'جلین'),
			(336, 24, 'en', 'Khan Bebin'),
			(336, 24, 'fa', 'خان ببین'),
			(337, 24, 'en', 'Ramian'),
			(337, 24, 'fa', 'رامیان'),
			(338, 24, 'en', 'Sarkhankalate'),
			(338, 24, 'fa', 'سرخنکلاته'),
			(339, 24, 'en', 'Simin Shahr'),
			(339, 24, 'fa', 'سیمین شهر'),
			(340, 24, 'en', 'Ali Abade Katool'),
			(340, 24, 'fa', 'علی آباد کتول'),
			(341, 24, 'en', 'Fazel Abad'),
			(341, 24, 'fa', 'فاضل آباد'),
			(342, 24, 'en', 'Kord Kuy'),
			(342, 24, 'fa', 'کردکوی'),
			(343, 24, 'en', 'Kalale'),
			(343, 24, 'fa', 'کلاله'),
			(344, 24, 'en', 'Galikesh'),
			(344, 24, 'fa', 'گالیکش'),
			(345, 24, 'en', 'Gorgan'),
			(345, 24, 'fa', 'گرگان'),
			(346, 24, 'en', 'Gamish Tape'),
			(346, 24, 'fa', 'گمیش تپه'),
			(347, 24, 'en', 'Gonbad Kavus'),
			(347, 24, 'fa', 'گنبد کاووس'),
			(348, 24, 'en', 'Marave Tape'),
			(348, 24, 'fa', 'مراوه تپه'),
			(349, 24, 'en', 'Minudasht'),
			(349, 24, 'fa', 'مینو دشت'),
			(350, 24, 'en', 'Negin Shahr'),
			(350, 24, 'fa', 'نگین شهر'),
			(351, 24, 'en', 'Nude khanduz'),
			(351, 24, 'fa', 'نوده خاندوز'),
			(352, 24, 'en', 'NoKande'),
			(352, 24, 'fa', 'نوکنده'),
			(353, 25, 'en', 'Astara'),
			(353, 25, 'fa', 'آستارا'),
			(354, 25, 'en', 'Astane Ashrafie'),
			(354, 25, 'fa', 'آستانه اشرفیه'),
			(355, 25, 'en', 'Amlash'),
			(355, 25, 'fa', 'املش'),
			(356, 25, 'en', 'Bandar Anzali'),
			(356, 25, 'fa', 'بندرانزلی'),
			(357, 25, 'en', 'Khomam'),
			(357, 25, 'fa', 'خمام'),
			(358, 25, 'en', 'Rasht'),
			(358, 25, 'fa', 'رشت'),
			(359, 25, 'en', 'Rezvan Shahr'),
			(359, 25, 'fa', 'رضوان شهر'),
			(360, 25, 'en', 'Rudsar'),
			(360, 25, 'fa', 'رودسر'),
			(361, 25, 'en', 'Rudbar'),
			(361, 25, 'fa', 'رودبار'),
			(362, 25, 'en', 'Siahkal'),
			(362, 25, 'fa', 'سیاهکل'),
			(363, 25, 'en', 'Shaft'),
			(363, 25, 'fa', 'شفت'),
			(364, 25, 'en', 'Sume Sara'),
			(364, 25, 'fa', 'صومعه سرا'),
			(365, 25, 'en', 'Fuman'),
			(365, 25, 'fa', 'فومن'),
			(366, 25, 'en', 'Kolachay'),
			(366, 25, 'fa', 'کلاچای'),
			(367, 25, 'en', 'Lahijan'),
			(367, 25, 'fa', 'لاهیجان'),
			(368, 25, 'en', 'Langrud'),
			(368, 25, 'fa', 'لنگرود'),
			(369, 25, 'en', 'Lushan'),
			(369, 25, 'fa', 'لوشان'),
			(370, 25, 'en', 'Masal'),
			(370, 25, 'fa', 'ماسال'),
			(371, 25, 'en', 'Masule'),
			(371, 25, 'fa', 'ماسوله'),
			(372, 25, 'en', 'Manjil'),
			(372, 25, 'fa', 'منجیل'),
			(373, 25, 'en', 'Hashtpar'),
			(373, 25, 'fa', 'هشتپر'),
			(374, 26, 'en', 'Azna'),
			(374, 26, 'fa', 'ازنا'),
			(375, 26, 'en', 'Aleshtar'),
			(375, 26, 'fa', 'الشتر'),
			(376, 26, 'en', 'Aligudarz'),
			(376, 26, 'fa', 'الیگودرز'),
			(377, 26, 'en', 'Brujerd'),
			(377, 26, 'fa', 'بروجرد'),
			(378, 26, 'en', 'Poldokhtar'),
			(378, 26, 'fa', 'پلدختر'),
			(379, 26, 'en', 'Khoram Abad'),
			(379, 26, 'fa', 'خرم آباد'),
			(380, 26, 'en', 'Dorud'),
			(380, 26, 'fa', 'دورود'),
			(381, 26, 'en', 'Sepiddasht'),
			(381, 26, 'fa', 'سپیددشت'),
			(382, 26, 'en', 'Kuhdasht'),
			(382, 26, 'fa', 'کوهدشت'),
			(383, 26, 'en', 'Nurabad'),
			(383, 26, 'fa', 'نورآباد'),
			(384, 27, 'en', 'Amol'),
			(384, 27, 'fa', 'آمل'),
			(385, 27, 'en', 'Babol'),
			(385, 27, 'fa', 'بابل'),
			(386, 27, 'en', 'Babolsar'),
			(386, 27, 'fa', 'بابلسر'),
			(387, 27, 'en', 'Balade'),
			(387, 27, 'fa', 'بلده'),
			(388, 27, 'en', 'Behshahr'),
			(388, 27, 'fa', 'بهشهر'),
			(389, 27, 'en', 'Pol Sefid'),
			(389, 27, 'fa', 'پل سفید'),
			(390, 27, 'en', 'Tonkabon'),
			(390, 27, 'fa', 'تنکابن'),
			(391, 27, 'en', 'Juibar'),
			(391, 27, 'fa', 'جویبار'),
			(392, 27, 'en', 'Chalus'),
			(392, 27, 'fa', 'چالوس'),
			(393, 27, 'en', 'Khoram Abad'),
			(393, 27, 'fa', 'خرم آباد'),
			(394, 27, 'en', 'Ramsar'),
			(394, 27, 'fa', 'رامسر'),
			(395, 27, 'en', 'Rostam Kola'),
			(395, 27, 'fa', 'رستم کلا'),
			(396, 27, 'en', 'Sari'),
			(396, 27, 'fa', 'ساری'),
			(397, 27, 'en', 'Salman Shahr'),
			(397, 27, 'fa', 'سلمانشهر'),
			(398, 27, 'en', 'Savadkuh'),
			(398, 27, 'fa', 'سوادکوه'),
			(399, 27, 'en', 'Fereidun Kenar'),
			(399, 27, 'fa', 'فریدون کنار'),
			(400, 27, 'en', 'Qaem Shahr'),
			(400, 27, 'fa', 'قائم شهر'),
			(401, 27, 'en', 'Galugah'),
			(401, 27, 'fa', 'گلوگاه'),
			(402, 27, 'en', 'Mahmud Abad'),
			(402, 27, 'fa', 'محمودآباد'),
			(403, 27, 'en', 'Marzan Abad'),
			(403, 27, 'fa', 'مرزن آباد'),
			(404, 27, 'en', 'Neka'),
			(404, 27, 'fa', 'نکا'),
			(405, 27, 'en', 'Nurabad'),
			(405, 27, 'fa', 'نور'),
			(406, 27, 'en', 'Noshahr'),
			(406, 27, 'fa', 'نوشهر'),
			(407, 28, 'en', 'Ashtian'),
			(407, 28, 'fa', 'آشتیان'),
			(408, 28, 'en', 'Arak'),
			(408, 28, 'fa', 'اراک'),
			(409, 28, 'en', 'Tafresh'),
			(409, 28, 'fa', 'تفرش'),
			(410, 28, 'en', 'Khomein'),
			(410, 28, 'fa', 'خمین'),
			(411, 28, 'en', 'Delijan'),
			(411, 28, 'fa', 'دلیجان'),
			(412, 28, 'en', 'Save'),
			(412, 28, 'fa', 'ساوه'),
			(413, 28, 'en', 'Shazand'),
			(413, 28, 'fa', 'شازند'),
			(414, 28, 'en', 'Mahalat'),
			(414, 28, 'fa', 'محلات'),
			(415, 28, 'en', 'Komijan'),
			(415, 28, 'fa', 'کمیجان'),
			(416, 29, 'en', 'Abumusa'),
			(416, 29, 'fa', 'ابوموسی'),
			(417, 29, 'en', 'Bastak'),
			(417, 29, 'fa', 'بستک'),
			(418, 29, 'en', 'Bandar Jask'),
			(418, 29, 'fa', 'بندر جاسک'),
			(419, 29, 'en', 'Bandar Lenge'),
			(419, 29, 'fa', 'بندر لنگه'),
			(420, 29, 'en', 'Bandar Abbas'),
			(420, 29, 'fa', 'بندرعباس'),
			(421, 29, 'en', 'Parsian'),
			(421, 29, 'fa', 'پارسیان'),
			(422, 29, 'en', 'Haji Abad'),
			(422, 29, 'fa', 'حاجی آباد'),
			(423, 29, 'en', 'Dashti'),
			(423, 29, 'fa', 'دشتی'),
			(424, 29, 'en', 'Dehbarez and Rudan'),
			(424, 29, 'fa', 'دهبارز و رودان'),
			(425, 29, 'en', 'Qeshm'),
			(425, 29, 'fa', 'قشم'),
			(426, 29, 'en', 'Kish'),
			(426, 29, 'fa', 'کیش'),
			(427, 29, 'en', 'Minab'),
			(427, 29, 'fa', 'میناب'),
			(428, 30, 'en', 'Asadabad'),
			(428, 30, 'fa', 'اسدآباد'),
			(429, 30, 'en', 'Bahar'),
			(429, 30, 'fa', 'بهار'),
			(430, 30, 'en', 'Toiserkan'),
			(430, 30, 'fa', 'تویسرکان'),
			(431, 30, 'en', 'Razan'),
			(431, 30, 'fa', 'رزن'),
			(432, 30, 'en', 'Kabudarahang'),
			(432, 30, 'fa', 'کبودر اهنگ'),
			(433, 30, 'en', 'Malyer'),
			(433, 30, 'fa', 'ملایر'),
			(434, 30, 'en', 'Nahavand'),
			(434, 30, 'fa', 'نهاوند'),
			(435, 30, 'en', 'Hamadan'),
			(435, 30, 'fa', 'همدان'),
			(436, 31, 'en', 'Abarkuh'),
			(436, 31, 'fa', 'ابرکوه'),
			(437, 31, 'en', 'Ardekan'),
			(437, 31, 'fa', 'اردکان'),
			(438, 31, 'en', 'Ashkezar'),
			(438, 31, 'fa', 'اشکذر'),
			(439, 31, 'en', 'Bafq'),
			(439, 31, 'fa', 'بافق'),
			(440, 31, 'en', 'Taft'),
			(440, 31, 'fa', 'تفت'),
			(441, 31, 'en', 'Mehriz'),
			(441, 31, 'fa', 'مهریز'),
			(442, 31, 'en', 'Meibod'),
			(442, 31, 'fa', 'میبد'),
			(443, 31, 'en', 'Harat'),
			(443, 31, 'fa', 'هرات'),
			(444, 31, 'en', 'Yazd'),
			(444, 31, 'fa', 'یزد'),
			(445, 17, 'en', 'Larestan'),
			(445, 17, 'fa', 'لارستان'),
			(446, 25, 'en', 'Talesh'),
			(446, 25, 'fa', 'تالش'),
			(447, 4,  'en', 'Chedegan'),
			(447, 4,  'fa', 'چادگان'),
			(448, 9,  'en', 'Kiar'),
			(448, 9,  'fa', 'کیار')

	");
	
	return;	
}