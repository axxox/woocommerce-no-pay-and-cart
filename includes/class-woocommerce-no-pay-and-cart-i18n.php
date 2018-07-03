<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/axxox
 * @since      1.0.0
 *
 * @package    Woocommerce_No_Pay_And_Cart
 * @subpackage Woocommerce_No_Pay_And_Cart/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Woocommerce_No_Pay_And_Cart
 * @subpackage Woocommerce_No_Pay_And_Cart/includes
 * @author     BiznesPort.pl <lukaszk@biznesport.pl>
 */
class Woocommerce_No_Pay_And_Cart_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'woocommerce-no-pay-and-cart',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
