<?php
namespace Litove\FirstUnit\Observer;

use Magento\Framework\Event\ObserverInterface;

class ChangeCustomerGroupId implements ObserverInterface
{
    const CUSTOMER_GROUP_ID = 2;

    /**
     * @var \Magento\Customer\Api\CustomerRepositoryInterface
     */
    protected $_customerRepositoryInterface;

    /**
     * @param \Magento\Customer\Api\CustomerRepositoryInterface $customerRepositoryInterface
     * @codeCoverageIgnore
     */
    public function __construct(
        \Magento\Customer\Api\CustomerRepositoryInterface $customerRepositoryInterface
    ){
        $this->_customerRepositoryInterface = $customerRepositoryInterface;
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     * @throws \Magento\Framework\Exception\InputException
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\State\InputMismatchException
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $customer = $observer->getEvent()->getCustomer();

        if ($customer->getGroupId() == 1) {
            $customer->setGroupId(self::CUSTOMER_GROUP_ID);
            $this->_customerRepositoryInterface->save($customer);
        }
    }
}
