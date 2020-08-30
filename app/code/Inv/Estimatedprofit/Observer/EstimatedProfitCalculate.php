<?php

namespace Inv\Estimatedprofit\Observer;

use Magento\Framework\Event\ObserverInterface;

class EstimatedProfitCalculate implements ObserverInterface
{
    protected $_options;

    public function __construct(
        \Magento\Catalog\Model\Product\Option $options
    ) {
        $this->_options = $options;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $product = $observer->getProduct();
        //$data = $observer->getcontroller()->getRequest()->getPostValue();
        //print_r($_POST);
        //$product->setEstimatedProfit(100);
        //$product->save();
        //exit;
        //print_r($product->getData());exit;
        /*
        $options = [];
        $options = [
            '0' => [
                    'sort_order' => '1',
                    'title' => 'option title',
                    'price_type' => 'fixed',
                    'price' => '5',
                    'type' => 'drop_down',
                    'is_require' => '0',
                    'values' => [
                        '0' =>[
                                'title' => 'A',
                                'price' => '50',
                                'price_type' => 'fixed',
                                'sku' => 'A',
                                'sort_order' => '0',
                                'is_delete' => '0',
                        ],
    
                        '1' => [
                                'title' => 'B',
                                'price' => '100',
                                'price_type' => 'fixed',
                                'sku' => 'B',
                                'sort_order' => '1',
                                'is_delete' => '0',
                        ],
    
                        '2' => [
                                'title' => 'C',
                                'price' => '150',
                                'price_type' => 'fixed',
                                'sku' => 'C',
                                'sort_order' => '2',
                                'is_delete' => '0',
                        ]
                    ]
                ]
            ];
        
        foreach ($options as $arrayOption) {
            $option = $this->_options
                            ->setProductId($product->getId())
                            ->setStoreId($product->getStoreId())
                            ->addData($arrayOption);
            $option->save();
            $product->addOption($option);
        }
        */        
    }
}