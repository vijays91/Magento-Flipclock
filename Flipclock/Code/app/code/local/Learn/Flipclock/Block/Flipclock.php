<?php
/**
 * Integrate Flipclock
 *
 * @category   Flipclock
 * @package    Learn_Flipclock
 * @author     Vijayakumar
 *
 */
 
class Learn_Flipclock_Block_Flipclock extends Mage_Core_Block_Template
{
	public function getProductInfo($product_id) {
		return Mage::getModel('catalog/product')->load($product_id);
	}
}