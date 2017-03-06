<?php
/**
 * Integrate Flipclock
 *
 * @category   Flipclock
 * @package    Learn_Flipclock
 * @author     Vijayakumar
 *
 */
 
class Learn_Flipclock_Model_Flipclock_Displaypage
{

	public function toOptionArray() {
		return array(
			array(
				'value' => 1,
				'label' => ("Product List Page"),
			),
			array(
				'value' => 2,
				'label' => ("Product View Page"),
			),
		);
	}
}