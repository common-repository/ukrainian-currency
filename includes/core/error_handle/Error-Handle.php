<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
* Error Handle calss
*/
class MXERU_Error_Handle
{

	/**
	* Error name
	*/
	// public $mxeru_error_name = '';	

	/**
	* has error
	*/
	public $mxeru_isnt_error = true;

	public function __construct()
	{

	}
	
	public function mxeru_class_attributes_error( $class_name, $method )
	{

		// if class not exists display an error
		if( class_exists( $class_name ) ) {

			// check if method exists
			$class_inst = new $class_name();

			// if method not exists display an error
			if( !method_exists( $class_inst, $method ) ) {

				// notice of error
				$mxeru_error_notice = "The <b>\"{$class_name}\"</b> class doesn't contain the <b>\"{$method}\"</b> method.";

				// show an error
				$error_method_inst = new MXERU_Display_Error( $mxeru_error_notice );

				$error_method_inst->mxeru_show_error();

				$this->mxeru_isnt_error = $mxeru_error_notice;

			}

		} else {

			// notice of error
			$mxeru_error_notice = "The <b>\"{$class_name}\"</b> class not exists.";

			// show an error
			$error_class_inst = new MXERU_Display_Error( $mxeru_error_notice );

			$error_class_inst->mxeru_show_error();

			$this->mxeru_isnt_error = $mxeru_error_notice;

		}
	
		// 
		return $this->mxeru_isnt_error;

	}
	
}