<?php

class Hodor_Hodor_Model_Translate extends Mage_Core_Model_Translate
{
    /**
     * Translate
     *
     * @param   array $args
     * @return  string
     */
	public function _getTranslatedString($text, $code)
	{
		return Mage::helper('hodor/hodor')->hodorize($text);
	}
}