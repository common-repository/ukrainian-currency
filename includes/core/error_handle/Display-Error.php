<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
* Error Handle calss
*/
class MXERU_Display_Error
{

	/**
	* Error notice
	*/
	public $mxeru_error_notice = '';

	public function __construct( $mxeru_error_notice )
	{

		$this->mxeru_error_notice = $mxeru_error_notice;

	}

	public function mxeru_show_error()
	{
		
		add_action( 'admin_notices', function() { ?>

			<div class="notice notice-error is-dismissible">

			    <p><?php echo $this->mxeru_error_notice; ?></p>
			    
			</div>
		    
		<?php } );

	}

}