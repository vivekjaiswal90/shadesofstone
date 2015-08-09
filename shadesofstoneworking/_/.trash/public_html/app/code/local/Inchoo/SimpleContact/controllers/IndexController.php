<?php
 ob_start();
class Inchoo_SimpleContact_IndexController extends Mage_Core_Controller_Front_Action
{
	
	
    public function indexAction()
    {
        //Get current layout state
        $this->loadLayout();   
 
        $block = $this->getLayout()->createBlock(
            'Mage_Core_Block_Template',
            'inchoo.simple_contact',
            array(
                'template' => 'inchoo/simple_contact.phtml'
            )
        );
 
        $this->getLayout()->getBlock('content')->append($block);
        //$this->getLayout()->getBlock('right')->insert($block, 'catalog.compare.sidebar', true);
 
        $this->_initLayoutMessages('core/session');
 
        $this->renderLayout();
    }

    public function sendemailAction()
    {
		$ownername=Mage::getStoreConfig('trans_email/ident_general/name');
		$owneremail=Mage::getStoreConfig('trans_email/ident_general/email');
		//echo $owneremail;
        //Fetch submited params
        $params = $this->getRequest()->getParams();
			//echo  $params['urlnm'];
       $subject=$params['name']."->Make an Offer On->".$params['productname'];
		$text="Name : ".$params['name']."\nE-mail: ".$params['email']."\nPhone No: ".$params['phoneno']."\nProduct Name : ".$params['productname']."\nBid Price:".$params['BidPrice']."\nSF".$params['sf'];
        $mail = new Zend_Mail();
        $mail->setBodyText($text);
        $mail->setFrom($params['email'], $params['name']);
        $mail->addTo($owneremail, $ownername);
        $mail->setSubject($subject);
        try {
            $mail->send();
			Mage::getSingleton('customer/session')->addSuccess('Your inquiry was submitted and will be responded to as soon as possible. Thank you for contacting us.');
			echo("sucess");
			
        }        
        catch(Exception $ex) {
            Mage::getSingleton('core/session')->addError('Unable to send email. Sample of a custom notification error from.');
 
        }
			$url1=$params['urlnm'];
			echo $url1;
			$url1 = preg_replace('{/$}', '', $url1);
				echo($url1);
			$str = explode("/",$url1);
			
			print_r($str);
			  $str=  $str[count($str)-1];
			echo $str;
			
			
        //Redirect back to index action of (this) inchoo-simplecontact controller
       $this->_redirect($str);
    }
}
 ob_flush();
?>