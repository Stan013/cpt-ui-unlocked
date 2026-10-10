<?php
/**
 * CPT UI 辅助工具函数。
 *
 * @package CPT_UI
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function cpt_ui_helper_defaults() {
	return array(
		'cache'      => true,
		'debug'      => false,
		'version'    => '1.0.0',
	);
}
