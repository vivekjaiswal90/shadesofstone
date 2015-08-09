<?php
/**
 * Created by Magentix
 * Based on Module from "Excellence Technologies" (excellencetechnologies.in)
 *
 * @category   Magentix
 * @package    Magentix_Fee
 * @author     Matthieu Vion (http://www.magentix.fr)
 * @license    This work is free software, you can redistribute it and/or modify it
 */

$installer = $this;

$installer->startSetup();

$installer->run("
    ALTER TABLE  `".$this->getTable('sales/order')."` ADD  `fee_amount_refunded1` DECIMAL( 10, 2 ) NOT NULL;
    ALTER TABLE  `".$this->getTable('sales/order')."` ADD  `base_fee_amount_refunded1` DECIMAL( 10, 2 ) NOT NULL;
    ALTER TABLE  `".$this->getTable('sales/creditmemo')."` ADD  `fee_amount1` DECIMAL( 10, 2 ) NOT NULL;
    ALTER TABLE  `".$this->getTable('sales/creditmemo')."` ADD  `base_fee_amount1` DECIMAL( 10, 2 ) NOT NULL;
");

$installer->endSetup();