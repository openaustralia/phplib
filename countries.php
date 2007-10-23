<?
/*
 * countries.php:
 * Data on countries and (in some cases) named divisions within them.
 * 
 * Copyright (c) 2005 UK Citizens Online Democracy. All rights reserved.
 * Email: francis@mysociety.org. WWW: http://www.mysociety.org
 *
 * $Id: countries.php,v 1.18 2007/10/23 15:14:40 matthew Exp $
 * 
 */

/* $countries_name_to_code
 * ISO 3166-1 alpha-2 country names and two letter codes, taken from
 * http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2. */
$countries_code_to_name = array(
    "AF" => _("Afghanistan"),
    "AX" => _("Åland Islands"),
    "AL" => _("Albania"),
    "DZ" => _("Algeria"),
    "AS" => _("American Samoa"),
    "AD" => _("Andorra"),
    "AO" => _("Angola"),
    "AI" => _("Anguilla"),
    "AQ" => _("Antarctica"),
    "AG" => _("Antigua and Barbuda"),
    "AR" => _("Argentina"),
    "AM" => _("Armenia"),
    "AW" => _("Aruba"),
    "AU" => _("Australia"),
    "AT" => _("Austria"),
    "AZ" => _("Azerbaijan"),
    "BS" => _("Bahamas"),
    "BH" => _("Bahrain"),
    "BD" => _("Bangladesh"),
    "BB" => _("Barbados"),
    "BY" => _("Belarus"),
    "BE" => _("Belgium"),
    "BZ" => _("Belize"),
    "BJ" => _("Benin"),
    "BM" => _("Bermuda"),
    "BT" => _("Bhutan"),
    "BO" => _("Bolivia"),
    "BA" => _("Bosnia and Herzegovina"),
    "BW" => _("Botswana"),
    "BV" => _("Bouvet Island"),
    "BR" => _("Brazil"),
    "IO" => _("British Indian Ocean Territory"),
    "VG" => _("British Virgin Islands"),
    "BN" => _("Brunei"),
    "BG" => _("Bulgaria"),
    "BF" => _("Burkina Faso"),
    "BI" => _("Burundi"),
    "KH" => _("Cambodia"),
    "CM" => _("Cameroon"),
    "CA" => _("Canada"),
    "CV" => _("Cape Verde"),
    "KY" => _("Cayman Islands"),
    "CF" => _("Central African Republic"),
    "TD" => _("Chad"),
    "CL" => _("Chile"),
    "CN" => _("China"),
    "CX" => _("Christmas Island"),
    "CC" => _("Cocos (Keeling) Islands"),
    "CO" => _("Colombia"),
    "KM" => _("Comoros"),
    "CG" => _("Congo"),
    "CK" => _("Cook Islands"),
    "CR" => _("Costa Rica"),
    "CI" => _("Côte d'Ivoire"),
    "HR" => _("Croatia"),
    "CU" => _("Cuba"),
    "CY" => _("Cyprus"),
    "CZ" => _("Czech Republic"),
    "CD" => _("Democratic Republic of the Congo"),
    "DK" => _("Denmark"),
    "DJ" => _("Djibouti"),
    "DM" => _("Dominica"),
    "DO" => _("Dominican Republic"),
    "TL" => _("East Timor"),
    "EC" => _("Ecuador"),
    "EG" => _("Egypt"),
    "SV" => _("El Salvador"),
    "GQ" => _("Equatorial Guinea"),
    "ER" => _("Eritrea"),
    "EE" => _("Estonia"),
    "ET" => _("Ethiopia"),
    "FK" => _("Falkland Islands"),
    "FO" => _("Faroe Islands"),
    "FM" => _("Federated States of Micronesia"),
    "FJ" => _("Fiji"),
    "FI" => _("Finland"),
    "FR" => _("France"),
    "GF" => _("French Guiana"),
    "PF" => _("French Polynesia"),
    "TF" => _("French Southern Territories"),
    "GA" => _("Gabon"),
    "GM" => _("Gambia"),
    "GE" => _("Georgia"),
    "DE" => _("Germany"),
    "GH" => _("Ghana"),
    "GI" => _("Gibraltar"),
    "GR" => _("Greece"),
    "GL" => _("Greenland"),
    "GD" => _("Grenada"),
    'GG' => _('Guernsey'),
    "GP" => _("Guadeloupe"),
    "GU" => _("Guam"),
    "GT" => _("Guatemala"),
    "GW" => _("Guinea-Bissau"),
    "GN" => _("Guinea"),
    "GY" => _("Guyana"),
    "HT" => _("Haiti"),
    "HM" => _("Heard Island and McDonald Islands"),
    "HN" => _("Honduras"),
    "HK" => _("Hong Kong"),
    "HU" => _("Hungary"),
    "IS" => _("Iceland"),
    "IN" => _("India"),
    "ID" => _("Indonesia"),
    "IR" => _("Iran"),
    "IQ" => _("Iraq"),
    "IE" => _("Ireland"),
    "IL" => _("Israel"),
    'IM' => _('Isle of Man'),
    "IT" => _("Italy"),
    'JE' => _('Jersey'),
    "JM" => _("Jamaica"),
    "JP" => _("Japan"),
    "JO" => _("Jordan"),
    "KZ" => _("Kazakhstan"),
    "KE" => _("Kenya"),
    "KI" => _("Kiribati"),
    "KW" => _("Kuwait"),
    "KG" => _("Kyrgyzstan"),
    "LA" => _("Laos"),
    "LV" => _("Latvia"),
    "LB" => _("Lebanon"),
    "LS" => _("Lesotho"),
    "LR" => _("Liberia"),
    "LY" => _("Libya"),
    "LI" => _("Liechtenstein"),
    "LT" => _("Lithuania"),
    "LU" => _("Luxembourg"),
    "MO" => _("Macao"),
    "MG" => _("Madagascar"),
    "MW" => _("Malawi"),
    "MY" => _("Malaysia"),
    "MV" => _("Maldives"),
    "ML" => _("Mali"),
    "MT" => _("Malta"),
    "MH" => _("Marshall Islands"),
    "MQ" => _("Martinique"),
    "MR" => _("Mauritania"),
    "MU" => _("Mauritius"),
    "YT" => _("Mayotte"),
    "MX" => _("Mexico"),
    "MD" => _("Moldova"),
    "MC" => _("Monaco"),
    "MN" => _("Mongolia"),
    "MS" => _("Montserrat"),
    "MA" => _("Morocco"),
    "MZ" => _("Mozambique"),
    "MM" => _("Myanmar"),
    "NA" => _("Namibia"),
    "NR" => _("Nauru"),
    "NP" => _("Nepal"),
    "NL" => _("Netherlands"),
    "AN" => _("Netherlands Antilles"),
    "NC" => _("New Caledonia"),
    "NZ" => _("New Zealand"),
    "NI" => _("Nicaragua"),
    "NG" => _("Nigeria"),
    "NE" => _("Niger"),
    "NU" => _("Niue"),
    "NF" => _("Norfolk Island"),
    "KP" => _("North Korea"),
    "MP" => _("Northern Mariana Islands"),
    "NO" => _("Norway"),
    "OM" => _("Oman"),
    "PK" => _("Pakistan"),
    "PW" => _("Palau"),
    "PS" => _("Palestinian Territories"),
    "PA" => _("Panama"),
    "PG" => _("Papua New Guinea"),
    "PY" => _("Paraguay"),
    "PE" => _("Peru"),
    "PH" => _("Philippines"),
    "PN" => _("Pitcairn Islands"),
    "PL" => _("Poland"),
    "PT" => _("Portugal"),
    "PR" => _("Puerto Rico"),
    "QA" => _("Qatar"),
    "RE" => _("Réunion"),
    "MK" => _("Republic of Macedonia"),
    "RO" => _("Romania"),
    "RU" => _("Russia"),
    "RW" => _("Rwanda"),
    "SH" => _("Saint Helena"),
    "KN" => _("Saint Kitts and Nevis"),
    "LC" => _("Saint Lucia"),
    "PM" => _("Saint-Pierre and Miquelon"),
    "VC" => _("Saint Vincent and the Grenadines"),
    "WS" => _("Samoa"),
    "SM" => _("San Marino"),
    "ST" => _("São Tomé and Príncipe"),
    "SA" => _("Saudi Arabia"),
    "SN" => _("Senegal"),
    "CS" => _("Serbia and Montenegro"),
    "SC" => _("Seychelles"),
    "SL" => _("Sierra Leone"),
    "SG" => _("Singapore"),
    "SK" => _("Slovakia"),
    "SI" => _("Slovenia"),
    "SB" => _("Solomon Islands"),
    "SO" => _("Somalia"),
    "ZA" => _("South Africa"),
    "GS" => _("South Georgia and the South Sandwich Islands"),
    "KR" => _("South Korea"),
    "ES" => _("Spain"),
    "LK" => _("Sri Lanka"),
    "SD" => _("Sudan"),
    "SR" => _("Suriname"),
    "SJ" => _("Svalbard"),
    "SZ" => _("Swaziland"),
    "SE" => _("Sweden"),
    "CH" => _("Switzerland"),
    "SY" => _("Syria"),
    "TW" => _("Taiwan"),
    "TJ" => _("Tajikistan"),
    "TZ" => _("Tanzania"),
    "TH" => _("Thailand"),
    "TG" => _("Togo"),
    "TK" => _("Tokelau"),
    "TO" => _("Tonga"),
    "TT" => _("Trinidad and Tobago"),
    "TN" => _("Tunisia"),
    "TR" => _("Turkey"),
    "TM" => _("Turkmenistan"),
    "TC" => _("Turks and Caicos Islands"),
    "TV" => _("Tuvalu"),
    "UG" => _("Uganda"),
    "UA" => _("Ukraine"),
    "AE" => _("United Arab Emirates"),
    "GB" => _("United Kingdom"),
    "US" => _("United States"),
    "UM" => _("United States Minor Outlying Islands"),
    "UY" => _("Uruguay"),
    "VI" => _("U.S. Virgin Islands"),
    "UZ" => _("Uzbekistan"),
    "VU" => _("Vanuatu"),
    "VA" => _("Vatican City"),
    "VE" => _("Venezuela"),
    "VN" => _("Vietnam"),
    "WF" => _("Wallis and Futuna"),
    "EH" => _("Western Sahara"),
    "YE" => _("Yemen"),
    "ZM" => _("Zambia"),
    "ZW" => _("Zimbabwe"),
);

