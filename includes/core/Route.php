<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// require Route-Registrar.php
require_once MXERU_PLUGIN_ABS_PATH . 'includes/core/Route-Registrar.php';

/*
* Routes class
*/
class MXERU_Route
{

	public function __construct()
	{
		// ...
	}
	
	public static function mxeru_get( ...$args )
	{

		return new MXERU_Route_Registrar( ...$args );

	}
	
}