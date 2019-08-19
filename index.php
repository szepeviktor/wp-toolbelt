<?php
/**
 * Plugin Name: Toolbelt
 * Plugin URI: https://prothemedesign.com
 * Description: More features, fast.
 * Author: Ben Gillbanks
 * Version: 0.0.1
 * Author URI: https://prothemedesign.com
 *
 * @package toolbelt
 */

define( 'TB_VERSION', '0.0.1' );
define( 'TB_PATH', plugin_dir_path( __FILE__ ) );

if ( is_admin() ) {

	require TB_PATH . 'admin/index.php';

}


/**
 * Load the enabled modules.
 */
function tb_load_modules() {

	$modules = tb_get_modules();
	$options = get_option( 'toolbelt_options' );

	foreach ( $modules as $slug => $module ) {

		// if module has been enabled then load it.
		if ( ! empty( $options[ $slug ] ) && 'on' === $options[ $slug ] ) {

			require TB_PATH . 'modules/' . $slug . '/index.php';

		}
	}

}

add_action( 'init', 'tb_load_modules' );


/**
 * Get the list of available Toolbelt modules.
 */
function tb_get_modules() {

	return array(
		'cookie-banner' => array(
			'name' => esc_html__( 'EU Cookie Banner', 'toolbelt' ),
			'description' => esc_html( 'Display a simple banner with a link to your Privacy Policy.', 'toolbelt' ),
			'docs' => 'https://github.com/BinaryMoon/wp-toolbelt/wiki/Cookie-Banner',
		),
		'social' => array(
			'name' => esc_html__( 'Static Social Sharing', 'toolbelt' ),
			'description' => esc_html( 'Add social sharing links that use the platforms native sharing system.', 'toolbelt' ),
			'docs' => 'https://github.com/BinaryMoon/wp-toolbelt/wiki/Static-Social-Sharing',
		),
		'projects' => array(
			'name' => esc_html__( 'Portfolio', 'toolbelt' ),
			'description' => esc_html( 'A portfolio custom post type.', 'toolbelt' ),
			'docs' => 'https://github.com/BinaryMoon/wp-toolbelt/wiki/Portfolio',
		),
		'cleanup' => array(
			'name' => esc_html__( 'Header Cleanup', 'toolbelt' ),
			'description' => esc_html( 'Remove unnecessary HTML from the site header.', 'toolbelt' ),
			'docs' => 'https://github.com/BinaryMoon/wp-toolbelt/wiki/Optimization',
		),
		'breadcrumbs' => array(
			'name' => esc_html__( 'Breadcrumbs', 'toolbelt' ),
			'description' => esc_html( 'Simple, fast, breadcrumbs. Requires support from the theme to display. See docs for more info.', 'toolbelt' ),
			'docs' => 'https://github.com/BinaryMoon/wp-toolbelt/wiki/Breadcrumbs',
		),
	);

}
