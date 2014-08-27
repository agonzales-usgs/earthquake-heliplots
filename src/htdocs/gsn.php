<?php
if (!isset($TEMPLATE)) {
	$TITLE = "GSN Heliplots";
	include_once '../conf/config.inc.php';

	include 'template.inc.php';
}

$gsn_stations = array (
	'ANWB' => 'CU/ANWB Willy Bob, Antigua and Barbuda',
	'BBGH' => 'CU/BBGH Gun Hill, Barbados',
	'BCIP' => 'CU/BCIP Isla Barro Colorado, Panama',
	'GRGR' => 'CU/GRGR Grenville, Grenada',
	'GRTK' => 'CU/GRTK Grand Turk, Turks and Caicos Islands',
	'GTBY' => 'CU/GTBY Guantanamo Bay, Cuba',
	'MTDJ' => 'CU/MTDJ Mount Denham, Jamaica',
	'SDDR' => 'CU/SDDR Presa de Sabenta, Dominican Republic',
	'TGUH' => 'CU/TGUH Tegucigalpa, Honduras',
	'BOSA' => 'GT/BOSA Boshof, South Africa',
	'CPUP' => 'GT/CPUP Villa Florida, Paraguay',
	'DBIC' => 'GT/DBIC Dimbokro, Cote dIvoire',
	'LBTB' => 'GT/LBTB Lobatse, Botswana, Africa',
	'LPAZ' => 'GT/LPAZ La Paz , Bolivia',
	'PLCA' => 'GT/PLCA Paso Flores, Argentina',
	'VNDA' => 'GT/VNDA Wright Valley (Bull Pass) Antarctica',
	'BJT' => 'IC/BJT Baijiatuan, Beijing, China',
	'ENH' => 'IC/ENH Enshi, Hubei Province, China',
	'HIA' => 'IC/HIA Hailar, Neimenggu Autonomous Region, China',
	'KMI' => 'IC/KMI Kunming, Yunnan Province, China',
	'LSA' => 'IC/LSA Tibet, China',
	'MDJ' => 'IC/MDJ Mudanjiang, Heilongjiang Province, China',
	'QIZ' => 'IC/QIZ Qiongzhong, Hainan Province, China',
	'SSE' => 'IC/SSE Shanghai, China',
	'WMQ' => 'IC/WMQ Urumqi, Xinjiang Province, China',
	'XAN' => 'IC/XAN Xian, China',
	'ADK' => 'IU/ADK Adak, Aleutian Islands, Alaska',
	'AFI' => 'IU/AFI Afiamalu, Samoa',
	'ANMO' => 'IU/ANMO Albuquerque, New Mexico, USA',
	'ANTO' => 'IU/ANTO Ankara, Turkey',
	'BBSR' => 'IU/BBSR Bermuda Institute of Ocean Sciences, St Georges Bermuda',
	'BILL' => 'IU/BILL Bilibino, Russia',
	'CASY' => 'IU/CASY Casey, Antarctica',
	'CCM' => 'IU/CCM Cathedral Cave, Missouri, USA',
	'CHTO' => 'IU/CHTO Chiang Mai, Thailand',
	'COLA' => 'IU/COLA College Outpost, Alaska, USA',
	'COR' => 'IU/COR Corvallis, Oregon, USA',
	'CTAO' => 'IU/CTAO Charters Towers, Australia',
	'DAV' => 'IU/DAV Davao, Philippines',
	'DWPF' => 'IU/DWPF Disney Wilderness Preserve, Florida, USA',
	'FUNA' => 'IU/FUNA Funafuti, Tuvalu',
	'FURI' => 'IU/FURI Mt. Furi, Ethiopia',
	'GNI' => 'IU/GNI Garni, Armenia',
	'GRFO' => 'IU/GRFO Grafenberg, Germany',
	'GUMO' => 'IU/GUMO Guam, Mariana Islands',
	'HKT' => 'IU/HKT Hockley, Texas',
	'HNR' => 'IU/HNR Honiara, Solomon Islands',
	'HRV' => 'IU/HRV Adam Dziewonski Observatory (Oak Ridge), Massachusetts, USA',
	'INCN' => 'IU/INCN Inchon, Republic of Korea',
	'JOHN' => 'IU/JOHN Johnston Island, USA',
	'KBL' => 'IU/KBL Kabul, Afghanistan',
	'KBS' => 'IU/KBS Ny-Alesund, Spitzbergen, Norway',
	'KEV' => 'IU/KEV Kevo, Finland',
	'KIEV' => 'IU/KIEV Kiev, Ukraine',
	'KIP' => 'IU/KIP Kipapa, Hawaii, USA',
	'KMBO' => 'IU/KMBO Kilima Mbogo, Kenya',
	'KNTN' => 'IU/KNTN Kanton, Kiritibati',
	'KONO' => 'IU/KONO Kongsberg, Norway',
	'KOWA' => 'IU/KOWA Kowa, Mali',
	'LCO' => 'IU/LCO Las Campanas Astronomical Observatory, Chile',
	'LSZ' => 'IU/LSZ Lusaka, Zambia',
	'LVC' => 'IU/LVC Limon Verde, Chile',
	'MA2' => 'IU/MA2 Magadan, Russia',
	'MACI' => 'IU/MACI Morro de la Arena, Canary Islands',
	'MAJO' => 'IU/MAJO Matsushiro, Japan',
	'MAKZ' => 'IU/MAKZ Makanchi, Kazakhstan',
	'MBWA' => 'IU/MBWA Marble Bar, Western Australia',
	'MIDW' => 'IU/MIDW Midway Island, USA',
	'MSKU' => 'IU/MSKU Masuku, Gabon',
	'NWAO' => 'IU/NWAO Narrogin, Australia',
	'OTAV' => 'IU/OTAV Otavalo, Ecuador',
	'PAB' => 'IU/PAB San Pablo, Spain',
	'PAYG' => 'IU/PAYG Puerto Ayora, Galapagos Islands',
	'PET' => 'IU/PET Petropavlovsk, Russia',
	'PMG' => 'IU/PMG Port Moresby, New Guinea',
	'PMSA' => 'IU/PMSA Palmer Station, Antarctica',
	'POHA' => 'IU/POHA Pohakuloa, Hawaii, USA',
	'PTCN' => 'IU/PTCN Pitcairn Island, South Pacific',
	'PTGA' => 'IU/PTGA Pitinga, Brazil',
	'QSPA' => 'IU/QSPA South Pole Remote Earth Science Observatory (Quiet Zone)',
	'RAO' => 'IU/RAO Raoul, Kermadec Islands',
	'RAR' => 'IU/RAR Rarotonga, Cook Islands',
	'RCBR' => 'IU/RCBR Riachuelo, Brazil',
	'RSSD' => 'IU/RSSD Black Hills, South Dakota, USA',
	'SAML' => 'IU/SAML Samuel, Brazil',
	'SBA' => 'IU/SBA Scott Base, Antarctica',
	'SDV' => 'IU/SDV Santo Domingo, Venezuela',
	'SFJD' => 'IU/SFJD Sondre Stromfjord, Greenland',
	'SJG' => 'IU/SJG San Juan, Puerto Rico',
	'SLBS' => 'IU/SLBS Sierra la Laguna Baja California Sur, Mexico',
	'SNZO' => 'IU/SNZO South Karori, New Zealand',
	'SSPA' => 'IU/SSPA Standing Stone, Pennsylvania',
	'TARA' => 'IU/TARA Tarawa Island, Republic of Kiribati',
	'TATO' => 'IU/TATO Taipei, Taiwan',
	'TEIG' => 'IU/TEIG Tepich, Yucatan, Mexico',
	'TIXI' => 'IU/TIXI Tiksi, Russia',
	'TRIS' => 'IU/TRIS Tristan da Cunha',
	'TRQA' => 'IU/TRQA Tornquist, Argentina',
	'TSUM' => 'IU/TSUM Tsumeb, Namibia',
	'TUC' => 'IU/TUC Tucson, Arizona',
	'ULN' => 'IU/ULN Ulaanbaatar, Mongolia',
	'WAKE' => 'IU/WAKE Wake Island',
	'WCI' => 'IU/WCI Wyandotte Cave, Indiana, USA',
	'WVT' => 'IU/WVT Waverly, Tennessee, USA',
	'XMAS' => 'IU/XMAS Kiritimati Island, Republic of Kiribati',
	'YAK' => 'IU/YAK Yakutsk, Russia',
	'YSS' => 'IU/YSS Yuzhno Sakhalinsk, Russia'
	);
	
?>

<h2>GSN Stations</h2>

<p>
	<strong>
		These data update automatically every 30 minutes.
		<br/>
		Last update: <?php print $HELICORDER_MOD; ?>
	</strong></p>

<p>
	Seismograms may take several moments to load. Click on a plot to see larger
	image.
</p>
<div class="row">
<?php
$i = 0;
foreach ($gsn_stations as $key => $value) {
	print '<div class="heliplot column one-of-two">';
	print '      <h3>' . $value . '</h3>';
	print '      <a href="' . $DATA_URL . '/' . $DATA_FILE . $key . '_24hr.html" />';
	print '      <img src="' . $DATA_URL . '/' . $DATA_FILE . $key . '_24hr.png" alt=" ' . $key . ' 24hr plot"/></a>';
	print '</div>';
	if ((++$i) % 2 == 0) {
		// clear after every second heliplot
		// fixes a layout issue when stations don't have telmetry data
		print '<br clear="both"/>';
	}
}
?>
</div>