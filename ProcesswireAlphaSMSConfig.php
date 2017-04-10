<?php namespace ProcessWire;

/**
 *
 * ProcessWire 3.x, Copyright 2016 by Ryan Cramer
 * https://processwire.com
 *
 */

class ProcesswireAlphaSMSConfig extends ModuleConfig {
	public function __construct() {
		$this->add(array(
			array(
				'name' => 'login',
				'label' => $this->_( 'Login' ),
				'type' => 'text',
				'required' => false,
				'value' => '',
			),
			array(
				'name' => 'password',
				'label' => $this->_( 'Password' ),
				'type' => 'text',
				'required' => false,
				'value' => '',
			),
			array(
				'name' => 'key',
				'label' => $this->_( 'API Key' ),
				'type' => 'text',
				'required' => true,
				'value' => '',
			),
			array(
				'name' => 'sender',
				'label' => $this->_( 'Sender name (Maximum 11 characters)' ),
				'type' => 'text',
				'maxlength' => '11',
				'required' => true,
				'value' => '',
			),
		));
	}

}