/* $countries_code_to_name
 * Map from ISO 3166 code to country name. */
$countries_name_to_code = array();
foreach ($countries_code_to_name as $countries_code => $countries_name) {
    if (array_key_exists($countries_name, $countries_name_to_code)) {
        die("Name $countries_name exists twice in countries_code_to_name");
    }
    $countries_name_to_code[$countries_name] = $countries_code;
}

/* $countries_statecode_to_name
 * Top-level administrative areas within countries and identifying codes for
 * them. */
$countries_statecode_to_name = array(
    'US' => array(
        'AK' => 'Alaska',
        'AL' => 'Alabama',
        'AR' => 'Arkansas',
        'AZ' => 'Arizona',
        'CA' => 'California',
        'CO' => 'Colorado',
        'CT' => 'Connecticut',
        'DE' => 'Delaware',
        'FL' => 'Florida',
        'GA' => 'Georgia',
        'HI' => 'Hawaii',
        'IA' => 'Iowa',
        'ID' => 'Idaho',
        'IL' => 'Illinois',
        'IN' => 'Indiana',
        'KS' => 'Kansas',
        'KY' => 'Kentucky',
        'LA' => 'Louisiana',
        'MA' => 'Massachusetts',
        'MD' => 'Maryland',
        'ME' => 'Maine',
        'MI' => 'Michigan',
        'MN' => 'Minnesota',
        'MO' => 'Missouri',
        'MS' => 'Mississippi',
        'MT' => 'Montana',
        'NC' => 'North Carolina',
        'ND' => 'North Dakota',
        'NE' => 'Nebraska',
        'NH' => 'New Hampshire',
        'NJ' => 'New Jersey',
        'NM' => 'New Mexico',
        'NV' => 'Nevada',
        'NY' => 'New York',
        'OH' => 'Ohio',
        'OK' => 'Oklahoma',
        'OR' => 'Oregon',
        'PA' => 'Pennsylvania',
        'RI' => 'Rhode Island',
        'SC' => 'South Carolina',
        'SD' => 'South Dakota',
        'TN' => 'Tennessee',
        'TX' => 'Texas',
        'UT' => 'Utah',
        'VT' => 'Vermont',
        'VA' => 'Virginia',
        'WA' => 'Washington',
        'WI' => 'Wisconsin',
        'WV' => 'West Virginia',
        'WY' => 'Wyoming'
    )
);
$countries_name_to_statecode = array();
foreach ($countries_statecode_to_name as $country => $states) {
    $countries_name_to_statecode[$country] = array();
    foreach ($states as $code => $state) {
        $countries_name_to_statecode[$country][strtolower($state)] = $code;
    }
}

