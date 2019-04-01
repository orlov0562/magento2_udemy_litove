<?php

namespace Litove\FirstUnit\Controller\Dummy;

class Index extends \Magento\Framework\App\Action\Action {
    public function execute()
    {
        echo 'Dummy Index';
        exit;
    }
}