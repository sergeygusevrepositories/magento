<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 19.05.17
 * Time: 22:46
 */

namespace Training\Test\Controller\Block;


class Text extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $block = $this->_view->getLayout()->createBlock('Magento\Framework\View\Element\Text');
        $block->setText("Hello, World from text block!");
        $this->getResponse()->appendBody($block->toHtml());
    }
}