<?php

namespace controller;

use main\Controller;
use model\ProductModel;

class ProductController extends Controller
{
    public function actionIndex()
    {
        $model = new ProductModel();
        $products = $model->getProducts(); //Если return

        $this->layout = 'main';
        try {
            echo $this->render('index', [
                'products' => $products
            ]);
        } catch (\Exception $exception) {

        }
    }
}