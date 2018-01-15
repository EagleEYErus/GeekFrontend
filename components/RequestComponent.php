<?php

namespace components;


use Exception;

class RequestComponent implements ComponentInterface
{

    public static $controller = 'index';
    public $action = 'index';

    public $nameSpaceController = '\controller';

    public $params = []; //TODO: Получить из массива пары параметров

    /**
     * @throws Exception
     */
    public function init()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $path = explode('/', $uri);

        if (count($path) == 2) {
            if (!empty($path[1])) {
                self::$controller = $path[1];
            }
        } else if (count($path) == 3) {
            if (!empty($path[1])) {
                self::$controller = $path[1];
            }
            if (!empty($path[2])) {
                $this->action = $path[2];
            }
        }

        $this->callController();
    }

    /**
     * @throws Exception
     */
    protected function callController()
    {
        //Полный путь
        $classController = $this->nameSpaceController . '\\' . ucwords(self::$controller) . 'Controller';

        $actionMethod = 'action' . ucwords($this->action);

        if (class_exists($classController)) {
            $controllerInstance = new $classController;
        } else {
            throw new Exception('Класса контроллера не существует', 0);
        }

        if (method_exists($controllerInstance, $actionMethod)) {
            call_user_func_array([$controllerInstance, $actionMethod], []);
        } else {
            throw new Exception('Действия контроллера не существует', 1);
        }
    }
}