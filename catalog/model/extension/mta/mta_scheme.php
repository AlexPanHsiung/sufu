<?php

class ModelExtensionMtaMtaScheme extends MtaScheme {

	protected function setScheme($s) {	
		return parent::setScheme($s, false);
	}
}
