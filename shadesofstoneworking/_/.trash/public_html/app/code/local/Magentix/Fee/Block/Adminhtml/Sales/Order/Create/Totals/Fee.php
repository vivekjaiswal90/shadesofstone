<?php
session_start();
/**
 * Created by Magentix
 * Based on Module from "Excellence Technologies" (excellencetechnologies.in)
 *
 * @category   Magentix
 * @package    Magentix_Fee
 * @author     Matthieu Vion (http://www.magentix.fr)
 * @license    This work is free software, you can redistribute it and/or modify it
 */

class Magentix_Fee_Block_Adminhtml_Sales_Order_Create_Totals_Fee extends Mage_Adminhtml_Block_Sales_Order_Create_Totals_Default
{

	function __construct() {
      echo $sub=Mage::getSingleton('checkout/session')->getQuote()->getSubtotal();
		$_SESSION['subtotal']=$sub; 
   }
    /**
     * Use your own template if necessary
     * See "sales/order/create/totals/default.phtml" for model
     */
    // protected $_template = 'fee/sales/order/create/totals/fee.phtml';
}