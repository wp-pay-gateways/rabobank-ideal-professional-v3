<?php

/**
 * Title: Rabobank - iDEAL Professional - v3 config
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_Rabobank_IDealAdvancedV3_Config extends Pronamic_WP_Pay_Gateways_IDealAdvancedV3_Config {
	public function get_payment_server_url() {
		return 'https://ideal.rabobank.nl/ideal/iDEALv3';
	}

	public function get_certificates() {
		return array(
			dirname( __FILE__ ) . '/../certificates/rabobank.cer',
		);
	}
}