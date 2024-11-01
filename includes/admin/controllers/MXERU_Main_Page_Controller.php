<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXERU_Main_Page_Controller extends MXERU_Controller
{
	
	public function index()
	{

		return new MXERU_View( 'main-page' );

	}

}