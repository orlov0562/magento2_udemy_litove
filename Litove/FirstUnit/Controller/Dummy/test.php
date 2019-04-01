<?php

namespace Litove\FirstUnit\Controller\Dummy;

class Test extends \Magento\Framework\App\Action\Action {
    public function execute()
    {
        echo 'Dummy Test';
        exit;
    }
}