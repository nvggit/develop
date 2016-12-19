<?php

class NVG_News_Block_News extends Mage_Core_Block_Template
{

    public function getNewsCollection()
    {
        $newsCollection = Mage::getModel('nvgnews/news')->getCollection();
        $newsCollection->setOrder('date', 'DESC');
        return $newsCollection;
    }

}

