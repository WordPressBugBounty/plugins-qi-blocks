<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

foreach ( glob( QI_BLOCKS_ADMIN_PATH . '/*/include.php' ) as $module ) {
	require_once $module;
}
