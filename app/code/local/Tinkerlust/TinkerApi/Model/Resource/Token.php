<?php
class Tinkerlust_TinkerApi_Model_Resource_Token extends Mage_Core_Model_Resource_Db_Abstract
{
	protected function _construct()
	{
		$this->_init('tinkerapi/token','access_token');
		$this->_isPkAutoIncrement = false;
	}	
}
?>