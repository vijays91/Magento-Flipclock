<?php
/**
 * Integrate Flipclock
 *
 * @category   Flipclock
 * @package    Learn_Flipclock
 * @author     Vijayakumar
 *
 */

/** $this = Mage_Catalog_Model_Resource_Setup **/

$installer = $this;
$installer->startSetup();

$installer->addAttribute('catalog_product', 'flipclock_end_date', array(
	'backend'					=> 'flipclock/entity_attribute_backend_datetime',
	'type'						=> 'datetime',
	'label'						=> 'FlipClock End Date and Time',
	'input'						=> 'datetime',
	'required'					=> true,
	'frontend_class'			=> ' required_entry input-text ',
	'visible'					=> false,
	'searchable'				=> false,
	'filterable'				=> false,
	'visible_on_front'			=> false,
	'sort_order'				=> 2000,
));
$installer->addAttributeToSet('catalog_product', 'Default', 'General', 'flipclock_end_date', 1000);

$installer->addAttribute('catalog_product', 'flipclock_start_date', array(
	'backend'					=> 'flipclock/entity_attribute_backend_datetime',
	'type'						=> 'datetime',
	'label'						=> 'FlipClock Start Date and Time',
	'input'						=> 'datetime',
	'required'					=> true,
	'frontend_class'			=> ' required_entry input-text ',
	'visible'					=> false,
	'searchable'				=> false,
	'filterable'				=> false,
	'visible_on_front'			=> false,
	'sort_order'				=> 1800,
));
$installer->addAttributeToSet('catalog_product', 'Default', 'General', 'flipclock_start_date', 1000);

$installer->addAttribute('catalog_product', 'flipclock_special_title', array(
		'backend'				=> '',
		'frontend'				=> '',
		'label'					=> 'Flipclock Special Title',
		'note'					=> 'Flipclock Special Title',
		'input'					=> 'text',
		'type' 					=> 'text',
		'frontend_class'		=> ' required_entry input-text ',
		'source'				=> '',
		'global'				=> Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
		'visible' 				=> false, // 'is_visible'			=> false, 
		'required'				=> true,
		'user_defined'			=> true,
		'visible_on_front'		=> false,
		'sort_order'			=> 1500,
		'group'					=> '',
	)
);
$installer->addAttributeToSet('catalog_product', 'Default', 'General', 'flipclock_special_title', 1000);
$data =  array(
		'backend'				=> '',
		'frontend'				=> '',
		'label'					=> 'Flipclock Enable',
		'note'					=> 'Flipclock Enable',
		'input'					=> 'select',
		'type' 					=> 'int',
		'frontend_class'		=> ' required_entry select ',
		'global'				=> Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
		'visible' 				=> false, // 'is_visible'			=> false, 
		'required'				=> true,
		'user_defined'			=> true,
		'visible_on_front'		=> false,
		'sort_order'			=> 1000,
		'group'					=> '',
		'source'				=> 'eav/entity_attribute_source_boolean',
	);
$installer->addAttribute('catalog_product','flipclock_enable', $data);
$installer->addAttributeToSet('catalog_product', 'Default', 'General', 'flipclock_enable', 1000);

//Default = attribute set, Product Flasher = attribute group (Like General, Price)
/*-
	$entityTypeId = Mage::getModel('catalog/product')->getResource()->getEntityType()->getId();
	$attributeSetId = $this->getAttributeSetId($entityTypeId, 'New Attr Set');
	$this->addAttributeToSet($entityTypeId, $attributeSetId, 'General', 'new_attr', 10);
-*/
$installer->endSetup();