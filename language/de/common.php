<?php
/**
*
* @package phpBB Extension - tas2580 Whatsapp Notifier
* @copyright (c) 2015 tas2580 (https://tas2580.net)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
    exit;
}

if (empty($lang) || !is_array($lang))
{
    $lang = array();
}

$lang = array_merge($lang, array(
	'NOTIFICATION_METHOD_WHATSAPP'	=> 'Whatsapp',
	'ACP_SETTINGS'					=> 'Einstellungen',
	'ACP_SENDER'						=> 'Absender Nummer',
	'ACP_SENDER_EXPLAIN'				=> 'Gib die Telefon Nummer an von der Whatsapp Benachichtigungen versendet werden.<br />Die Nummer muss in Stiel <b>{Ländervohrwahl}{Vorhwahl ohne 0}{Nummer}</b> angegeben werden.<br />Bsp.: 4917212345678',
	'ACP_PASSWORD'					=> 'Passwort',
	'ACP_PASSWORD_EXPLAIN'			=> 'Gib dein Whatsapp Passwort an. Wie du an das Passwort kommst wird <a href="https://tas2580.net/page/whatsapp_passwort.html">hier</a> beschrieben.',
	'ACP_STATUS'						=> 'Status',
	'ACP_STATUS_EXPLAIN'				=> 'Gib eine Status Meldung für den Whatsapp Kontakt an.',
	'ACP_IMAGE'						=> 'Avatar',
	'ACP_IMAGE_EXPLAIN'				=> 'Lade ein Bild hoch das der Whatsapp Kontakt als Avatar verwendet.',
	'ACP_SUBMIT'						=> 'Einstellungen speichern',
	'ACP_SAVED'						=> 'Die Einstellungen wurden gespeichert.',
	'WHATSAPP_NR'					=> 'Whatsapp Nummer',
	'WHATSAPP_NR_EXPLAIN'				=> 'Gib die Telefon Nummer (incl. Vorwahl ohne 0) an auf der du Whatsapp Benachichtigungen empfangen möchtest.',

	// Country Codes

	'CC_AD'		=> 'Andorra',
	'CC_AE'		=> 'Vereinigte Arabische Emirate',
	'CC_AF'		=> 'Afghanistan',
	'CC_AG'		=> 'Antigua',
	'CC_AI'		=> 'Anguilla',
	'CC_AL'		=> 'Albanien',
	'CC_AM'		=> 'Armenien',
	'CC_AO'		=> 'Angola',
	'CC_AR'		=> 'Argentinien',
	'CC_AS'		=> 'Amerikanisch-Samoa',
	'CC_AT'		=> 'Österreich',
	'CC_AU'		=> 'Australien',
	'CC_AW'		=> 'Aruba',
	'CC_AZ'		=> 'Aserbaidschan',

	'CC_BA'		=> 'Bosnien und Herzegowina',
	'CC_BB'		=> 'Barbados',
	'CC_BD'		=> 'Bangladesch',
	'CC_BE'		=> 'Belgien',
	'CC_BF'		=> 'Burkina Faso',
	'CC_BG'		=> 'Bulgarien',
	'CC_BH'		=> 'Bahrain',
	'CC_BI'		=> 'Burundi',
	'CC_BJ'		=> 'Benin',
	'CC_BL'		=> 'Saint-Barthélemy',
	'CC_BM'		=> 'Bermuda',
	'CC_BN'		=> 'Brunei',
	'CC_BO'		=> 'Bolivien',
	'CC_BQ'		=> 'Bonaire, Sint Eustatius und Saba',
	'CC_BR'		=> 'Brasilien',
	'CC_BS'		=> 'Bahamas',
	'CC_BT'		=> 'Bhutan',
	'CC_BW'		=> 'Botswana',
	'CC_BY'		=> 'Weißrussland',
	'CC_BZ'		=> 'Belize',

	'CC_CA'		=> 'Kanada',
	'CC_CD'		=> 'Demokratische Republik Kongo',
	'CC_CF'		=> 'Zentralafrikanische Republik',
	'CC_CG'		=> 'Republik Kongo',
	'CC_CH'		=> 'Schweiz',
	'CC_CI'		=> 'Elfenbeinküste',
	'CC_CK'		=> 'Cookinseln',
	'CC_CL'		=> 'Chile',
	'CC_CM'		=> 'Kamerun',
	'CC_CN'		=> 'China',
	'CC_CO'		=> 'Kolumbien',
	'CC_CR'		=> 'Costa Rica',
	'CC_CU'		=> 'Kuba',
	'CC_CV'		=> 'Kap Verde',
	'CC_CW'		=> 'Curaçao',
	'CC_CY'		=> 'Zypern',
	'CC_CZ'		=> 'Tschechische Republik',

	'CC_DE'		=> 'Deutschland',
	'CC_DJ'		=> 'Dschibuti',
	'CC_DK'		=> 'Dänemark',
	'CC_DM'		=> 'Dominica',
	'CC_DO'		=> 'Dominikanische Republik',
	'CC_DZ'		=> 'Algerien',



	'CC_EC'		=> 'Ecuador',
	'CC_EE'		=> 'Estland',
	'CC_EG'		=> 'Ägypten',
	'CC_EH'		=> 'Westsahara',
	'CC_ER'		=> 'Eritrea',
	'CC_ES'		=> 'Spanien',
	'CC_ET'		=> 'Äthiopien',


	'CC_FK'		=> 'Falklandinseln',
	'CC_FI'		=> 'Finnland',
	'CC_FJ'		=> 'Fidschi',
	'CC_FO'		=> 'Färöer',
	'CC_FM'		=> 'Föderierte Staaten von Mikronesien',
	'CC_FR'		=> 'Frankreich',


	'CC_GA'		=> 'Gabun',
	'CC_GB'		=> 'Vereinigtes Königreich',
	'CC_GD'		=> 'Grenada',
	'CC_GE'		=> 'Georgien',
	'CC_GF'		=> 'Französisch-Guayana',
	'CC_GG'		=> 'Guernsey',
	'CC_GH'		=> 'Ghana',
	'CC_GI'		=> 'Gibraltar',
	'CC_GL'		=> 'Grönland',
	'CC_GM'		=> 'Gambia',
	'CC_GN'		=> 'Guinea',
	'CC_GQ'		=> 'Äquatorialguinea',
	'CC_GP'		=> 'Guadeloupe',
	'CC_GR'		=> 'Griechenland',
	'CC_GT'		=> 'Guatemala',
	'CC_GU'		=> 'Guam',
	'CC_GW'		=> 'Guinea-Bissau',
	'CC_GY'		=> 'Guyana',


	'CC_HK'		=> 'Hongkong',
	'CC_HN'		=> 'Honduras',
	'CC_HR'		=> 'Kroatien',
	'CC_HT'		=> 'Haiti',
	'CC_HU'		=> 'Ungarn',


	'CC_ID'		=> 'Indonesien',
	'CC_IE'		=> 'Irland',
	'CC_IL'		=> 'Israel',
	'CC_IM'		=> 'Isle of Man',
	'CC_IN'		=> 'Indien',
	'CC_IO'		=> 'Britisches Territorium im Indischen Ozean',
	'CC_IQ'		=> 'Irak',
	'CC_IR'		=> 'Iran',
	'CC_IS'		=> 'Island',
	'CC_IT'		=> 'Italien',


	'CC_JE'		=> 'Jersey',
	'CC_JM'		=> 'Jamaika',
	'CC_JO'		=> 'Jordanien',
	'CC_JP'		=> 'Japan',


	'CC_KE'		=> 'Kenia',
	'CC_KG'		=> 'Kirgisistan',
	'CC_KH'		=> 'Kambodscha',
	'CC_KI'		=> 'Kiribati',
	'CC_KM'		=> 'Komoren',
	'CC_KN'		=> 'St. Kitts und Nevis',
	'CC_KP'		=> 'Nordkorea',
	'CC_KR'		=> 'Südkorea',
	'CC_KW'		=> 'Kuwait',
	'CC_KY'		=> 'Kaiman-Inseln',
	'CC_KZ'		=> 'Kasachstan',


	'CC_LA'		=> 'Laos',
	'CC_LB'		=> 'Libanon',
	'CC_LC'		=> 'St. Lucia',
	'CC_LI'		=> 'Liechtenstein',
	'CC_LK'		=> 'Sri Lanka',
	'CC_LR'		=> 'Liberia',
	'CC_LS'		=> 'Lesotho',
	'CC_LT'		=> 'Litauen',
	'CC_LU'		=> 'Luxemburg',
	'CC_LV'		=> 'Lettland',
	'CC_LY'		=> 'Libyen',


	'CC_MA'		=> 'Marokko',
	'CC_MC'		=> 'Monaco',
	'CC_MD'		=> 'Moldawien',
	'CC_ME'		=> 'Montenegro',
	'CC_MF'		=> 'St. Martin',
	'CC_MG'		=> 'Madagaskar',
	'CC_MH'		=> 'Marshallinseln',
	'CC_MK'		=> 'Mazedonien',
	'CC_ML'		=> 'Mali',
	'CC_MM'		=> 'Myanmar',
	'CC_MN'		=> 'Mongolei',
	'CC_MO'		=> 'Macao',
	'CC_MP'		=> 'Nördliche Marianen',
	'CC_MQ'		=> 'Martinique',
	'CC_MR'		=> 'Mauretanien',
	'CC_MS'		=> 'Montserrat',
	'CC_MT'		=> 'Malta',
	'CC_MU'		=> 'Mauritius',
	'CC_MV'		=> 'Malediven',
	'CC_MW'		=> 'Malawi',
	'CC_MX'		=> 'Mexiko',
	'CC_MY'		=> 'Malaysia',
	'CC_MZ'		=> 'Mosambik',


	'CC_NA'		=> 'Namibia',
	'CC_NC'		=> 'Neukaledonien',
	'CC_NE'		=> 'Niger',
	'CC_NF'		=> 'Norfolkinsel',
	'CC_NG'		=> 'Nigeria',
	'CC_NI'		=> 'Nicaragua',
	'CC_NL'		=> 'Niederlande',
	'CC_NO'		=> 'Norwegen',
	'CC_NP'		=> 'Nepal',
	'CC_NR'		=> 'Nauru',
	'CC_NU'		=> 'Niue',
	'CC_NZ'		=> 'Neuseeland',

	'CC_OM'		=> 'Oman',



	'CC_PA'		=> 'Panama',
	'CC_PE'		=> 'Peru',
	'CC_PF'		=> 'Französisch-Polynesien',
	'CC_PG'		=> 'Papua-Neuguinea',
	'CC_PH'		=> 'Philippinen',
	'CC_PK'		=> 'Pakistan',
	'CC_PL'		=> 'Polen',
	'CC_PM'		=> 'Saint-Pierre und Miquelon',
	'CC_PR'		=> 'Puerto Rico',
	'CC_PS'		=> 'Palästina',
	'CC_PT'		=> 'Portugal',
	'CC_PW'		=> 'Belau',
	'CC_PY'		=> 'Paraguay',


	'CC_QA'		=> 'Katar',

	'CC_RE'		=> 'Réunion',
	'CC_RO'		=> 'Rumänien',
	'CC_RS'		=> 'Serbien',
	'CC_RU'		=> 'Russland',
	'CC_RW'		=> 'Ruanda',


	'CC_SA'		=> 'Saudi-Arabien',
	'CC_SB'		=> 'Salomonen',
	'CC_SC'		=> 'Seychellen',
	'CC_SD'		=> 'Sudan',
	'CC_SE'		=> 'Schweden',
	'CC_SG'		=> 'Singapur',
	'CC_SH'		=> 'St. Helena',
	'CC_SI'		=> 'Slowenien',
	'CC_SK'		=> 'Slowakei',
	'CC_SL'		=> 'Sierra Leone',
	'CC_SM'		=> 'San Marino',
	'CC_SN'		=> 'Senegal',
	'CC_SO'		=> 'Somalia',
	'CC_SR'		=> 'Surinam',
	'CC_SS'		=> 'Südsudan',
	'CC_ST'		=> 'São Tomé und Príncipe',
	'CC_SV'		=> 'El Salvador',
	'CC_SX'		=> 'Sint Maarten',
	'CC_SY'		=> 'Syrien',
	'CC_SZ'		=> 'Swasiland',


	'CC_TC'		=> 'Turks- und Caicosinseln',
	'CC_TD'		=> 'Tschad',
	'CC_TG'		=> 'Togo',
	'CC_TH'		=> 'Thailand',
	'CC_TJ'		=> 'Tadschikistan',
	'CC_TK'		=> 'Tokelau',
	'CC_TL'		=> 'Osttimor',
	'CC_TM'		=> 'Turkmenistan',
	'CC_TN'		=> 'Tunesien',
	'CC_TO'		=> 'Tonga',
	'CC_TR'		=> 'Türkei',
	'CC_TT'		=> 'Trinidad und Tobago',
	'CC_TV'		=> 'Tuvalu',
	'CC_TW'		=> 'Taiwan',
	'CC_TZ'		=> 'Tansania',


	'CC_UA'		=> 'Ukraine',
	'CC_UG'		=> 'Uganda',
	'CC_US'		=> 'Vereinigte Staaten von Amerika',
	'CC_UY'		=> 'Uruguay',
	'CC_UZ'		=> 'Usbekistan',


	'CC_VA'		=> 'Vatikanstadt',
	'CC_VC'		=> 'St. Vincent und die Grenadinen',
	'CC_VE'		=> 'Venezuela',
	'CC_VG'		=> 'Britische Jungferninseln',
	'CC_VI'		=> 'Amerikanische Jungferninseln',
	'CC_VN'		=> 'Vietnam',
	'CC_VU'		=> 'Vanuatu',



	'CC_WF'		=> 'Wallis und Futuna',
	'CC_WS'		=> 'Samoa',
	'CC_XK'		=> 'Kosovo',
	'CC_YE'		=> 'Jemen',
	'CC_YT'		=> 'Mayotte',
	'CC_ZA'		=> 'Südafrika',
	'CC_ZM'		=> 'Sambia',
	'CC_ZW'		=> 'Simbabwe',

));