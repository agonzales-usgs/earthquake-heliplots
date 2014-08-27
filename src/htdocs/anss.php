<?php
if (!isset($TEMPLATE)) {
	$TITLE = 'ANSS Backbone Heliplots';
	include_once '../conf/config.inc.php';

	include 'template.inc.php';
}

$anss_stations = array (
	'DLMT' => 'IW/DLMT Dillon, Montana, USA',
	'FLWY' => 'IW/FLWY Flagg Ranch, Wyoming, USA',
	'FXWY' => 'IW/FXWY Fox Creek, Wyoming, USA',
	'IMW' => 'IW/IMW Indian Meadow, Wyoming, USA',
	'LOHW' => 'IW/LOHW Long Hollow, Wyoming, USA',
	'MFID' => 'IW/MFID Camas Ranch, Mayfield, ID, USA',
	'MOOW' => 'IW/MOOW Moose Ponds, Wyoming, USA',
	'PHWY' => 'IW/PHWY Pilot Hill, Wyoming, USA',
	'PLID' => 'IW/PLID Pearl Lake, Idaho, USA',
	'REDW' => 'IW/REDW Red Top Meadow, Wyoming, USA',
	'RWWY' => 'IW/RWWY Rawlins, Wyoming, USA',
	'SMCO' => 'IW/SMCO Snowmass, Colorado, USA',
	'SNOW' => 'IW/SNOW Snow King Mountain, Wyoming, USA',
	'TPAW' => 'IW/TPAW Teton Pass, Wyoming, USA',
	'BCX' => 'NE/BCX Chestnut Hill, MA, USA',
	'BRYW' => 'NE/BRYW Smithfield, RI, USA',
	'EMMW' => 'NE/EMMW Machias, ME, USA',
	'FFD' => 'NE/FFD Franklin Falls Dam, NH, USA',
	'HNH' => 'NE/HNH Hanover, NH, USA',
	'PQI' => 'NE/PQI Presque Isle, ME, USA',
	'QUA2' => 'NE/QUA2 Belchertown, MA, USA',
	'TRY' => 'NE/TRY Troy, NY, USA',
	'VT1' => 'NE/VT1 Waterbury, VT, USA',
	'WES' => 'NE/WES Weston Observatory, Weston, MA, USA',
	'WSPT' => 'NE/WSPT Westport, CT, USA',
	'WVL' => 'NE/WVL Waterville, ME, USA',
	'YLE' => 'NE/YLE Yale, Connecticut, U.S.A.',
	'AAM' => 'US/AAM Ann Arbor, Michigan, USA',
	'ACSO' => 'US/ACSO Alum Creek State Park, Ohio, USA',
	'AGMN' => 'US/AGMN Agassiz National Wildlife Refuge, Minnesota, USA',
	'AHID' => 'US/AHID Auburn Hatchery, Idaho, USA',
	'AMTX' => 'US/AMTX Amarillo, Texas, USA',
	'BINY' => 'US/BINY Binghamton, New York, USA',
	'BLA' => 'US/BLA Blacksburg, Virginia, USA',
	'BMO' => 'US/BMO Blue Mountains Array (Baker), Oregon, USA',
	'BOZ' => 'US/BOZ Bozeman, Montana, USA',
	'BRAL' => 'US/BRAL Brewton, Alabama, USA',
	'BW06' => 'US/BW06 Boulder Array Site 6 (Pinedale Array Site 6), Wyoming, USA',
	'CBKS' => 'US/CBKS Cedar Bluff, Kansas, USA',
	'CBN' => 'US/CBN Corbin (Fredericksburg Observatory), Virginia, USA',
	'CNNC' => 'US/CNNC Cliffs of the Neuse, North Carolina, USA',
	'COWI' => 'US/COWI Conover, Wisconsin, USA',
	'DGMT' => 'US/DGMT Dagmar, Montana, USA',
	'DUG' => 'US/DUG Dugway, Tooele County, Utah, USA',
	'ECSD' => 'US/ECSD EROS Data Center, Sioux Falls, South Dakota, USA',
	'EGAK' => 'US/EGAK Eagle, Central Alaska, Alaska, USA',
	'EGMT' => 'US/EGMT Eagleton, Montana, USA',
	'ELK' => 'US/ELK Elko, Nevada, USA',
	'ERPA' => 'US/ERPA Erie, Pennsylvania, USA',
	'EYMN' => 'US/EYMN Ely, Minnesota, USA',
	'GLMI' => 'US/GLMI Grayling, Michigan, USA',
	'GOGA' => 'US/GOGA Godfrey, Georgia, USA',
	'HAWA' => 'US/HAWA Hanford, Washington, USA',
	'HDIL' => 'US/HDIL Hopedale, Illinois, USA',
	'HLID' => 'US/HLID Hailey, Idaho, USA',
	'HWUT' => 'US/HWUT Hardware Ranch, Cache County, Utah, USA',
	'ISCO' => 'US/ISCO Idaho Springs, Colorado, USA',
	'JCT' => 'US/JCT Junction, Texas, USA',
	'JFWS' => 'US/JFWS Jewell Farm, Wisconsin, USA',
	'KSU1' => 'US/KSU1 Kansas State University--Konza Prairie, Kansas, USA',
	'KVTX' => 'US/KVTX Kingsville, Texas, USA',
	'LAO' => 'US/LAO LASA Array, Montana, USA',
	'LBNH' => 'US/LBNH Lisbon, New Hampshire, USA',
	'LKWY' => 'US/LKWY Lake (Yellowstone--Lake), Yellowstone National Park, Wyoming',
	'LONY' => 'US/LONY Lake Ozonia, New York, USA',
	'LRAL' => 'US/LRAL Lakeview Retreat, Alabama, USA',
	'MCWV' => 'US/MCWV Mont Chateau, West Virginia, USA',
	'MIAR' => 'US/MIAR Mount Ida, Arkansas, USA',
	'MNTX' => 'US/MNTX Cornudas Mountains, Texas, USA',
	'MSO' => 'US/MSO Missoula, Montana, USA',
	'MVCO' => 'US/MVCO Mesa Verde, Colorado, USA',
	'NATX' => 'US/NATX Nacogdoches, Texas, USA',
	'NEW' => 'US/NEW Newport, Washington, USA',
	'NHSC' => 'US/NHSC New Hope, South Carolina, USA',
	'NLWA' => 'US/NLWA Neilton Lookout, Washington, USA',
	'OGNE' => 'US/OGNE Ogallala, Nebraska, USA',
	'OXF' => 'US/OXF Oxford, Mississippi, USA',
	'PKME' => 'US/PKME Peaks-Kenny State Park, Maine, USA',
	'RLMT' => 'US/RLMT Red Lodge, Montana, USA',
	'SCIA' => 'US/SCIA State Center, Iowa, USA',
	'SDCO' => 'US/SDCO Great Sand Dunes National Park, Colorado, USA',
	'TPNV' => 'US/TPNV Topopah Spring, Nevada, USA',
	'TZTN' => 'US/TZTN Tazewell, Tennessee, USA',
	'VBMS' => 'US/VBMS Vicksburg, Mississippi',
	'WMOK' => 'US/WMOK Wichita Mountains, Oklahoma, USA',
	'WRAK' => 'US/WRAK Wrangell Island, Southeastern Alaska, Alaska, USA',
	'WUAZ' => 'US/WUAZ Wupatki, Arizona, USA',
	'WVOR' => 'US/WVOR Wild Horse Valley, Oregon, USA'
  );
?>

<h2>ANSS Backbone Stations</h2>

<p><strong>These data update automatically every 30 minutes.<br />
Last update: <?php print $HELICORDER_MOD; ?></strong></p>

<p>Seismograms may take several moments to load. Click on a plot to see larger image.</p>
<div class="row">
<?php
$i=0;
foreach ($anss_stations as $key => $value) {
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