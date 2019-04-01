<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Litove\FirstUnit\Block;


use Magento\Framework\View\Element\Template;

class Index extends \Magento\Framework\View\Element\Template
{
    /**
     * @var string
     */
    // template can be defined here OR via handle in layout file
    protected $_template = 'Litove_FirstUnit::index.phtml';

    public function someFunction()
    {
        return 'someFunctionName';
    }
}
