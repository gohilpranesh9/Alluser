<?php 
namespace Inv\Estimatedprofit\Ui\DataProvider\Product;
class AddEstimatedProfit1Field implements \Magento\Ui\DataProvider\AddFieldToCollectionInterface 
{
    public function addField(\Magento\Framework\Data\Collection $collection, $field, $alias = null){
    	//echo $collection->getSelect();exit;
    	// $sql=$collection->getSelect()->__toString();
    	// $logger = \Magento\Framework\App\ObjectManager::getInstance()->get(\Psr\Log\LoggerInterface::class);
    	// $logger->info("sql = ".$sql);
     //    $collection->joinField('estimated_profit1','cataloginventory_stock_item','(qty*price) as estimated_profit1','product_id=entity_id',null,'left');
        // $collection->->join(
        //     ['estimated_profit1'=>'cataloginventory_stock_item'],
        //     "main_table.entity_id = estimated_profit1.product_id",
        //     [
        //         'estimated_profit1' => '(estimated_profit1.qty*500)'
        //     ]
        // );
    }
}