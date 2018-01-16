<?php

namespace model;

use main\App;
use main\Model;

class ProductModel extends Model
{
    public function getProducts(): array
    {
        $result = App::$app->db->execute("SELECT * FROM products");
        return $result;
    }
}