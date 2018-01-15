<?php

namespace components;

class DbComponent implements ComponentInterface
{

    protected $username = 'root';
    protected $password = 'root';

 public function __construct()
 {

 }

 public function __destruct()
 {

 }

 public function execute(string $sql)
 {
     //Делайте запрос к БД
 }

 public function init()
 {

 }
}