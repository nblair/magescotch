<?php
/**
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Integration\Controller\Adminhtml\Integration;

class Grid extends \Magento\Integration\Controller\Adminhtml\Integration
{
    /**
     * AJAX integrations grid.
     *
     * @return void
     */
    public function executeInternal()
    {
        $this->_view->loadLayout(false);
        $this->_view->renderLayout();
    }
}
