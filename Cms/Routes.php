<?php
/**
 * List routes
 *
 */


$this->router->add('home', '/', 'HomeController:index');
$this->router->add('product', '/product/12', 'HomeController:product');
$this->router->add('product_alias', '/product/all/(id:int)', 'ProductController:products');