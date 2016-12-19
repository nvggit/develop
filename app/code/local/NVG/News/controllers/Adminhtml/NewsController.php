<?php

class NVG_News_Adminhtml_NewsController extends Mage_Adminhtml_Controller_Action
{

    public function indexAction()
    {
        $this->loadLayout();
        $this->_setActiveMenu('nvgnews');

        $contentBlock = $this->getLayout()->createBlock('nvgnews/adminhtml_news');
        $this->_addContent($contentBlock);
        $this->renderLayout();
    }

}

