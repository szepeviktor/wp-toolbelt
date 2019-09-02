<?php
/**
 * Plugin Name: WP Toolbelt
 * Description: More features, fast.
 * Author: Ben Gillbanks
 * Version: 1.6
 * Author URI: https://prothemedesign.com
 *
 * @package toolbelt
 */

define( 'TOOLBELT_VERSION', '1.6' );
define( 'TOOLBELT_PATH', plugin_dir_path( __FILE__ ) );

if ( ! defined( 'TOOLBELT_DISABLE_ADMIN' ) && is_admin() ) {

	require TOOLBELT_PATH . 'admin/index.php';

}


/**
 * Load the enabled modules.
 */
function toolbelt_load_modules() {

	$modules = toolbelt_get_modules();
	$options = toolbelt_get_options();

	foreach ( $modules as $slug => $module ) {

		// if module has been enabled then load it.
		if ( ! empty( $options[ $slug ] ) && 'on' === $options[ $slug ] ) {

			require TOOLBELT_PATH . 'modules/' . $slug . '/index.php';

		}
	}

}

add_action( 'after_setup_theme', 'toolbelt_load_modules' );


/**
 * Get the list of available Toolbelt modules.
 */
function toolbelt_get_modules() {

	return array(
		'cookie-banner' => array(
			'name' => esc_html__( 'Cookie Banner', 'wp-toolbelt' ),
			'description' => esc_html__( 'Display a simple banner with a link to your Privacy Policy.', 'wp-toolbelt' ),
			'docs' => 'https://github.com/BinaryMoon/wp-toolbelt/wiki/Cookie-Banner',
			'weight' => esc_html__( '1.2kb of inline JS and CSS.', 'wp-toolbelt' ),
		),
		'social-sharing' => array(
			'name' => esc_html__( 'Static Social Sharing', 'wp-toolbelt' ),
			'description' => esc_html__( 'Add social sharing links that use the platforms native sharing system.', 'wp-toolbelt' ),
			'docs' => 'https://github.com/BinaryMoon/wp-toolbelt/wiki/Static-Social-Sharing',
			'weight' => esc_html__( '4.1kb of inline SVG icons, and 0.7kb of inline CSS.', 'wp-toolbelt' ),
		),
		'projects' => array(
			'name' => esc_html__( 'Portfolio', 'wp-toolbelt' ),
			'description' => esc_html__( 'A portfolio custom post type.', 'wp-toolbelt' ),
			'docs' => 'https://github.com/BinaryMoon/wp-toolbelt/wiki/Portfolio',
		),
		'cleanup' => array(
			'name' => esc_html__( 'Header Cleanup', 'wp-toolbelt' ),
			'description' => esc_html__( 'Remove unnecessary HTML from the site header.', 'wp-toolbelt' ),
			'docs' => 'https://github.com/BinaryMoon/wp-toolbelt/wiki/Optimization',
			'weight' => esc_html__( 'Minus 5kb of HTML from the page head.', 'wp-toolbelt' ),
		),
		'breadcrumbs' => array(
			'name' => esc_html__( 'Breadcrumbs', 'wp-toolbelt' ),
			'description' => esc_html__( 'Simple, fast, breadcrumbs. Requires support from the theme to display. See docs for more info.', 'wp-toolbelt' ),
			'docs' => 'https://github.com/BinaryMoon/wp-toolbelt/wiki/Breadcrumbs',
			'weight' => esc_html__( '1 or 2kb of HTML.', 'wp-toolbelt' ),
		),
		'related-posts' => array(
			'name' => esc_html__( 'Related Posts', 'wp-toolbelt' ),
			'description' => esc_html__( 'Speedy related posts.', 'wp-toolbelt' ),
			'docs' => 'https://github.com/BinaryMoon/wp-toolbelt/wiki/Related-Posts',
			'weight' => esc_html__( '0.3kb of inline CSS, plus the HTML and images.', 'wp-toolbelt' ),
		),
		'lazy-load' => array(
			'name' => esc_html__( 'Lazy Load images', 'wp-toolbelt' ),
			'description' => esc_html__( 'Add native browser lazy loading to all images on your website. Currently this only works in Chrome, but hopefully it will be added to all browsers.', 'wp-toolbelt' ),
			'docs' => 'https://github.com/BinaryMoon/wp-toolbelt/wiki/Lazy-Loading',
		),
		'social-menu' => array(
			'name' => esc_html__( 'Social Menu', 'wp-toolbelt' ),
			'description' => esc_html__( 'Add a social icons menu. This must be integrated into the theme.', 'wp-toolbelt' ),
			'docs' => 'https://github.com/BinaryMoon/wp-toolbelt/wiki/Social-Menu',
			'weight' => esc_html__( '0.2kb of inline CSS, plus the SVGs needed for the icons' ),
		),
		'featured-attachment' => array(
			'name' => esc_html__( 'Featured Attachment', 'wp-toolbelt' ),
			'description' => esc_html__( 'If there is no featured image for a post then use the first image attachment instead.', 'wp-toolbelt' ),
			'docs' => 'https://github.com/BinaryMoon/wp-toolbelt/wiki/Featured-Attachment',
		),
		'responsive-videos' => array(
			'name' => esc_html__( 'Responsive Videos', 'wp-toolbelt' ),
			'description' => esc_html__( 'Ensure embedded videos maintain a 16:9 aspect ratio on all screen sizes. Ignores blocks with responsive videos.', 'wp-toolbelt' ),
			'docs' => 'https://github.com/BinaryMoon/wp-toolbelt/wiki/Responsive-Videos',
		),
		'random-redirect' => array(
			'name' => esc_html__( 'Random Redirect', 'wp-toolbelt' ),
			'description' => esc_html__( 'Randomly Redirect to a blog post.', 'wp-toolbelt' ),
			'docs' => 'https://github.com/BinaryMoon/wp-toolbelt/wiki/Random-Redirect',
		),
		'heading-anchors' => array(
			'name' => esc_html__( 'Heading Anchors', 'wp-toolbelt' ),
			'description' => esc_html__( 'Allow site visitors to link to individual sections of the page. Adds unique ids to each heading.', 'wp-toolbelt' ),
			'docs' => 'https://github.com/BinaryMoon/wp-toolbelt/wiki/Heading-Anchor',
		),
		'fast-404' => array(
			'name' => esc_html__( 'Fast 404s', 'wp-toolbelt' ),
			'description' => esc_html__( 'Disable 404 pages for static files like images.', 'wp-toolbelt' ),
			'docs' => 'https://github.com/BinaryMoon/wp-toolbelt/wiki/Fast-404',
		),
		'disable-comment-urls' => array(
			'name' => esc_html__( 'Disable Comment Urls', 'wp-toolbelt' ),
			'description' => esc_html__( 'Remove the URL field from Comment forms. Probably only works on the core comment form, and not on custom ones added to themes.', 'wp-toolbelt' ),
			'docs' => 'https://github.com/BinaryMoon/wp-toolbelt/wiki/Disable-Comment-Urls',
		),
	);

}


