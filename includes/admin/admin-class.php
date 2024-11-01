<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXERU_Admin_Main
{

	// list of model names used in the plugin
	public $models_collection = [
		'MXERU_Main_Page_Model'
	];

	/*
	* MXERU_Admin_Main constructor
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
		mxeru_require_class_file_admin( 'enqueue-scripts.php' );

		MXERU_Enqueue_Scripts::mxpctyw_register();
		
	}

	/*
	* Models Connection
	*/
	public function mxeru_models_collection()
	{

		// require model file
		foreach ( $this->models_collection as $model ) {
			
			mxeru_use_model( $model );

		}		

	}

	/**
	* registration ajax actions
	*/
	public function mxeru_registration_ajax_actions()
	{

	}

	/*
	* Routes collection
	*/
	public function mxeru_routes_collection()
	{

		// main menu item
		MXERU_Route::mxeru_get( 'MXERU_Main_Page_Controller', 'index', '', [
			'page_title' => 'Обмен Валют',
			'menu_title' => 'Обмен Валют'
		] );

	}

}

// Initialize
$initialize_admin_class = new MXERU_Admin_Main();

// include classes
$initialize_admin_class->mxeru_additional_classes();

// include models
$initialize_admin_class->mxeru_models_collection();

// ajax requests
$initialize_admin_class->mxeru_registration_ajax_actions();

// include controllers
$initialize_admin_class->mxeru_routes_collection();