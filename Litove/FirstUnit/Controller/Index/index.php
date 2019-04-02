<?php

namespace Litove\FirstUnit\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Framework\App\Action\Action {

    protected $resultPageFactory;

    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        // 1) Call default handler: view/frontend/layout/litove_index_index.xml
        // $resultPage = $this->resultPageFactory->create();
        // $resultPage->getConfig()->getTitle()->set('Page title that set in controller');
        // return $resultPage;

        // --------------------------------------------------

        // 2) Call custom handler
        // $resultPage = $this->resultPageFactory->create();
        // $resultPage->addHandle('litove_index_temp');
        // return $resultPage;

        // --------------------------------------------------

        // 3) Manually render using block layout and template
        // renders block only
        //$html = $this->_view->getLayout()->createBlock(
        //    \Litove\FirstUnit\Block\Index::class
        //)->setTemplate('index.phtml')->toHtml();
        //echo $html;
        //exit;

        // --------------------------------------------------

        // 4) Render block from CMS
        //$blockContent = $this->_view->getLayout()
        //    ->createBlock('Magento\Cms\Block\Block')
        //    ->setBlockId('fb')
        //    ->toHtml();
        //echo $blockContent;
        // --------------------------------------------------

        // 5) Create dynamic block and append it to layout
        // (load content of static block directly)
        // $resultPage = $this->resultPageFactory->create();
        // $resultPage->getConfig()->getTitle()->prepend(__('heading'));
        // $block = $resultPage->getLayout()
        //    ->createBlock('\Litove\FirstUnit\Block\Index')
        //    //->setTemplate('Litove_firstUnit::index.phtml')
        //    ->toHtml()
        //;
        //$this->getResponse()->setBody($block);

        // --------------------------------------------------

        // 6) Same approach as in Magenot 1
        $this->_view->loadLayout();
        $this->_view->renderLayout();

        // -----
        // Duplicate output if caled after
        // loadLayout and renderLayout
        // due to ouput schema
        // $resultPage = $this->resultPageFactory->create();
        // $resultPage->getConfig()->getTitle()->set('Page title that set in controller');
        // return $resultPage;

        // --------------------------------------------------

        /*
        $eventData = 'Testing';
        $this->_eventManager->dispatch('my_module_event_after', [
            'myEventData' => $eventData,
        ]);
        */
    }
}