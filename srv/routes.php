<?php
use Caetsu\Core\Request;
/**
 * Routes Register
 * 
 * @author Ricardo Lapa (ricardo.j.lapa@gmail.com)
 */
$router->post("/challenge/api/getproducts", "Products@index");

// example for specific item by id
$router->post(sprintf("/challenge/api/getproducts/%s", Request::param()), "Products@getItem");



