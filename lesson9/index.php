<?php
require_once('warehouse/Product.php');
require_once('shop/Product.php');
$shopProduct = new \App\Shop\Product();
$warehouseProduct = new \App\Warehouse\Product();

echo $shopProduct->getInfor() . "<br>";
echo $warehouseProduct->getInfor() . "<br>";
echo "<hr>";

use App\Shop\Product;
use App\Warehouse\Product as WarehouseProduct;

$product1 = new Product();
$product2 = new WarehouseProduct();

echo $product1->getInfor() . "<br>";
echo $product2->getInfor() . "<br>";
