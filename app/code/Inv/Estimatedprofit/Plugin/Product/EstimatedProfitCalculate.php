<?php
    namespace Inv\Estimatedprofit\Plugin\Product;
    class EstimatedProfitCalculate
    {
        public function aroundExecute(\Magento\Catalog\Controller\Adminhtml\Product\Save $subject, \Closure $proceed)
        {
            // your custom code before the original execute function
            //$this->doSomethingBeforeExecute();

            // call the original execute function
            $returnValue = $proceed();

            // your custom code after the original execute function
            if ($returnValue) {
               // $this->doSomethingAfterExecute();
            }
            //$subject->getRequest()->setParam('existing_key', $newValue);
            return $returnValue;
        }

        public function beforeExecute(\Magento\Catalog\Controller\Adminhtml\Product\Save $subject){
            //$subject->getRequest()->setParam('existing_key', $newValue);
            // print_r($subject->getRequest()->getParams());exit;
            $products=$subject->getRequest()->getParam('product');
            //print_r($products);exit;

            $price=0;
            if($products['price']!='' && $products['price'] > 0){
                $price=$products['price'];
            }
            //print_r($products);exit;
            $cost=0;
            if($products['cost']!='' && $products['cost'] > 0){
                $cost=$products['cost'];
            }
            $qty=0;
            if($products['stock_data']['manage_stock']==1 && $products['stock_data']['qty']>0){
                $qty=$products['stock_data']['qty'];
            }

            if($cost>0){
                $estimated_profit=($price - $cost) * $qty;
            }else{
                $estimated_profit='';
            }
            $products['estimated_profit']= $estimated_profit;
            $subject->getRequest()->setPostValue('product',$products);

            // if(($products['price']!='' && $products['price'] > 0) || ($products['cost']!='' && $products['cost'] > 0)){
            //     $estimated_profit=($products['price']-$products['cost']) * $products['stock_data']['qty'];
            // }else{
            //     $estimated_profit='';
            // }
            //return $result;
        }
    }
?>