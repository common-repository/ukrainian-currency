<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

final class MXERUExchangeRateUAN
{

	/*
	* MXERUExchangeRateUAN constructor
	*/
	public function __construct()
	{

		// ...

	}

	/*
	* Include required core files
	*/
	public function mxeru_include()
	{		

		// helpers
		require_once MXERU_PLUGIN_ABS_PATH . 'includes/core/helpers.php';

		// cathing errors
		require_once MXERU_PLUGIN_ABS_PATH . 'includes/core/Catching-Errors.php';

		// Route
		require_once MXERU_PLUGIN_ABS_PATH . 'includes/core/Route.php';

		// Models
		require_once MXERU_PLUGIN_ABS_PATH . 'includes/core/Model.php';

		// Views
		require_once MXERU_PLUGIN_ABS_PATH . 'includes/core/View.php';

		// Controllers
		require_once MXERU_PLUGIN_ABS_PATH . 'includes/core/Controller.php';

	}

	/*
	* Include Admin Path
	*/
	public function mxeru_include_admin_path()
	{

		// Part of the Administrator
		require_once MXERU_PLUGIN_ABS_PATH . 'includes/admin/admin-class.php';
	
	}

	/*
	* Include Frontend Path
	*/
	public function mxeru_include_frontend_path()
	{

		// Part of the Frontend
		require_once MXERU_PLUGIN_ABS_PATH . 'includes/frontend/frontend-main.php';
	
	}

}

// create a new instance of final class
$final_class_instance = new MXERUExchangeRateUAN();

// run core files
$final_class_instance->mxeru_include();

// include admin parth
$final_class_instance->mxeru_include_admin_path();

// include frontend parth
$final_class_instance->mxeru_include_frontend_path();
