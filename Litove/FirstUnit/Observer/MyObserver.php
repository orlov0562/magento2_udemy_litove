<?php
namespace Litove\FirstUnit\Observer;

use Magento\Framework\Event\ObserverInterface;

class MyObserver implements ObserverInterface
{
    public function __construct(){
        //
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        // the dispatch is located here:
        // Litove/FirstUnit/Controller/Index/index.php

        $myEventData = $observer->getData('myEventData');
        var_dump($myEventData);
        exit;
    }
}
