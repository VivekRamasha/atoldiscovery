<?php

namespace Altodiscovery\Customer\Controller\Account;

use Magento\Framework\Controller\ResultFactory;

class Currency extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}