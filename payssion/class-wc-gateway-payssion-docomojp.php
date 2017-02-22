<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once( 'class-wc-gateway-payssion.php' );

/**
 * Payssion 
 *
 * @class 		WC_Gateway_Payssion_DocomoJP
 * @extends		WC_Payment_Gateway
 * @version		1.0.1
 * @author 		Payssion
 */
class WC_Gateway_Payssion_DocomoJP extends WC_Gateway_Payssion {
	protected $pm_id = 'docomo_jp';
}