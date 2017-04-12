<?php
/**
 * This is where child-theme specific code should be ran.
 *
 * @package Evolv
 */

function evolv_child_configs( $configs ) {
	// Text domain.
	$configs['theme_name'] = 'evolv-child';
	// Enable template wrapper.
	$configs['boldgrid-parent-theme'] = true;
	// Specify the parent theme's name.
	$configs['parent-theme-name'] = 'boldgrid-evolv';
	// Assign Locations for Generic Header.
	$configs['template']['locations']['header'] = array(
		'5' => array( '[menu]secondary' ),
		'8' => array( '[action]boldgrid_site_identity', '[action]boldgrid_primary_navigation' ),
		'11' => array( '[menu]tertiary' ),
	);

	return $configs;
}
add_filter( 'boldgrid_theme_framework_config', 'evolv_child_configs', 20 );
