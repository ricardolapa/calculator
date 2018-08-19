<?php namespace Caetsu\Controllers;

use Caetsu\Http\Api;
use Caetsu\Controllers\Controller;

/**
 * Products Controller
 * 
 * @author Ricardo Lapa (ricardo.j.lapa@gmail.com)
 */
class Products extends Controller
{
    public $products;

    public function index()
    {   
        try {
            $this->products = App::get('database')->selectAll("products", "Product");
            Api::response($this->products);
        } catch ( Exception $e ) {
            throw new Exception("Error Processing Request", 1);
        }
        return Api::response(["coiso"]);
    }

    public function getItem()
    {
        $id = Request::param();
        try {
            $this->product = App::get('database')->whereFrom("id", $id, "products", "Product");
            return Api::response($this->product);
        } catch ( Exception $e ) {
            throw new Exception("Error Processing Request", 1);
        }
    }
}
