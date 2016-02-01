<?php

/**
 * Title: Rabobank - iDEAL Professional - v3 integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_Rabobank_IDealAdvancedV3_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvancedV3_AbstractIntegration {
	public function __construct() {
		$this->id       = 'rabobank-ideal-professional-v3';
		$this->name     = 'Rabobank - iDEAL Professional - v3';
		$this->provider = 'rabobank';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_Rabobank_IDealAdvancedV3_ConfigFactory';
	}
}
