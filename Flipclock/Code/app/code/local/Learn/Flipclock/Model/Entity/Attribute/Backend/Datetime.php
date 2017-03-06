<?php
/**
 * Integrate Flipclock
 *
 * @category   Flipclock
 * @package    Learn_Flipclock
 * @author     Vijayakumar
 *
 */

class Learn_Flipclock_Model_Entity_Attribute_Backend_Datetime extends Mage_Eav_Model_Entity_Attribute_Backend_Datetime
{

    public function formatDate($date)
    {
        if (empty($date)) {
            return null;
        }
        $date = Mage::app()->getLocale()->date($date,
            Mage::app()->getLocale()->getDateTimeFormat(Mage_Core_Model_Locale::FORMAT_TYPE_SHORT),
            null, false
        );
        return $date->toString(Varien_Date::DATETIME_INTERNAL_FORMAT);
    }
}