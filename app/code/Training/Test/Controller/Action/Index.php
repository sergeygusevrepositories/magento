<?php

namespace Trining\Test\Controller\Action;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $block = $this->_view->getLayout()->createBlock('Training\Test\Block\Test');
        $block->setTemplate('test.phtml');
        $this->getResponse()->appendBody($block->toHtml());
    }
}