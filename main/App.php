<?php

namespace main;

use components\DbComponent;
use components\RequestComponent;

class App
{
    /** @var DbComponent */
    public $db;

    /** @var RequestComponent */
    public $request;

    //Базовая дирректория
    const BASE_DIR = __DIR__ . DIRECTORY_SEPARATOR . '..';

    /** @var App */
    public static $app;

    public static function initComponents(array $config = [])
    {
        self::$app->db = new DbComponent();
        self::$app->db->init();
        //Какие-то компоненты

        try {
            self::$app->request = new RequestComponent();
            self::$app->request->init();
        } catch (\Exception $exception) {
            exit;
        }
    }

    public static function run(array $config = []): App
    {
        if (!self::$app) {
            self::$app = new self();
            self::initComponents($config);
        }
        return self::$app;
    }
}