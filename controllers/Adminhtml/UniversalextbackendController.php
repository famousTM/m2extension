<?php
class Universal_UniversalExt_Adminhtml_UniversalextbackendController extends Mage_Adminhtml_Controller_Action
{

	protected function _isAllowed()
	{
		//return Mage::getSingleton('admin/session')->isAllowed('universalext/universalextbackend');
		return true;
	}

	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Universal"));
	   $this->renderLayout();
    }
}