<?php

class Pronamic_WP_Pay_Gateways_Rabobank_IDealAdvancedV3_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvancedV3_AbstractIntegration {
	public function __construct() {
		$this->id       = 'rabobank-ideal-professional-v3';
		$this->name     = 'Rabobank - iDEAL Professional - v3';
		$this->provider = 'rabobank';
	}
}
