<?php

class NVG_News_Block_Adminhtml_News_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('nvgnews/news')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {

        $helper = Mage::helper('nvgnews');

        $this->addColumn('news_id', array(
            'header' => $helper->__('News ID'),
            'index' => 'news_id'
        ));

        $this->addColumn('title', array(
            'header' => $helper->__('Title'),
            'index' => 'title',
            'type' => 'text',
        ));

        $this->addColumn('date', array(
            'header' => $helper->__('Created'),
            'index' => 'date',
            'type' => 'date',
        ));

        return parent::_prepareColumns();
    }

}

