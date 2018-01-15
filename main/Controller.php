<?php

namespace main;

use components\RequestComponent;

class Controller
{
    public $layout = 'main';
    public $params = [];

    /**
     * @param string $view
     * @param array $params
     * @return mixed
     * @throws \Exception
     */
    public function render(string $view, array $params = [])
    {
        if (is_array($params)) {
            $this->params = $params;
        }

        //$layout = $this->layout;

        //Абсолютный путь к файлу с макетом
        $fileLayout = App::BASE_DIR . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . $this->layout . '.php';

        //Абсолютный путь к фрагменту
        $fileView = App::BASE_DIR . DIRECTORY_SEPARATOR . 'view' .DIRECTORY_SEPARATOR . RequestComponent::$controller . DIRECTORY_SEPARATOR . $view . '.php';

        if (file_exists($fileLayout) && file_exists($fileView)) {
            ob_start();
            require_once $fileLayout;
            $layoutCode = ob_get_clean();

            ob_start();
            require_once $fileView;
            $viewCode = ob_get_clean();

            $data = str_replace('<!--innerView-->', $viewCode, $layoutCode);
            return $data;
        } else {
            throw new \Exception('Layout не существует');
        }
    }
}