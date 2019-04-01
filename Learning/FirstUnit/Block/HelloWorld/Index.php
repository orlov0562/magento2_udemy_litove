<?php

namespace Learning\FirstUnit\Block\HelloWorld;

/**
 * Class Index
 * @package Learning\FirstUnit\Block\HelloWorld
 */
class Index extends \Magento\Framework\View\Element\Template
{
    /**
     * Index constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     */
    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\Phrase
     */
    public function getCurrentTimestampLabel()
    {
        return __('Current timestamp');
    }

    /**
     * @return string
     */
    public function getTimeActionUrl(){
        return $this->getUrl('*/*/time', ['_secure' => true]);
    }
}
