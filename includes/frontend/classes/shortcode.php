<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXERU_Shortcode
{

	/*
	* MXERU_Shortcode
	*/
	public function __construct()
	{

	}

	/*
	* Create shortcode
	*/
	public static function create_shortcode()
	{
		
		add_shortcode( 'mx_currency_exchange_box', function( $atts ) {

			ob_start();
			
			?>

			<div id="mxCurrencyExCreateBox" data-currencies="<?php echo $atts['data-currencies']; ?>" data-color="<?php echo $atts['data-color']; ?>" data-maxwidth="<?php echo $atts['data-maxwidth']; ?>" data-lang="<?php echo $atts['data-lang']; ?>"></div>

			<?php return ob_get_clean();

		} );

	}
	
}