/**
 * Output custom css properties that are used by the plugin css.
 *
 * This can be used by themes to make the spacings match those used.
 */
function toolbelt_css_properties() {

	$properties = array(
		'toolbelt-spacing' => '1rem',
	);

	$properties = apply_filters(
		'toolbelt_css_properties',
		$properties
	);

	$css_properties = '';

	foreach ( $properties as $key => $value ) {
		$css_properties .= ' --' . $key . ':' . $value . ';';
	}

	echo '<style>:root {';
	echo esc_attr( $css_properties );
	echo '}</style>';

}

add_filter( 'wp_print_styles', 'toolbelt_css_properties' );


/**
 * Inline the module css.
 *
 * @param string $module The module slug.
 */
function toolbelt_styles( $module ) {

	if ( defined( 'TOOLBELT_DISABLE_STYLES' ) ) {
		return;
	}

	$css_filter = sprintf( 'toolbelt_hide_%s_styles', $module );

	if ( apply_filters( $css_filter, false ) ) {
		return;
	}

	$path = TOOLBELT_PATH . 'modules/' . $module . '/style.min.css';

	echo '<style name="toolbelt-' . esc_attr( $module ) . '">';
	require_once $path;
	echo '</style>';

}


/**
 * Load the toolbelt options.
 */
function toolbelt_get_options() {

	/**
	 * Add a filter that allows us to override the database options.
	 *
	 * If these options are set then they will be the only options used. The
	 * database will be ignored entirely.
	 *
	 * @see https://github.com/BinaryMoon/wp-toolbelt/wiki/Admin-Settings#toolbelt_options
	 */
	$options = apply_filters( 'toolbelt_options', null );

	if ( empty( $options ) ) {

		$options = get_option( 'toolbelt_options' );

	}

	return $options;

}
