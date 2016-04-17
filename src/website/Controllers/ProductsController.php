<?php
namespace SSENSE\HiringTest\Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use SSENSE\HiringTest\Models\Products;

class ProductsController
{
    /**
     * Display the CA Products
     * 
     * @param Application $app
     * @param Request $request 
     */
    public function caProductsAction(Application $app, Request $request)
    {
        
        $parameters = array(
            'limit'        => $request->get('limit'),
            'page'         => $request->get('page'),
        );
        
        $products = new Products($app);
        $listOfProducts = $products->getCanadianProducts($parameters);
        
        // Render the page
        return $app['twig']->render('products/caproducts.html', ['products' => $listOfProducts]);
    }
}
