<?php


namespace controller;

use main\Controller;

class IndexController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'main';
        try {
            echo $this->render('index');
        } catch (\Exception $exception) {

        }
    }
}