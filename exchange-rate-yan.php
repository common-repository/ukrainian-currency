<?php
/*
Plugin Name: Курс валют UAH
Plugin URI: https://damvb.org/kurs-informer/
Description: Курс валют от НБУ для Вашего сайта.
Author: Glopium Studio
Version: 2.0
Author URI: https://profiles.wordpress.org/glopium/
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
* Unique string - MXERU
*/

/*
* Define MXERU_PLUGIN_PATH
*
* E:\OpenServer\domains\my-domain.com\wp-content\plugins\exchange-rate-uan\exchange-rate-uan.php
*/
if ( ! defined( 'MXERU_PLUGIN_PATH' ) ) {

	define( 'MXERU_PLUGIN_PATH', __FILE__ );

}

/*
* Define MXERU_PLUGIN_URL
*
* Return http://my-domain.com/wp-content/plugins/exchange-rate-uan/
*/
if ( ! defined( 'MXERU_PLUGIN_URL' ) ) {

	define( 'MXERU_PLUGIN_URL', plugins_url( '/', __FILE__ ) );

}

/*
* Define MXERU_PLUGN_BASE_NAME
*
* 	Return exchange-rate-uan/exchange-rate-uan.php
*/
if ( ! defined( 'MXERU_PLUGN_BASE_NAME' ) ) {

	define( 'MXERU_PLUGN_BASE_NAME', plugin_basename( __FILE__ ) );

}

/*
* Define MXERU_TABLE_SLUG
*/
if ( ! defined( 'MXERU_TABLE_SLUG' ) ) {

	define( 'MXERU_TABLE_SLUG', 'mxeru_table_slug' );

}

/*
* Define MXERU_PLUGIN_ABS_PATH
* 
* E:\OpenServer\domains\my-domain.com\wp-content\plugins\exchange-rate-uan/
*/
if ( ! defined( 'MXERU_PLUGIN_ABS_PATH' ) ) {

	define( 'MXERU_PLUGIN_ABS_PATH', dirname( MXERU_PLUGIN_PATH ) . '/' );

}

/*
* Define MXERU_PLUGIN_VERSION
*/
if ( ! defined( 'MXERU_PLUGIN_VERSION' ) ) {

	// version
	define( 'MXERU_PLUGIN_VERSION', '2.0' ); // Must be replaced before production on for example '1.0'

}

/*
* Define MXERU_MAIN_MENU_SLUG
*/
if ( ! defined( 'MXERU_MAIN_MENU_SLUG' ) ) {

	// version
	define( 'MXERU_MAIN_MENU_SLUG', 'mxeru-exchange-rate-uan-menu' );

}

/**
 * activation|deactivation
 */
require_once plugin_dir_path( __FILE__ ) . 'install.php';

/*
* Registration hooks
*/
// Activation
register_activation_hook( __FILE__, array( 'MXERU_Basis_Plugin_Class', 'activate' ) );

// Deactivation
register_deactivation_hook( __FILE__, array( 'MXERU_Basis_Plugin_Class', 'deactivate' ) );


/*
* Include the main MXERUExchangeRateUAN class
*/
if ( ! class_exists( 'MXERUExchangeRateUAN' ) ) {

	require_once plugin_dir_path( __FILE__ ) . 'includes/final-class.php';

	/*
	* Translate plugin
	*/
	add_action( 'plugins_loaded', 'mxeru_translate' );

	function mxeru_translate()
	{

		load_plugin_textdomain( 'mxeru-domain', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

	}

	// add settings link
	add_filter( 'plugin_action_links', 'mxeru_plugin_action_links', 10, 2 );

	function mxeru_plugin_action_links( $actions, $plugin_file ){
		if( false === strpos( $plugin_file, basename(__FILE__) ) )
			return $actions;

		$link_string = get_admin_url() . 'admin.php?page=mxeru-exchange-rate-uan-menu';

		$settings_link = '<a href="' . $link_string . '">Настройки</a>';

		array_unshift( $actions, $settings_link ); 
		
		return $actions; 
	}

}