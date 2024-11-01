<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXERU_FrontEnd_Main
{

	/*
	* MXERU_FrontEnd_Main constructor
	*/
	public function __construct()
	{

	}

	/*
	* Additional classes
	*/
	public function mxeru_additional_classes()
	{

		// enqueue_scripts class
		mxeru_require_class_file_frontend( 'enqueue-scripts.php' );

		MXERU_Enqueue_Scripts_Frontend::mxeru_register();

		// create shortcode
		mxeru_require_class_file_frontend( 'shortcode.php' );

		MXERU_Shortcode::create_shortcode();

	}

}

// Initialize
$initialize_admin_class = new MXERU_FrontEnd_Main();

// include classes
$initialize_admin_class->mxeru_additional_classes();