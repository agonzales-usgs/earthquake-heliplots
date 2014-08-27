<?php

	if (!file_exists('../conf/config.ini')) {
		throw new Exception('Configuration file required. Run lib/pre-install.php');
	}

	$CONFIG = parse_ini_file('../conf/config.ini');

	$DATA_DIR = $CONFIG['DATA_DIR'];
	$DATA_URL = $CONFIG['DATA_URL'];

	$NAVIGATION = true;

	$DATE_FORMAT = "F j, Y H:i:s \U\T\C";
	$TIMESTAMP_FILE = 'Seismic_Data/tt_update';
	$DATA_FILE = 'Seismic_Data/telemetry_data/';

	$HELICORDER_MOD = gmdate($DATE_FORMAT, filemtime(
			$DATA_DIR . '/' . $TIMESTAMP_FILE));
