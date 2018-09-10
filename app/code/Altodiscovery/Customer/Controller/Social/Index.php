<?php
/**
 * Created by PhpStorm.
 * User: ravi
 * Date: 8/9/18
 * Time: 7:18 PM
 */

namespace Altodiscovery\Customer\Controller\Social;


class Index extends \Magento\Framework\App\Action\Action {

    public function execute() {

        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }

}