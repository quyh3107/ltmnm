<?php
if ( ! defined( 'ABSPATH' ) ) { exit;}
/*
Plugin Name: Ni WooCommerce Admin Order Columns
Description: Ni WooCommerce Admin Order Columns add the order product columns in admin order list.
Author: anzia
Version: 1.6.0
Author URI: http://naziinfotech.com/
Plugin URI: https://wordpress.org/plugins/ni-woocommerce-admin-order-columns/
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/agpl-3.0.html
Requires at least: 4.7
Tested up to: 6.4.1
WC requires at least: 3.0.0
WC tested up to: 8.3.1 
Last Updated Date: 23-November-2023
Requires PHP: 7.0
*/
if( !class_exists( 'Ni_WooCommerce_Admin_Order_Columns' ) ) {
	class Ni_WooCommerce_Admin_Order_Columns{
		public function __construct(){	
			
			include_once('includes/ni-order-columns-init.php'); 
			$ni_order_columns_init = new Ni_Order_Columns_Init();
	
			add_action( 'before_woocommerce_init',  array(&$this,'before_woocommerce_init') );
		}
		 function before_woocommerce_init(){
			if ( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
				\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'custom_order_tables', __FILE__, false );
			}	 
		 }
	}
	$obj = new Ni_WooCommerce_Admin_Order_Columns();
}
?>
