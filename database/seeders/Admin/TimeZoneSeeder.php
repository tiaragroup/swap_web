<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Seeder;
use DB;

class TimeZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("INSERT INTO `timezones` (`id`, `country_code`, `timezone`, `gmt_offset`, `dst_offset`, `raw_offset`, `created_at`, `updated_at`) VALUES
(1, 'AD', 'Europe/Andorra', 1.00, 2.00, 1.00, NULL, NULL),
(2, 'AE', 'Asia/Dubai', 4.00, 4.00, 4.00, NULL, NULL),
(3, 'AF', 'Asia/Kabul', 4.50, 4.50, 4.50, NULL, NULL),
(4, 'AG', 'America/Antigua', -4.00, -4.00, -4.00, NULL, NULL),
(5, 'AI', 'America/Anguilla', -4.00, -4.00, -4.00, NULL, NULL),
(6, 'AL', 'Europe/Tirane', 1.00, 2.00, 1.00, NULL, NULL),
(7, 'AM', 'Asia/Yerevan', 4.00, 4.00, 4.00, NULL, NULL),
(8, 'AO', 'Africa/Luanda', 1.00, 1.00, 1.00, NULL, NULL),
(9, 'AQ', 'Antarctica/Casey', 8.00, 8.00, 8.00, NULL, NULL),
(10, 'AQ', 'Antarctica/Davis', 7.00, 7.00, 7.00, NULL, NULL),
(11, 'AQ', 'Antarctica/DumontDUrville', 10.00, 10.00, 10.00, NULL, NULL),
(12, 'AQ', 'Antarctica/Mawson', 5.00, 5.00, 5.00, NULL, NULL),
(13, 'AQ', 'Antarctica/McMurdo', 13.00, 12.00, 12.00, NULL, NULL),
(14, 'AQ', 'Antarctica/Palmer', -3.00, -4.00, -4.00, NULL, NULL),
(15, 'AQ', 'Antarctica/Rothera', -3.00, -3.00, -3.00, NULL, NULL),
(16, 'AQ', 'Antarctica/South_Pole', 13.00, 12.00, 12.00, NULL, NULL),
(17, 'AQ', 'Antarctica/Syowa', 3.00, 3.00, 3.00, NULL, NULL),
(18, 'AQ', 'Antarctica/Vostok', 6.00, 6.00, 6.00, NULL, NULL),
(19, 'AR', 'America/Argentina/Buenos_Aires', -3.00, -3.00, -3.00, NULL, NULL),
(20, 'AR', 'America/Argentina/Catamarca', -3.00, -3.00, -3.00, NULL, NULL),
(21, 'AR', 'America/Argentina/Cordoba', -3.00, -3.00, -3.00, NULL, NULL),
(22, 'AR', 'America/Argentina/Jujuy', -3.00, -3.00, -3.00, NULL, NULL),
(23, 'AR', 'America/Argentina/La_Rioja', -3.00, -3.00, -3.00, NULL, NULL),
(24, 'AR', 'America/Argentina/Mendoza', -3.00, -3.00, -3.00, NULL, NULL),
(25, 'AR', 'America/Argentina/Rio_Gallegos', -3.00, -3.00, -3.00, NULL, NULL),
(26, 'AR', 'America/Argentina/Salta', -3.00, -3.00, -3.00, NULL, NULL),
(27, 'AR', 'America/Argentina/San_Juan', -3.00, -3.00, -3.00, NULL, NULL),
(28, 'AR', 'America/Argentina/San_Luis', -3.00, -3.00, -3.00, NULL, NULL),
(29, 'AR', 'America/Argentina/Tucuman', -3.00, -3.00, -3.00, NULL, NULL),
(30, 'AR', 'America/Argentina/Ushuaia', -3.00, -3.00, -3.00, NULL, NULL),
(31, 'AS', 'Pacific/Pago_Pago', -11.00, -11.00, -11.00, NULL, NULL),
(32, 'AT', 'Europe/Vienna', 1.00, 2.00, 1.00, NULL, NULL),
(33, 'AU', 'Antarctica/Macquarie', 11.00, 11.00, 11.00, NULL, NULL),
(34, 'AU', 'Australia/Adelaide', 10.50, 9.50, 9.50, NULL, NULL),
(35, 'AU', 'Australia/Brisbane', 10.00, 10.00, 10.00, NULL, NULL),
(36, 'AU', 'Australia/Broken_Hill', 10.50, 9.50, 9.50, NULL, NULL),
(37, 'AU', 'Australia/Currie', 11.00, 10.00, 10.00, NULL, NULL),
(38, 'AU', 'Australia/Darwin', 9.50, 9.50, 9.50, NULL, NULL),
(39, 'AU', 'Australia/Eucla', 8.75, 8.75, 8.75, NULL, NULL),
(40, 'AU', 'Australia/Hobart', 11.00, 10.00, 10.00, NULL, NULL),
(41, 'AU', 'Australia/Lindeman', 10.00, 10.00, 10.00, NULL, NULL),
(42, 'AU', 'Australia/Lord_Howe', 11.00, 10.50, 10.50, NULL, NULL),
(43, 'AU', 'Australia/Melbourne', 11.00, 10.00, 10.00, NULL, NULL),
(44, 'AU', 'Australia/Perth', 8.00, 8.00, 8.00, NULL, NULL),
(45, 'AU', 'Australia/Sydney', 11.00, 10.00, 10.00, NULL, NULL),
(46, 'AW', 'America/Aruba', -4.00, -4.00, -4.00, NULL, NULL),
(47, 'AX', 'Europe/Mariehamn', 2.00, 3.00, 2.00, NULL, NULL),
(48, 'AZ', 'Asia/Baku', 4.00, 5.00, 4.00, NULL, NULL),
(49, 'BA', 'Europe/Sarajevo', 1.00, 2.00, 1.00, NULL, NULL),
(50, 'BB', 'America/Barbados', -4.00, -4.00, -4.00, NULL, NULL),
(51, 'BD', 'Asia/Dhaka', 6.00, 6.00, 6.00, NULL, NULL),
(52, 'BE', 'Europe/Brussels', 1.00, 2.00, 1.00, NULL, NULL),
(53, 'BF', 'Africa/Ouagadougou', 0.00, 0.00, 0.00, NULL, NULL),
(54, 'BG', 'Europe/Sofia', 2.00, 3.00, 2.00, NULL, NULL),
(55, 'BH', 'Asia/Bahrain', 3.00, 3.00, 3.00, NULL, NULL),
(56, 'BI', 'Africa/Bujumbura', 2.00, 2.00, 2.00, NULL, NULL),
(57, 'BJ', 'Africa/Porto-Novo', 1.00, 1.00, 1.00, NULL, NULL),
(58, 'BL', 'America/St_Barthelemy', -4.00, -4.00, -4.00, NULL, NULL),
(59, 'BM', 'Atlantic/Bermuda', -4.00, -3.00, -4.00, NULL, NULL),
(60, 'BN', 'Asia/Brunei', 8.00, 8.00, 8.00, NULL, NULL),
(61, 'BO', 'America/La_Paz', -4.00, -4.00, -4.00, NULL, NULL),
(62, 'BQ', 'America/Kralendijk', -4.00, -4.00, -4.00, NULL, NULL),
(63, 'BR', 'America/Araguaina', -3.00, -3.00, -3.00, NULL, NULL),
(64, 'BR', 'America/Bahia', -3.00, -3.00, -3.00, NULL, NULL),
(65, 'BR', 'America/Belem', -3.00, -3.00, -3.00, NULL, NULL),
(66, 'BR', 'America/Boa_Vista', -4.00, -4.00, -4.00, NULL, NULL),
(67, 'BR', 'America/Campo_Grande', -3.00, -4.00, -4.00, NULL, NULL),
(68, 'BR', 'America/Cuiaba', -3.00, -4.00, -4.00, NULL, NULL),
(69, 'BR', 'America/Eirunepe', -5.00, -5.00, -5.00, NULL, NULL),
(70, 'BR', 'America/Fortaleza', -3.00, -3.00, -3.00, NULL, NULL),
(71, 'BR', 'America/Maceio', -3.00, -3.00, -3.00, NULL, NULL),
(72, 'BR', 'America/Manaus', -4.00, -4.00, -4.00, NULL, NULL),
(73, 'BR', 'America/Noronha', -2.00, -2.00, -2.00, NULL, NULL),
(74, 'BR', 'America/Porto_Velho', -4.00, -4.00, -4.00, NULL, NULL),
(75, 'BR', 'America/Recife', -3.00, -3.00, -3.00, NULL, NULL),
(76, 'BR', 'America/Rio_Branco', -5.00, -5.00, -5.00, NULL, NULL),
(77, 'BR', 'America/Santarem', -3.00, -3.00, -3.00, NULL, NULL),
(78, 'BR', 'America/Sao_Paulo', -2.00, -3.00, -3.00, NULL, NULL),
(79, 'BS', 'America/Nassau', -5.00, -4.00, -5.00, NULL, NULL),
(80, 'BT', 'Asia/Thimphu', 6.00, 6.00, 6.00, NULL, NULL),
(81, 'BW', 'Africa/Gaborone', 2.00, 2.00, 2.00, NULL, NULL),
(82, 'BY', 'Europe/Minsk', 3.00, 3.00, 3.00, NULL, NULL),
(83, 'BZ', 'America/Belize', -6.00, -6.00, -6.00, NULL, NULL),
(84, 'CA', 'America/Atikokan', -5.00, -5.00, -5.00, NULL, NULL),
(85, 'CA', 'America/Blanc-Sablon', -4.00, -4.00, -4.00, NULL, NULL),
(86, 'CA', 'America/Cambridge_Bay', -7.00, -6.00, -7.00, NULL, NULL),
(87, 'CA', 'America/Creston', -7.00, -7.00, -7.00, NULL, NULL),
(88, 'CA', 'America/Dawson', -8.00, -7.00, -8.00, NULL, NULL),
(89, 'CA', 'America/Dawson_Creek', -7.00, -7.00, -7.00, NULL, NULL),
(90, 'CA', 'America/Edmonton', -7.00, -6.00, -7.00, NULL, NULL),
(91, 'CA', 'America/Glace_Bay', -4.00, -3.00, -4.00, NULL, NULL),
(92, 'CA', 'America/Goose_Bay', -4.00, -3.00, -4.00, NULL, NULL),
(93, 'CA', 'America/Halifax', -4.00, -3.00, -4.00, NULL, NULL),
(94, 'CA', 'America/Inuvik', -7.00, -6.00, -7.00, NULL, NULL),
(95, 'CA', 'America/Iqaluit', -5.00, -4.00, -5.00, NULL, NULL),
(96, 'CA', 'America/Moncton', -4.00, -3.00, -4.00, NULL, NULL),
(97, 'CA', 'America/Montreal', -5.00, -4.00, -5.00, NULL, NULL),
(98, 'CA', 'America/Nipigon', -5.00, -4.00, -5.00, NULL, NULL),
(99, 'CA', 'America/Pangnirtung', -5.00, -4.00, -5.00, NULL, NULL),
(100, 'CA', 'America/Rainy_River', -6.00, -5.00, -6.00, NULL, NULL),
(101, 'CA', 'America/Rankin_Inlet', -6.00, -5.00, -6.00, NULL, NULL),
(102, 'CA', 'America/Regina', -6.00, -6.00, -6.00, NULL, NULL),
(103, 'CA', 'America/Resolute', -6.00, -5.00, -6.00, NULL, NULL),
(104, 'CA', 'America/St_Johns', -3.50, -2.50, -3.50, NULL, NULL),
(105, 'CA', 'America/Swift_Current', -6.00, -6.00, -6.00, NULL, NULL),
(106, 'CA', 'America/Thunder_Bay', -5.00, -4.00, -5.00, NULL, NULL),
(107, 'CA', 'America/Toronto', -5.00, -4.00, -5.00, NULL, NULL),
(108, 'CA', 'America/Vancouver', -8.00, -7.00, -8.00, NULL, NULL),
(109, 'CA', 'America/Whitehorse', -8.00, -7.00, -8.00, NULL, NULL),
(110, 'CA', 'America/Winnipeg', -6.00, -5.00, -6.00, NULL, NULL),
(111, 'CA', 'America/Yellowknife', -7.00, -6.00, -7.00, NULL, NULL),
(112, 'CC', 'Indian/Cocos', 6.50, 6.50, 6.50, NULL, NULL),
(113, 'CD', 'Africa/Kinshasa', 1.00, 1.00, 1.00, NULL, NULL),
(114, 'CD', 'Africa/Lubumbashi', 2.00, 2.00, 2.00, NULL, NULL),
(115, 'CF', 'Africa/Bangui', 1.00, 1.00, 1.00, NULL, NULL),
(116, 'CG', 'Africa/Brazzaville', 1.00, 1.00, 1.00, NULL, NULL),
(117, 'CH', 'Europe/Zurich', 1.00, 2.00, 1.00, NULL, NULL),
(118, 'CI', 'Africa/Abidjan', 0.00, 0.00, 0.00, NULL, NULL),
(119, 'CK', 'Pacific/Rarotonga', -10.00, -10.00, -10.00, NULL, NULL),
(120, 'CL', 'America/Santiago', -3.00, -4.00, -4.00, NULL, NULL),
(121, 'CL', 'Pacific/Easter', -5.00, -6.00, -6.00, NULL, NULL),
(122, 'CM', 'Africa/Douala', 1.00, 1.00, 1.00, NULL, NULL),
(123, 'CN', 'Asia/Chongqing', 8.00, 8.00, 8.00, NULL, NULL),
(124, 'CN', 'Asia/Harbin', 8.00, 8.00, 8.00, NULL, NULL),
(125, 'CN', 'Asia/Kashgar', 8.00, 8.00, 8.00, NULL, NULL),
(126, 'CN', 'Asia/Shanghai', 8.00, 8.00, 8.00, NULL, NULL),
(127, 'CN', 'Asia/Urumqi', 8.00, 8.00, 8.00, NULL, NULL),
(128, 'CO', 'America/Bogota', -5.00, -5.00, -5.00, NULL, NULL),
(129, 'CR', 'America/Costa_Rica', -6.00, -6.00, -6.00, NULL, NULL),
(130, 'CU', 'America/Havana', -5.00, -4.00, -5.00, NULL, NULL),
(131, 'CV', 'Atlantic/Cape_Verde', -1.00, -1.00, -1.00, NULL, NULL),
(132, 'CW', 'America/Curacao', -4.00, -4.00, -4.00, NULL, NULL),
(133, 'CX', 'Indian/Christmas', 7.00, 7.00, 7.00, NULL, NULL),
(134, 'CY', 'Asia/Nicosia', 2.00, 3.00, 2.00, NULL, NULL),
(135, 'CZ', 'Europe/Prague', 1.00, 2.00, 1.00, NULL, NULL),
(136, 'DE', 'Europe/Berlin', 1.00, 2.00, 1.00, NULL, NULL),
(137, 'DE', 'Europe/Busingen', 1.00, 2.00, 1.00, NULL, NULL),
(138, 'DJ', 'Africa/Djibouti', 3.00, 3.00, 3.00, NULL, NULL),
(139, 'DK', 'Europe/Copenhagen', 1.00, 2.00, 1.00, NULL, NULL),
(140, 'DM', 'America/Dominica', -4.00, -4.00, -4.00, NULL, NULL),
(141, 'DO', 'America/Santo_Domingo', -4.00, -4.00, -4.00, NULL, NULL),
(142, 'DZ', 'Africa/Algiers', 1.00, 1.00, 1.00, NULL, NULL),
(143, 'EC', 'America/Guayaquil', -5.00, -5.00, -5.00, NULL, NULL),
(144, 'EC', 'Pacific/Galapagos', -6.00, -6.00, -6.00, NULL, NULL),
(145, 'EE', 'Europe/Tallinn', 2.00, 3.00, 2.00, NULL, NULL),
(146, 'EG', 'Africa/Cairo', 2.00, 2.00, 2.00, NULL, NULL),
(147, 'EH', 'Africa/El_Aaiun', 0.00, 0.00, 0.00, NULL, NULL),
(148, 'ER', 'Africa/Asmara', 3.00, 3.00, 3.00, NULL, NULL),
(149, 'ES', 'Africa/Ceuta', 1.00, 2.00, 1.00, NULL, NULL),
(150, 'ES', 'Atlantic/Canary', 0.00, 1.00, 0.00, NULL, NULL),
(151, 'ES', 'Europe/Madrid', 1.00, 2.00, 1.00, NULL, NULL),
(152, 'ET', 'Africa/Addis_Ababa', 3.00, 3.00, 3.00, NULL, NULL),
(153, 'FI', 'Europe/Helsinki', 2.00, 3.00, 2.00, NULL, NULL),
(154, 'FJ', 'Pacific/Fiji', 13.00, 12.00, 12.00, NULL, NULL),
(155, 'FK', 'Atlantic/Stanley', -3.00, -3.00, -3.00, NULL, NULL),
(156, 'FM', 'Pacific/Chuuk', 10.00, 10.00, 10.00, NULL, NULL),
(157, 'FM', 'Pacific/Kosrae', 11.00, 11.00, 11.00, NULL, NULL),
(158, 'FM', 'Pacific/Pohnpei', 11.00, 11.00, 11.00, NULL, NULL),
(159, 'FO', 'Atlantic/Faroe', 0.00, 1.00, 0.00, NULL, NULL),
(160, 'FR', 'Europe/Paris', 1.00, 2.00, 1.00, NULL, NULL),
(161, 'GA', 'Africa/Libreville', 1.00, 1.00, 1.00, NULL, NULL),
(162, 'GB', 'Europe/London', 0.00, 1.00, 0.00, NULL, NULL),
(163, 'GD', 'America/Grenada', -4.00, -4.00, -4.00, NULL, NULL),
(164, 'GE', 'Asia/Tbilisi', 4.00, 4.00, 4.00, NULL, NULL),
(165, 'GF', 'America/Cayenne', -3.00, -3.00, -3.00, NULL, NULL),
(166, 'GG', 'Europe/Guernsey', 0.00, 1.00, 0.00, NULL, NULL),
(167, 'GH', 'Africa/Accra', 0.00, 0.00, 0.00, NULL, NULL),
(168, 'GI', 'Europe/Gibraltar', 1.00, 2.00, 1.00, NULL, NULL),
(169, 'GL', 'America/Danmarkshavn', 0.00, 0.00, 0.00, NULL, NULL),
(170, 'GL', 'America/Godthab', -3.00, -2.00, -3.00, NULL, NULL),
(171, 'GL', 'America/Scoresbysund', -1.00, 0.00, -1.00, NULL, NULL),
(172, 'GL', 'America/Thule', -4.00, -3.00, -4.00, NULL, NULL),
(173, 'GM', 'Africa/Banjul', 0.00, 0.00, 0.00, NULL, NULL),
(174, 'GN', 'Africa/Conakry', 0.00, 0.00, 0.00, NULL, NULL),
(175, 'GP', 'America/Guadeloupe', -4.00, -4.00, -4.00, NULL, NULL),
(176, 'GQ', 'Africa/Malabo', 1.00, 1.00, 1.00, NULL, NULL),
(177, 'GR', 'Europe/Athens', 2.00, 3.00, 2.00, NULL, NULL),
(178, 'GS', 'Atlantic/South_Georgia', -2.00, -2.00, -2.00, NULL, NULL),
(179, 'GT', 'America/Guatemala', -6.00, -6.00, -6.00, NULL, NULL),
(180, 'GU', 'Pacific/Guam', 10.00, 10.00, 10.00, NULL, NULL),
(181, 'GW', 'Africa/Bissau', 0.00, 0.00, 0.00, NULL, NULL),
(182, 'GY', 'America/Guyana', -4.00, -4.00, -4.00, NULL, NULL),
(183, 'HK', 'Asia/Hong_Kong', 8.00, 8.00, 8.00, NULL, NULL),
(184, 'HN', 'America/Tegucigalpa', -6.00, -6.00, -6.00, NULL, NULL),
(185, 'HR', 'Europe/Zagreb', 1.00, 2.00, 1.00, NULL, NULL),
(186, 'HT', 'America/Port-au-Prince', -5.00, -4.00, -5.00, NULL, NULL),
(187, 'HU', 'Europe/Budapest', 1.00, 2.00, 1.00, NULL, NULL),
(188, 'ID', 'Asia/Jakarta', 7.00, 7.00, 7.00, NULL, NULL),
(189, 'ID', 'Asia/Jayapura', 9.00, 9.00, 9.00, NULL, NULL),
(190, 'ID', 'Asia/Makassar', 8.00, 8.00, 8.00, NULL, NULL),
(191, 'ID', 'Asia/Pontianak', 7.00, 7.00, 7.00, NULL, NULL),
(192, 'IE', 'Europe/Dublin', 0.00, 1.00, 0.00, NULL, NULL),
(193, 'IL', 'Asia/Jerusalem', 2.00, 3.00, 2.00, NULL, NULL),
(194, 'IM', 'Europe/Isle_of_Man', 0.00, 1.00, 0.00, NULL, NULL),
(195, 'IN', 'Asia/Kolkata', 5.50, 5.50, 5.50, NULL, NULL),
(196, 'IO', 'Indian/Chagos', 6.00, 6.00, 6.00, NULL, NULL),
(197, 'IQ', 'Asia/Baghdad', 3.00, 3.00, 3.00, NULL, NULL),
(198, 'IR', 'Asia/Tehran', 3.50, 4.50, 3.50, NULL, NULL),
(199, 'IS', 'Atlantic/Reykjavik', 0.00, 0.00, 0.00, NULL, NULL),
(200, 'IT', 'Europe/Rome', 1.00, 2.00, 1.00, NULL, NULL),
(201, 'JE', 'Europe/Jersey', 0.00, 1.00, 0.00, NULL, NULL),
(202, 'JM', 'America/Jamaica', -5.00, -5.00, -5.00, NULL, NULL),
(203, 'JO', 'Asia/Amman', 2.00, 3.00, 2.00, NULL, NULL),
(204, 'JP', 'Asia/Tokyo', 9.00, 9.00, 9.00, NULL, NULL),
(205, 'KE', 'Africa/Nairobi', 3.00, 3.00, 3.00, NULL, NULL),
(206, 'KG', 'Asia/Bishkek', 6.00, 6.00, 6.00, NULL, NULL),
(207, 'KH', 'Asia/Phnom_Penh', 7.00, 7.00, 7.00, NULL, NULL),
(208, 'KI', 'Pacific/Enderbury', 13.00, 13.00, 13.00, NULL, NULL),
(209, 'KI', 'Pacific/Kiritimati', 14.00, 14.00, 14.00, NULL, NULL),
(210, 'KI', 'Pacific/Tarawa', 12.00, 12.00, 12.00, NULL, NULL),
(211, 'KM', 'Indian/Comoro', 3.00, 3.00, 3.00, NULL, NULL),
(212, 'KN', 'America/St_Kitts', -4.00, -4.00, -4.00, NULL, NULL),
(213, 'KP', 'Asia/Pyongyang', 9.00, 9.00, 9.00, NULL, NULL),
(214, 'KR', 'Asia/Seoul', 9.00, 9.00, 9.00, NULL, NULL),
(215, 'KW', 'Asia/Kuwait', 3.00, 3.00, 3.00, NULL, NULL),
(216, 'KY', 'America/Cayman', -5.00, -5.00, -5.00, NULL, NULL),
(217, 'KZ', 'Asia/Almaty', 6.00, 6.00, 6.00, NULL, NULL),
(218, 'KZ', 'Asia/Aqtau', 5.00, 5.00, 5.00, NULL, NULL),
(219, 'KZ', 'Asia/Aqtobe', 5.00, 5.00, 5.00, NULL, NULL),
(220, 'KZ', 'Asia/Oral', 5.00, 5.00, 5.00, NULL, NULL),
(221, 'KZ', 'Asia/Qyzylorda', 6.00, 6.00, 6.00, NULL, NULL),
(222, 'LA', 'Asia/Vientiane', 7.00, 7.00, 7.00, NULL, NULL),
(223, 'LB', 'Asia/Beirut', 2.00, 3.00, 2.00, NULL, NULL),
(224, 'LC', 'America/St_Lucia', -4.00, -4.00, -4.00, NULL, NULL),
(225, 'LI', 'Europe/Vaduz', 1.00, 2.00, 1.00, NULL, NULL),
(226, 'LK', 'Asia/Colombo', 5.50, 5.50, 5.50, NULL, NULL),
(227, 'LR', 'Africa/Monrovia', 0.00, 0.00, 0.00, NULL, NULL),
(228, 'LS', 'Africa/Maseru', 2.00, 2.00, 2.00, NULL, NULL),
(229, 'LT', 'Europe/Vilnius', 2.00, 3.00, 2.00, NULL, NULL),
(230, 'LU', 'Europe/Luxembourg', 1.00, 2.00, 1.00, NULL, NULL),
(231, 'LV', 'Europe/Riga', 2.00, 3.00, 2.00, NULL, NULL),
(232, 'LY', 'Africa/Tripoli', 2.00, 2.00, 2.00, NULL, NULL),
(233, 'MA', 'Africa/Casablanca', 0.00, 0.00, 0.00, NULL, NULL),
(234, 'MC', 'Europe/Monaco', 1.00, 2.00, 1.00, NULL, NULL),
(235, 'MD', 'Europe/Chisinau', 2.00, 3.00, 2.00, NULL, NULL),
(236, 'ME', 'Europe/Podgorica', 1.00, 2.00, 1.00, NULL, NULL),
(237, 'MF', 'America/Marigot', -4.00, -4.00, -4.00, NULL, NULL),
(238, 'MG', 'Indian/Antananarivo', 3.00, 3.00, 3.00, NULL, NULL),
(239, 'MH', 'Pacific/Kwajalein', 12.00, 12.00, 12.00, NULL, NULL),
(240, 'MH', 'Pacific/Majuro', 12.00, 12.00, 12.00, NULL, NULL),
(241, 'MK', 'Europe/Skopje', 1.00, 2.00, 1.00, NULL, NULL),
(242, 'ML', 'Africa/Bamako', 0.00, 0.00, 0.00, NULL, NULL),
(243, 'MM', 'Asia/Rangoon', 6.50, 6.50, 6.50, NULL, NULL),
(244, 'MN', 'Asia/Choibalsan', 8.00, 8.00, 8.00, NULL, NULL),
(245, 'MN', 'Asia/Hovd', 7.00, 7.00, 7.00, NULL, NULL),
(246, 'MN', 'Asia/Ulaanbaatar', 8.00, 8.00, 8.00, NULL, NULL),
(247, 'MO', 'Asia/Macau', 8.00, 8.00, 8.00, NULL, NULL),
(248, 'MP', 'Pacific/Saipan', 10.00, 10.00, 10.00, NULL, NULL),
(249, 'MQ', 'America/Martinique', -4.00, -4.00, -4.00, NULL, NULL),
(250, 'MR', 'Africa/Nouakchott', 0.00, 0.00, 0.00, NULL, NULL),
(251, 'MS', 'America/Montserrat', -4.00, -4.00, -4.00, NULL, NULL),
(252, 'MT', 'Europe/Malta', 1.00, 2.00, 1.00, NULL, NULL),
(253, 'MU', 'Indian/Mauritius', 4.00, 4.00, 4.00, NULL, NULL),
(254, 'MV', 'Indian/Maldives', 5.00, 5.00, 5.00, NULL, NULL),
(255, 'MW', 'Africa/Blantyre', 2.00, 2.00, 2.00, NULL, NULL),
(256, 'MX', 'America/Bahia_Banderas', -6.00, -5.00, -6.00, NULL, NULL),
(257, 'MX', 'America/Cancun', -6.00, -5.00, -6.00, NULL, NULL),
(258, 'MX', 'America/Chihuahua', -7.00, -6.00, -7.00, NULL, NULL),
(259, 'MX', 'America/Hermosillo', -7.00, -7.00, -7.00, NULL, NULL),
(260, 'MX', 'America/Matamoros', -6.00, -5.00, -6.00, NULL, NULL),
(261, 'MX', 'America/Mazatlan', -7.00, -6.00, -7.00, NULL, NULL),
(262, 'MX', 'America/Merida', -6.00, -5.00, -6.00, NULL, NULL),
(263, 'MX', 'America/Mexico_City', -6.00, -5.00, -6.00, NULL, NULL),
(264, 'MX', 'America/Monterrey', -6.00, -5.00, -6.00, NULL, NULL),
(265, 'MX', 'America/Ojinaga', -7.00, -6.00, -7.00, NULL, NULL),
(266, 'MX', 'America/Santa_Isabel', -8.00, -7.00, -8.00, NULL, NULL),
(267, 'MX', 'America/Tijuana', -8.00, -7.00, -8.00, NULL, NULL),
(268, 'MY', 'Asia/Kuala_Lumpur', 8.00, 8.00, 8.00, NULL, NULL),
(269, 'MY', 'Asia/Kuching', 8.00, 8.00, 8.00, NULL, NULL),
(270, 'MZ', 'Africa/Maputo', 2.00, 2.00, 2.00, NULL, NULL),
(271, 'NA', 'Africa/Windhoek', 2.00, 1.00, 1.00, NULL, NULL),
(272, 'NC', 'Pacific/Noumea', 11.00, 11.00, 11.00, NULL, NULL),
(273, 'NE', 'Africa/Niamey', 1.00, 1.00, 1.00, NULL, NULL),
(274, 'NF', 'Pacific/Norfolk', 11.50, 11.50, 11.50, NULL, NULL),
(275, 'NG', 'Africa/Lagos', 1.00, 1.00, 1.00, NULL, NULL),
(276, 'NI', 'America/Managua', -6.00, -6.00, -6.00, NULL, NULL),
(277, 'NL', 'Europe/Amsterdam', 1.00, 2.00, 1.00, NULL, NULL),
(278, 'NO', 'Europe/Oslo', 1.00, 2.00, 1.00, NULL, NULL),
(279, 'NP', 'Asia/Kathmandu', 5.75, 5.75, 5.75, NULL, NULL),
(280, 'NR', 'Pacific/Nauru', 12.00, 12.00, 12.00, NULL, NULL),
(281, 'NU', 'Pacific/Niue', -11.00, -11.00, -11.00, NULL, NULL),
(282, 'NZ', 'Pacific/Auckland', 13.00, 12.00, 12.00, NULL, NULL),
(283, 'NZ', 'Pacific/Chatham', 13.75, 12.75, 12.75, NULL, NULL),
(284, 'OM', 'Asia/Muscat', 4.00, 4.00, 4.00, NULL, NULL),
(285, 'PA', 'America/Panama', -5.00, -5.00, -5.00, NULL, NULL),
(286, 'PE', 'America/Lima', -5.00, -5.00, -5.00, NULL, NULL),
(287, 'PF', 'Pacific/Gambier', -9.00, -9.00, -9.00, NULL, NULL),
(288, 'PF', 'Pacific/Marquesas', -9.50, -9.50, -9.50, NULL, NULL),
(289, 'PF', 'Pacific/Tahiti', -10.00, -10.00, -10.00, NULL, NULL),
(290, 'PG', 'Pacific/Port_Moresby', 10.00, 10.00, 10.00, NULL, NULL),
(291, 'PH', 'Asia/Manila', 8.00, 8.00, 8.00, NULL, NULL),
(292, 'PK', 'Asia/Karachi', 5.00, 5.00, 5.00, NULL, NULL),
(293, 'PL', 'Europe/Warsaw', 1.00, 2.00, 1.00, NULL, NULL),
(294, 'PM', 'America/Miquelon', -3.00, -2.00, -3.00, NULL, NULL),
(295, 'PN', 'Pacific/Pitcairn', -8.00, -8.00, -8.00, NULL, NULL),
(296, 'PR', 'America/Puerto_Rico', -4.00, -4.00, -4.00, NULL, NULL),
(297, 'PS', 'Asia/Gaza', 2.00, 3.00, 2.00, NULL, NULL),
(298, 'PS', 'Asia/Hebron', 2.00, 3.00, 2.00, NULL, NULL),
(299, 'PT', 'Atlantic/Azores', -1.00, 0.00, -1.00, NULL, NULL),
(300, 'PT', 'Atlantic/Madeira', 0.00, 1.00, 0.00, NULL, NULL),
(301, 'PT', 'Europe/Lisbon', 0.00, 1.00, 0.00, NULL, NULL),
(302, 'PW', 'Pacific/Palau', 9.00, 9.00, 9.00, NULL, NULL),
(303, 'PY', 'America/Asuncion', -3.00, -4.00, -4.00, NULL, NULL),
(304, 'QA', 'Asia/Qatar', 3.00, 3.00, 3.00, NULL, NULL),
(305, 'RE', 'Indian/Reunion', 4.00, 4.00, 4.00, NULL, NULL),
(306, 'RO', 'Europe/Bucharest', 2.00, 3.00, 2.00, NULL, NULL),
(307, 'RS', 'Europe/Belgrade', 1.00, 2.00, 1.00, NULL, NULL),
(308, 'RU', 'Asia/Anadyr', 12.00, 12.00, 12.00, NULL, NULL),
(309, 'RU', 'Asia/Irkutsk', 9.00, 9.00, 9.00, NULL, NULL),
(310, 'RU', 'Asia/Kamchatka', 12.00, 12.00, 12.00, NULL, NULL),
(311, 'RU', 'Asia/Khandyga', 10.00, 10.00, 10.00, NULL, NULL),
(312, 'RU', 'Asia/Krasnoyarsk', 8.00, 8.00, 8.00, NULL, NULL),
(313, 'RU', 'Asia/Magadan', 12.00, 12.00, 12.00, NULL, NULL),
(314, 'RU', 'Asia/Novokuznetsk', 7.00, 7.00, 7.00, NULL, NULL),
(315, 'RU', 'Asia/Novosibirsk', 7.00, 7.00, 7.00, NULL, NULL),
(316, 'RU', 'Asia/Omsk', 7.00, 7.00, 7.00, NULL, NULL),
(317, 'RU', 'Asia/Sakhalin', 11.00, 11.00, 11.00, NULL, NULL),
(318, 'RU', 'Asia/Ust-Nera', 11.00, 11.00, 11.00, NULL, NULL),
(319, 'RU', 'Asia/Vladivostok', 11.00, 11.00, 11.00, NULL, NULL),
(320, 'RU', 'Asia/Yakutsk', 10.00, 10.00, 10.00, NULL, NULL),
(321, 'RU', 'Asia/Yekaterinburg', 6.00, 6.00, 6.00, NULL, NULL),
(322, 'RU', 'Europe/Kaliningrad', 3.00, 3.00, 3.00, NULL, NULL),
(323, 'RU', 'Europe/Moscow', 4.00, 4.00, 4.00, NULL, NULL),
(324, 'RU', 'Europe/Samara', 4.00, 4.00, 4.00, NULL, NULL),
(325, 'RU', 'Europe/Volgograd', 4.00, 4.00, 4.00, NULL, NULL),
(326, 'RW', 'Africa/Kigali', 2.00, 2.00, 2.00, NULL, NULL),
(327, 'SA', 'Asia/Riyadh', 3.00, 3.00, 3.00, NULL, NULL),
(328, 'SB', 'Pacific/Guadalcanal', 11.00, 11.00, 11.00, NULL, NULL),
(329, 'SC', 'Indian/Mahe', 4.00, 4.00, 4.00, NULL, NULL),
(330, 'SD', 'Africa/Khartoum', 3.00, 3.00, 3.00, NULL, NULL),
(331, 'SE', 'Europe/Stockholm', 1.00, 2.00, 1.00, NULL, NULL),
(332, 'SG', 'Asia/Singapore', 8.00, 8.00, 8.00, NULL, NULL),
(333, 'SH', 'Atlantic/St_Helena', 0.00, 0.00, 0.00, NULL, NULL),
(334, 'SI', 'Europe/Ljubljana', 1.00, 2.00, 1.00, NULL, NULL),
(335, 'SJ', 'Arctic/Longyearbyen', 1.00, 2.00, 1.00, NULL, NULL),
(336, 'SK', 'Europe/Bratislava', 1.00, 2.00, 1.00, NULL, NULL),
(337, 'SL', 'Africa/Freetown', 0.00, 0.00, 0.00, NULL, NULL),
(338, 'SM', 'Europe/San_Marino', 1.00, 2.00, 1.00, NULL, NULL),
(339, 'SN', 'Africa/Dakar', 0.00, 0.00, 0.00, NULL, NULL),
(340, 'SO', 'Africa/Mogadishu', 3.00, 3.00, 3.00, NULL, NULL),
(341, 'SR', 'America/Paramaribo', -3.00, -3.00, -3.00, NULL, NULL),
(342, 'SS', 'Africa/Juba', 3.00, 3.00, 3.00, NULL, NULL),
(343, 'ST', 'Africa/Sao_Tome', 0.00, 0.00, 0.00, NULL, NULL),
(344, 'SV', 'America/El_Salvador', -6.00, -6.00, -6.00, NULL, NULL),
(345, 'SX', 'America/Lower_Princes', -4.00, -4.00, -4.00, NULL, NULL),
(346, 'SY', 'Asia/Damascus', 2.00, 3.00, 2.00, NULL, NULL),
(347, 'SZ', 'Africa/Mbabane', 2.00, 2.00, 2.00, NULL, NULL),
(348, 'TC', 'America/Grand_Turk', -5.00, -4.00, -5.00, NULL, NULL),
(349, 'TD', 'Africa/Ndjamena', 1.00, 1.00, 1.00, NULL, NULL),
(350, 'TF', 'Indian/Kerguelen', 5.00, 5.00, 5.00, NULL, NULL),
(351, 'TG', 'Africa/Lome', 0.00, 0.00, 0.00, NULL, NULL),
(352, 'TH', 'Asia/Bangkok', 7.00, 7.00, 7.00, NULL, NULL),
(353, 'TJ', 'Asia/Dushanbe', 5.00, 5.00, 5.00, NULL, NULL),
(354, 'TK', 'Pacific/Fakaofo', 13.00, 13.00, 13.00, NULL, NULL),
(355, 'TL', 'Asia/Dili', 9.00, 9.00, 9.00, NULL, NULL),
(356, 'TM', 'Asia/Ashgabat', 5.00, 5.00, 5.00, NULL, NULL),
(357, 'TN', 'Africa/Tunis', 1.00, 1.00, 1.00, NULL, NULL),
(358, 'TO', 'Pacific/Tongatapu', 13.00, 13.00, 13.00, NULL, NULL),
(359, 'TR', 'Europe/Istanbul', 2.00, 3.00, 2.00, NULL, NULL),
(360, 'TT', 'America/Port_of_Spain', -4.00, -4.00, -4.00, NULL, NULL),
(361, 'TV', 'Pacific/Funafuti', 12.00, 12.00, 12.00, NULL, NULL),
(362, 'TW', 'Asia/Taipei', 8.00, 8.00, 8.00, NULL, NULL),
(363, 'TZ', 'Africa/Dar_es_Salaam', 3.00, 3.00, 3.00, NULL, NULL),
(364, 'UA', 'Europe/Kiev', 2.00, 3.00, 2.00, NULL, NULL),
(365, 'UA', 'Europe/Simferopol', 2.00, 4.00, 4.00, NULL, NULL),
(366, 'UA', 'Europe/Uzhgorod', 2.00, 3.00, 2.00, NULL, NULL),
(367, 'UA', 'Europe/Zaporozhye', 2.00, 3.00, 2.00, NULL, NULL),
(368, 'UG', 'Africa/Kampala', 3.00, 3.00, 3.00, NULL, NULL),
(369, 'UM', 'Pacific/Johnston', -10.00, -10.00, -10.00, NULL, NULL),
(370, 'UM', 'Pacific/Midway', -11.00, -11.00, -11.00, NULL, NULL),
(371, 'UM', 'Pacific/Wake', 12.00, 12.00, 12.00, NULL, NULL),
(372, 'US', 'America/Adak', -10.00, -9.00, -10.00, NULL, NULL),
(373, 'US', 'America/Anchorage', -9.00, -8.00, -9.00, NULL, NULL),
(374, 'US', 'America/Boise', -7.00, -6.00, -7.00, NULL, NULL),
(375, 'US', 'America/Chicago', -6.00, -5.00, -6.00, NULL, NULL),
(376, 'US', 'America/Denver', -7.00, -6.00, -7.00, NULL, NULL),
(377, 'US', 'America/Detroit', -5.00, -4.00, -5.00, NULL, NULL),
(378, 'US', 'America/Indiana/Indianapolis', -5.00, -4.00, -5.00, NULL, NULL),
(379, 'US', 'America/Indiana/Knox', -6.00, -5.00, -6.00, NULL, NULL),
(380, 'US', 'America/Indiana/Marengo', -5.00, -4.00, -5.00, NULL, NULL),
(381, 'US', 'America/Indiana/Petersburg', -5.00, -4.00, -5.00, NULL, NULL),
(382, 'US', 'America/Indiana/Tell_City', -6.00, -5.00, -6.00, NULL, NULL),
(383, 'US', 'America/Indiana/Vevay', -5.00, -4.00, -5.00, NULL, NULL),
(384, 'US', 'America/Indiana/Vincennes', -5.00, -4.00, -5.00, NULL, NULL),
(385, 'US', 'America/Indiana/Winamac', -5.00, -4.00, -5.00, NULL, NULL),
(386, 'US', 'America/Juneau', -9.00, -8.00, -9.00, NULL, NULL),
(387, 'US', 'America/Kentucky/Louisville', -5.00, -4.00, -5.00, NULL, NULL),
(388, 'US', 'America/Kentucky/Monticello', -5.00, -4.00, -5.00, NULL, NULL),
(389, 'US', 'America/Los_Angeles', -8.00, -7.00, -8.00, NULL, NULL),
(390, 'US', 'America/Menominee', -6.00, -5.00, -6.00, NULL, NULL),
(391, 'US', 'America/Metlakatla', -8.00, -8.00, -8.00, NULL, NULL),
(392, 'US', 'America/New_York', -5.00, -4.00, -5.00, NULL, NULL),
(393, 'US', 'America/Nome', -9.00, -8.00, -9.00, NULL, NULL),
(394, 'US', 'America/North_Dakota/Beulah', -6.00, -5.00, -6.00, NULL, NULL),
(395, 'US', 'America/North_Dakota/Center', -6.00, -5.00, -6.00, NULL, NULL),
(396, 'US', 'America/North_Dakota/New_Salem', -6.00, -5.00, -6.00, NULL, NULL),
(397, 'US', 'America/Phoenix', -7.00, -7.00, -7.00, NULL, NULL),
(398, 'US', 'America/Shiprock', -7.00, -6.00, -7.00, NULL, NULL),
(399, 'US', 'America/Sitka', -9.00, -8.00, -9.00, NULL, NULL),
(400, 'US', 'America/Yakutat', -9.00, -8.00, -9.00, NULL, NULL),
(401, 'US', 'Pacific/Honolulu', -10.00, -10.00, -10.00, NULL, NULL),
(402, 'UY', 'America/Montevideo', -2.00, -3.00, -3.00, NULL, NULL),
(403, 'UZ', 'Asia/Samarkand', 5.00, 5.00, 5.00, NULL, NULL),
(404, 'UZ', 'Asia/Tashkent', 5.00, 5.00, 5.00, NULL, NULL),
(405, 'VA', 'Europe/Vatican', 1.00, 2.00, 1.00, NULL, NULL),
(406, 'VC', 'America/St_Vincent', -4.00, -4.00, -4.00, NULL, NULL),
(407, 'VE', 'America/Caracas', -4.50, -4.50, -4.50, NULL, NULL),
(408, 'VG', 'America/Tortola', -4.00, -4.00, -4.00, NULL, NULL),
(409, 'VI', 'America/St_Thomas', -4.00, -4.00, -4.00, NULL, NULL),
(410, 'VN', 'Asia/Ho_Chi_Minh', 7.00, 7.00, 7.00, NULL, NULL),
(411, 'VU', 'Pacific/Efate', 11.00, 11.00, 11.00, NULL, NULL),
(412, 'WF', 'Pacific/Wallis', 12.00, 12.00, 12.00, NULL, NULL),
(413, 'WS', 'Pacific/Apia', 14.00, 13.00, 13.00, NULL, NULL),
(414, 'YE', 'Asia/Aden', 3.00, 3.00, 3.00, NULL, NULL),
(415, 'YT', 'Indian/Mayotte', 3.00, 3.00, 3.00, NULL, NULL),
(416, 'ZA', 'Africa/Johannesburg', 2.00, 2.00, 2.00, NULL, NULL),
(417, 'ZM', 'Africa/Lusaka', 2.00, 2.00, 2.00, NULL, NULL),
(418, 'ZW', 'Africa/Harare', 2.00, 2.00, 2.00, NULL, NULL);
");
    }
}
