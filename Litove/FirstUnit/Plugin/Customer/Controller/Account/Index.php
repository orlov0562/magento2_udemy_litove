<?php
namespace Litove\FirstUnit\Plugin\Customer\Controller\Account;

class Index {

    protected $customerSession;

    /**
     * Index constructor.
     * @param \Magento\Customer\Model\Session $sessionSession
     */
    public function __construct(
        \Magento\Customer\Model\Session $sessionSession
    ){
        $this->customerSession = $sessionSession;
    }

    /**
     * @param \Magento\Customer\Controller\Account\Index $subject
     * @param $resultPage
     * @return mixed
     */
    public function afterExecute(
        \Magento\Customer\Controller\Account\Index $subject,
        $resultPage
    ) {

        $resultPage->getConfig()->getTitle()->set(
            __('Welcome back and have a nice day %1', $this->customerSession->getCustomer()->getName())
        );

        return $resultPage;
    }

}