$countries_code_to_name_with_from_fr = array(
    'AF' => 'de l\'',
    'AX' => 'des',
    'AL' => 'de l\'',
    'DZ' => 'de l\'',
    'AS' => 'de la',
    'AD' => 'de l\'',
    'AO' => 'de l\'',
    'AI' => 'd\'',
    'AQ' => 'de l\'',
    'AG' => 'd\'',
    'AR' => 'de l\'',
    'AM' => 'de l\'',
    'AW' => 'd\'',
    'AU' => 'de l\'',
    'AT' => 'de l\'',
    'AZ' => 'de l\'',
    'BS' => 'des',
    'BH' => 'de',
    'BD' => 'du',
    'BB' => 'de la',
    'BY' => 'de la',
    'BE' => 'de la',
    'BZ' => 'du',
    'BJ' => 'du',
    'BM' => 'des',
    'BT' => 'du',
    'BO' => 'de la',
    'BA' => 'de la',
    'BW' => 'du',
    'BV' => 'de l\'',
    'BR' => 'du',
    'IO' => 'du',
    'VG' => 'des',
    'BN' => 'du',
    'BG' => 'de la',
    'BF' => 'du',
    'BI' => 'du',
    'KH' => 'du',
    'CM' => 'du',
    'CA' => 'du',
    'CV' => 'du',
    'KY' => 'des',
    'CF' => 'de la',
    'TD' => 'du',
    'CL' => 'du',
    'CN' => 'de la',
    'CX' => 'de l\'',
    'CC' => 'des',
    'CO' => 'de la',
    'KM' => 'des',
    'CG' => 'du',
    'CK' => 'des',
    'CR' => 'du',
    'CI' => 'de la',
    'HR' => 'de la',
    'CU' => 'de',
    'CY' => 'de',
    'CZ' => 'de la',
    'CD' => 'de la',
    'DK' => 'du',
    'DJ' => 'de',
    'DM' => 'de la',
    'DO' => 'de la',
    'TL' => 'du',
    'EC' => 'de l\'',
    'EG' => 'de l\'',
    'SV' => 'du',
    'GQ' => 'de la',
    'ER' => 'de l\'',
    'EE' => 'de l\'',
    'ET' => 'de l\'',
    'FK' => 'des',
    'FO' => 'des',
    'FM' => 'des',
    'FJ' => 'des',
    'FI' => 'de la',
    'FR' => 'de la',
    'GF' => 'de la',
    'PF' => 'de la',
    'TF' => 'des',
    'GA' => 'du',
    'GM' => 'de la',
    'GE' => 'de la',
    'DE' => 'de l\'',
    'GH' => 'du',
    'GI' => 'de',
    'GR' => 'de la',
    'GL' => 'du',
    'GD' => 'de',
    'GP' => 'de la',
    'GU' => 'de',
    'GT' => 'du',
    'GW' => 'de la',
    'GN' => 'de la',
    'GY' => 'de la',
    'HT' => 'd\'',
    'HM' => 'des',
    'HN' => 'du',
    'HK' => 'de',
    'HU' => 'd\'',
    'IS' => 'de l\'',
    'IN' => 'de l\'',
    'ID' => 'de l\'',
    'IR' => 'de l\'',
    'IQ' => 'de l\'',
    'IE' => 'de l\'',
    'IL' => 'd\'',
    'IT' => 'de l\'',
    'JM' => 'de la',
    'JP' => 'du',
    'JO' => 'de la',
    'KZ' => 'du',
    'KE' => 'du',
    'KI' => 'des',
    'KW' => 'du',
    'KG' => 'du',
    'LA' => 'du',
    'LV' => 'de la',
    'LB' => 'du',
    'LS' => 'du',
    'LR' => 'du',
    'LY' => 'de la',
    'LI' => 'du',
    'LT' => 'de la',
    'LU' => 'du',
    'MO' => 'de',
    'MG' => 'de',
    'MW' => 'du',
    'MY' => 'de la',
    'MV' => 'des',
    'ML' => 'du',
    'MT' => 'de',
    'MH' => 'des',
    'MQ' => 'de la',
    'MR' => 'de la',
    'MU' => 'de',
    'YT' => 'de',
    'MX' => 'du',
    'MD' => 'de la',
    'MC' => 'de',
    'MN' => 'de la',
    'MS' => 'de',
    'MA' => 'du',
    'MZ' => 'du',
    'MM' => 'du',
    'NA' => 'de la',
    'NR' => 'de',
    'NP' => 'du',
    'NL' => 'des',
    'AN' => 'des',
    'NC' => 'de la',
    'NZ' => 'de la',
    'NI' => 'du',
    'NG' => 'du',
    'NE' => 'du',
    'NU' => 'de',
    'NF' => 'de l\'',
    'KP' => 'de la',
    'MP' => 'des',
    'NO' => 'de la',
    'OM' => 'd\'',
    'PK' => 'du',
    'PW' => 'des',
    'PS' => 'des',
    'PA' => 'du',
    'PG' => 'de la',
    'PY' => 'du',
    'PE' => 'du',
    'PH' => 'des',
    'PN' => 'des',
    'PL' => 'de la',
    'PT' => 'du',
    'PR' => 'de',
    'QA' => 'du',
    'RE' => 'de la',
    'MK' => 'de la',
    'RO' => 'de la',
    'RU' => 'de la',
    'RW' => 'du',
    'SH' => 'de',
    'KN' => 'de',
    'LC' => 'de',
    'PM' => 'de',
    'VC' => 'de',
    'WS' => 'des',
    'SM' => 'de',
    'ST' => 'de',
    'SA' => 'de l\'',
    'SN' => 'du',
    'CS' => 'de la',
    'SC' => 'des',
    'SL' => 'de la',
    'SG' => 'de',
    'SK' => 'de la',
    'SI' => 'de la',
    'SB' => 'des',
    'SO' => 'de la',
    'ZA' => 'de l\'',
    'GS' => 'de la',
    'KR' => 'de la',
    'ES' => 'de l\'',
    'LK' => 'du',
    'SD' => 'du',
    'SR' => 'du',
    'SJ' => 'du',
    'SZ' => 'du',
    'SE' => 'de la',
    'CH' => 'de la',
    'SY' => 'de la',
    'TW' => 'de',
    'TJ' => 'du',
    'TZ' => 'de la',
    'TH' => 'de la',
    'TG' => 'du',
    'TK' => 'des',
    'TO' => 'des',
    'TT' => 'de',
    'TN' => 'de la',
    'TR' => 'de la',
    'TM' => 'du',
    'TC' => 'des',
    'TV' => 'des',
    'UG' => 'de l\'',
    'UA' => 'de l\'',
    'AE' => 'des',
    'GB' => 'du',
    'US' => 'des',
    'UM' => 'des',
    'UY' => 'de l\'',
    'VI' => 'des',
    'UZ' => 'de l\'',
    'VU' => 'de',
    'VA' => 'du',
    'VE' => 'du',
    'VN' => 'du',
    'WF' => 'de',
    'EH' => 'du',
    'YE' => 'du',
    'ZM' => 'de la',
    'ZW' => 'du',
    'GG' => 'de',
    'IM' => 'de l\'',
    'JE' => 'de',
);
$countries_code_to_name_with_to_fr = array(
    'AF' => 'en',
    'AX' => 'aux',
    'AL' => 'en',
    'DZ' => 'en',
    'AS' => 'en',
    'AD' => 'en',
    'AO' => 'en',
    'AI' => 'en',
    'AQ' => 'en',
    'AG' => 'à',
    'AR' => 'en',
    'AM' => 'en',
    'AW' => 'à',
    'AU' => 'en',
    'AT' => 'en',
    'AZ' => 'en',
    'BS' => 'aux',
    'BH' => 'à',
    'BD' => 'au',
    'BB' => 'à la',
    'BY' => 'en',
    'BE' => 'en',
    'BZ' => 'au',
    'BJ' => 'au',
    'BM' => 'aux',
    'BT' => 'au',
    'BO' => 'en',
    'BA' => 'en',
    'BW' => 'au',
    'BV' => 'à l\'',
    'BR' => 'au',
    'IO' => 'au',
    'VG' => 'aux',
    'BN' => 'au',
    'BG' => 'en',
    'BF' => 'au',
    'BI' => 'au',
    'KH' => 'au',
    'CM' => 'au',
    'CA' => 'au',
    'CV' => 'au',
    'KY' => 'aux',
    'CF' => 'en',
    'TD' => 'au',
    'CL' => 'au',
    'CN' => 'en',
    'CX' => 'à l\'',
    'CC' => 'aux',
    'CO' => 'en',
    'KM' => 'aux',
    'CG' => 'au',
    'CK' => 'aux',
    'CR' => 'au',
    'CI' => 'en',
    'HR' => 'en',
    'CU' => 'à',
    'CY' => 'à',
    'CZ' => 'en',
    'CD' => 'en',
    'DK' => 'au',
    'DJ' => 'à',
    'DM' => 'à la',
    'DO' => 'en',
    'TL' => 'au',
    'EC' => 'en',
    'EG' => 'en',
    'SV' => 'au',
    'GQ' => 'en',
    'ER' => 'en',
    'EE' => 'en',
    'ET' => 'en',
    'FK' => 'aux',
    'FO' => 'aux',
    'FM' => 'aux',
    'FJ' => 'aux',
    'FI' => 'en',
    'FR' => 'en',
    'GF' => 'en',
    'PF' => 'en',
    'TF' => 'dans les',
    'GA' => 'au',
    'GM' => 'en',
    'GE' => 'en',
    'DE' => 'en',
    'GH' => 'au',
    'GI' => 'à',
    'GR' => 'en',
    'GL' => 'au',
    'GD' => 'en',
    'GP' => 'en',
    'GU' => 'à',
    'GT' => 'au',
    'GW' => 'en',
    'GN' => 'en',
    'GY' => 'en',
    'HT' => 'en',
    'HM' => 'aux',
    'HN' => 'au',
    'HK' => 'à',
    'HU' => 'en',
    'IS' => 'en',
    'IN' => 'en',
    'ID' => 'en',
    'IR' => 'en',
    'IQ' => 'en',
    'IE' => 'en',
    'IL' => 'en',
    'IT' => 'en',
    'JM' => 'en',
    'JP' => 'au',
    'JO' => 'en',
    'KZ' => 'au',
    'KE' => 'au',
    'KI' => 'aux',
    'KW' => 'au',
    'KG' => 'au',
    'LA' => 'au',
    'LV' => 'en',
    'LB' => 'au',
    'LS' => 'au',
    'LR' => 'au',
    'LY' => 'en',
    'LI' => 'au',
    'LT' => 'en',
    'LU' => 'au',
    'MO' => 'à',
    'MG' => 'à',
    'MW' => 'au',
    'MY' => 'en',
    'MV' => 'aux',
    'ML' => 'au',
    'MT' => 'à',
    'MH' => 'aux',
    'MQ' => 'en',
    'MR' => 'en',
    'MU' => 'à',
    'YT' => 'à',
    'MX' => 'au',
    'MD' => 'en',
    'MC' => 'à',
    'MN' => 'en',
    'MS' => 'à',
    'MA' => 'au',
    'MZ' => 'au',
    'MM' => 'au',
    'NA' => 'en',
    'NR' => 'à',
    'NP' => 'au',
    'NL' => 'aux',
    'AN' => 'aux',
    'NC' => 'en',
    'NZ' => 'en',
    'NI' => 'au',
    'NG' => 'au',
    'NE' => 'au',
    'NU' => 'à',
    'NF' => 'à l\'',
    'KP' => 'en',
    'MP' => 'aux',
    'NO' => 'en',
    'OM' => 'à',
    'PK' => 'au',
    'PW' => 'aux',
    'PS' => 'aux',
    'PA' => 'au',
    'PG' => 'en',
    'PY' => 'au',
    'PE' => 'au',
    'PH' => 'aux',
    'PN' => 'aux',
    'PL' => 'en',
    'PT' => 'au',
    'PR' => 'à',
    'QA' => 'au',
    'RE' => 'à la',
    'MK' => 'en',
    'RO' => 'en',
    'RU' => 'en',
    'RW' => 'au',
    'SH' => 'à',
    'KN' => 'à',
    'LC' => 'à',
    'PM' => 'à',
    'VC' => 'à',
    'WS' => 'aux',
    'SM' => 'à',
    'ST' => 'à',
    'SA' => 'en',
    'SN' => 'au',
    'CS' => 'en',
    'SC' => 'aux',
    'SL' => 'en',
    'SG' => 'à',
    'SK' => 'en',
    'SI' => 'en',
    'SB' => 'aux',
    'SO' => 'en',
    'ZA' => 'en',
    'GS' => 'en',
    'KR' => 'en',
    'ES' => 'en',
    'LK' => 'au',
    'SD' => 'au',
    'SR' => 'au',
    'SJ' => 'au',
    'SZ' => 'au',
    'SE' => 'en',
    'CH' => 'en',
    'SY' => 'en',
    'TW' => 'à',
    'TJ' => 'au',
    'TZ' => 'en',
    'TH' => 'en',
    'TG' => 'au',
    'TK' => 'aux',
    'TO' => 'aux',
    'TT' => 'à',
    'TN' => 'en',
    'TR' => 'en',
    'TM' => 'au',
    'TC' => 'aux',
    'TV' => 'aux',
    'UG' => 'en',
    'UA' => 'en',
    'AE' => 'aux',
    'GB' => 'au',
    'US' => 'aux',
    'UM' => 'aux',
    'UY' => 'en',
    'VI' => 'aux',
    'UZ' => 'en',
    'VU' => 'à',
    'VA' => 'au',
    'VE' => 'au',
    'VN' => 'au',
    'WF' => 'à',
    'EH' => 'au',
    'YE' => 'au',
    'ZM' => 'en',
    'ZW' => 'au',
    'GG' => 'à',
    'IM' => 'à l\'',
    'JE' => 'à',
);
$countries_code_to_name_with_in_fr = array(
    'AF' => 'en',
    'AX' => 'aux',
    'AL' => 'en',
    'DZ' => 'en',
    'AS' => 'en',
    'AD' => 'en',
    'AO' => 'en',
    'AI' => 'en',
    'AQ' => 'en',
    'AG' => 'à',
    'AR' => 'en',
    'AM' => 'en',
    'AW' => 'à',
    'AU' => 'en',
    'AT' => 'en',
    'AZ' => 'en',
    'BS' => 'aux',
    'BH' => 'à',
    'BD' => 'au',
    'BB' => 'à la',
    'BY' => 'en',
    'BE' => 'en',
    'BZ' => 'au',
    'BJ' => 'au',
    'BM' => 'aux',
    'BT' => 'au',
    'BO' => 'en',
    'BA' => 'en',
    'BW' => 'au',
    'BV' => 'à l\'',
    'BR' => 'au',
    'IO' => 'au',
    'VG' => 'aux',
    'BN' => 'au',
    'BG' => 'en',
    'BF' => 'au',
    'BI' => 'au',
    'KH' => 'au',
    'CM' => 'au',
    'CA' => 'au',
    'CV' => 'au',
    'KY' => 'aux',
    'CF' => 'en',
    'TD' => 'au',
    'CL' => 'au',
    'CN' => 'en',
    'CX' => 'à l\'',
    'CC' => 'aux',
    'CO' => 'en',
    'KM' => 'aux',
    'CG' => 'au',
    'CK' => 'aux',
    'CR' => 'au',
    'CI' => 'en',
    'HR' => 'en',
    'CU' => 'à',
    'CY' => 'à',
    'CZ' => 'en',
    'CD' => 'en',
    'DK' => 'au',
    'DJ' => 'à',
    'DM' => 'à la',
    'DO' => 'en',
    'TL' => 'au',
    'EC' => 'en',
    'EG' => 'en',
    'SV' => 'au',
    'GQ' => 'en',
    'ER' => 'en',
    'EE' => 'en',
    'ET' => 'en',
    'FK' => 'aux',
    'FO' => 'aux',
    'FM' => 'aux',
    'FJ' => 'aux',
    'FI' => 'en',
    'FR' => 'en',
    'GF' => 'en',
    'PF' => 'en',
    'TF' => 'dans les',
    'GA' => 'au',
    'GM' => 'en',
    'GE' => 'en',
    'DE' => 'en',
    'GH' => 'au',
    'GI' => 'à',
    'GR' => 'en',
    'GL' => 'au',
    'GD' => 'en',
    'GP' => 'en',
    'GU' => 'à',
    'GT' => 'au',
    'GW' => 'en',
    'GN' => 'en',
    'GY' => 'en',
    'HT' => 'en',
    'HM' => 'aux',
    'HN' => 'au',
    'HK' => 'à',
    'HU' => 'en',
    'IS' => 'en',
    'IN' => 'en',
    'ID' => 'en',
    'IR' => 'en',
    'IQ' => 'en',
    'IE' => 'en',
    'IL' => 'en',
    'IT' => 'en',
    'JM' => 'en',
    'JP' => 'au',
    'JO' => 'en',
    'KZ' => 'au',
    'KE' => 'au',
    'KI' => 'aux',
    'KW' => 'au',
    'KG' => 'au',
    'LA' => 'au',
    'LV' => 'en',
    'LB' => 'au',
    'LS' => 'au',
    'LR' => 'au',
    'LY' => 'en',
    'LI' => 'au',
    'LT' => 'en',
    'LU' => 'au',
    'MO' => 'à',
    'MG' => 'à',
    'MW' => 'au',
    'MY' => 'en',
    'MV' => 'aux',
    'ML' => 'au',
    'MT' => 'à',
    'MH' => 'aux',
    'MQ' => 'en',
    'MR' => 'en',
    'MU' => 'à',
    'YT' => 'à',
    'MX' => 'au',
    'MD' => 'en',
    'MC' => 'à',
    'MN' => 'en',
    'MS' => 'à',
    'MA' => 'au',
    'MZ' => 'au',
    'MM' => 'au',
    'NA' => 'en',
    'NR' => 'à',
    'NP' => 'au',
    'NL' => 'aux',
    'AN' => 'aux',
    'NC' => 'en',
    'NZ' => 'en',
    'NI' => 'au',
    'NG' => 'au',
    'NE' => 'au',
    'NU' => 'à',
    'NF' => 'à l\'',
    'KP' => 'en',
    'MP' => 'aux',
    'NO' => 'en',
    'OM' => 'à',
    'PK' => 'au',
    'PW' => 'aux',
    'PS' => 'aux',
    'PA' => 'au',
    'PG' => 'en',
    'PY' => 'au',
    'PE' => 'au',
    'PH' => 'aux',
    'PN' => 'aux',
    'PL' => 'en',
    'PT' => 'au',
    'PR' => 'à',
    'QA' => 'au',
    'RE' => 'à la',
    'MK' => 'en',
    'RO' => 'en',
    'RU' => 'en',
    'RW' => 'au',
    'SH' => 'à',
    'KN' => 'à',
    'LC' => 'à',
    'PM' => 'à',
    'VC' => 'à',
    'WS' => 'aux',
    'SM' => 'à',
    'ST' => 'à',
    'SA' => 'en',
    'SN' => 'au',
    'CS' => 'en',
    'SC' => 'aux',
    'SL' => 'en',
    'SG' => 'à',
    'SK' => 'en',
    'SI' => 'en',
    'SB' => 'aux',
    'SO' => 'en',
    'ZA' => 'en',
    'GS' => 'en',
    'KR' => 'en',
    'ES' => 'en',
    'LK' => 'au',
    'SD' => 'au',
    'SR' => 'au',
    'SJ' => 'au',
    'SZ' => 'au',
    'SE' => 'en',
    'CH' => 'en',
    'SY' => 'en',
    'TW' => 'à',
    'TJ' => 'au',
    'TZ' => 'en',
    'TH' => 'en',
    'TG' => 'au',
    'TK' => 'aux',
    'TO' => 'aux',
    'TT' => 'à',
    'TN' => 'en',
    'TR' => 'en',
    'TM' => 'au',
    'TC' => 'aux',
    'TV' => 'aux',
    'UG' => 'en',
    'UA' => 'en',
    'AE' => 'aux',
    'GB' => 'au',
    'US' => 'aux',
    'UM' => 'aux',
    'UY' => 'en',
    'VI' => 'aux',
    'UZ' => 'en',
    'VU' => 'à',
    'VA' => 'au',
    'VE' => 'au',
    'VN' => 'au',
    'WF' => 'à',
    'EH' => 'au',
    'YE' => 'au',
    'ZM' => 'en',
    'ZW' => 'au',
    'GG' => 'à',
    'IM' => 'à l\'',
    'JE' => 'à',
);

