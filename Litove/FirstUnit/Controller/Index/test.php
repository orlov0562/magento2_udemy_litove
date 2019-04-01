<?php

namespace Litove\FirstUnit\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action {
    public function execute()
    {
        //phpinfo(); exit;
        echo 'Test';
        var_dump(['a'=>123]);
        exit;
    }
}