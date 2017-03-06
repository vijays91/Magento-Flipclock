<?php
/**
 * Integrate Flipclock
 *
 * @category   Flipclock
 * @package    Learn_Flipclock
 * @author     Vijayakumar
 *
 */
 
class Learn_Flipclock_Helper_Data extends Mage_Core_Helper_Abstract
{
	const XML_PATH_FLIPCLOCK_ACTIVE					= 'flipclock/settings/flipclock_active';
	const XML_PATH_FLIPCLOCK_JQUERY					= 'flipclock/settings/flipclock_jquery';
	const XML_PATH_FLIPCLOCK_MAIN_TITLE_COLOR	 	= 'flipclock/settings/flipclock_main_title_color';
	const XML_PATH_FLIPCLOCK_LABEL_TITLE_COLOR 		= 'flipclock/settings/flipclock_label_title_color';
	const XML_PATH_FLIPCLOCK_DAY_COLOR	 			= 'flipclock/settings/flipclock_day_color';
	const XML_PATH_FLIPCLOCK_HOURS_COLOR	 		= 'flipclock/settings/flipclock_hours_color';
	const XML_PATH_FLIPCLOCK_MINUTES_COLOR			= 'flipclock/settings/flipclock_minutes_color';
	const XML_PATH_FLIPCLOCK_SECONDS_COLOR			= 'flipclock/settings/flipclock_seconds_color';
	const XML_PATH_FLIPCLOCK_DISPLAY_IN	 			= 'flipclock/settings/flipclock_display';

	private function conf($code, $store = null) {
        return Mage::getStoreConfig($code, $store);
    }
	public function flipclock_enable($store = null) {
		return $this->conf(self::XML_PATH_FLIPCLOCK_ACTIVE, $store);
	}
	public function flipclock_jquery($store = null) {
		return $this->conf(self::XML_PATH_FLIPCLOCK_JQUERY, $store);
	}
	public function flipclock_main_title_color($store = null) {
		return $this->conf(self::XML_PATH_FLIPCLOCK_MAIN_TITLE_COLOR, $store);
	}
	public function flipclock_label_title_color($store = null) {
		return $this->conf(self::XML_PATH_FLIPCLOCK_LABEL_TITLE_COLOR, $store);
	}
	public function flipclock_day_color($store = null) {
		return $this->conf(self::XML_PATH_FLIPCLOCK_DAY_COLOR, $store);
	}
	public function flipclock_hours_color($store = null) {
		return $this->conf(self::XML_PATH_FLIPCLOCK_HOURS_COLOR, $store);
	}
	public function flipclock_minutes_color($store = null) {
		return $this->conf(self::XML_PATH_FLIPCLOCK_MINUTES_COLOR, $store);
	}
	public function flipclock_seconds_color($store = null) {
		return $this->conf(self::XML_PATH_FLIPCLOCK_SECONDS_COLOR, $store);
	}
	public function flipclock_display($store = null) {
		return $this->conf(self::XML_PATH_FLIPCLOCK_DISPLAY_IN, $store);
	}
}