<?php

class Pronamic_WP_Pay_Gateways_Rabobank_IDealAdvancedV3_Integration {
	public function __construct() {
		$this->id = 'rabobank-ideal-professional-v3';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvancedV3_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvancedV3_Config';
	}

	public function get_settings_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvancedV3_Settings';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvancedV3_Gateway';
	}
}