/* countries_sort CODE_A CODE_B
 * Takes two country codes, such as GB and CN. Returns -1, 0, or 1
 * according to how their full names are alphabetically sorted.
 * For use with PHP sort functions.
 */
function countries_sort($a, $b) {
    global $countries_code_to_name;
    return strcoll($countries_code_to_name[$a], $countries_code_to_name[$b]);
}

/* countries_with_to CODE
 * Takes a oountry code, and returns the French for "to <country>"
 * if the locale is French, or just the country name otherwise
 */
function countries_with_to($c) {
    global $countries_code_to_name, $countries_code_to_name_with_to_fr, $locale_current;
    if ($locale_current == 'fr' && array_key_exists($c, $countries_code_to_name_with_to_fr)) {
        return $countries_code_to_name_with_to_fr[$c] . ' ' . $countries_code_to_name[$c];
    } else {
        return $countries_code_to_name[$c];
    }
}

/* countries_with_in CODE
 * Takes a oountry code, and returns the French for "in <country>"
 * if the locale is French, or just the country name otherwise
 */
function countries_with_in($c) {
    global $countries_code_to_name, $countries_code_to_name_with_in_fr, $locale_current;
    if ($locale_current == 'fr' && array_key_exists($c, $countries_code_to_name_with_in_fr)) {
        return $countries_code_to_name_with_in_fr[$c] . ' ' . $countries_code_to_name[$c];
    } else {
        return $countries_code_to_name[$c];
    }
}

/* countries_with_from CODE
 * Takes a oountry code, and returns the French for "from <country>"
 * if the locale is French, or just the country name otherwise
 */
function countries_with_from($c) {
    global $countries_code_to_name, $countries_code_to_name_with_from_fr, $locale_current;
    if ($locale_current == 'fr' && array_key_exists($c, $countries_code_to_name_with_from_fr)) {
        return $countries_code_to_name_with_from_fr[$c] . ' ' . $countries_code_to_name[$c];
    } else {
        return $countries_code_to_name[$c];
    }
}

?>
