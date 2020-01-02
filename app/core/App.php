<?php
namespace Core;

use Exception;

class App
{
    private $controller = 'Home';
    private $method = 'index';
    private $params = [];

    public function __construct()
    {
        $arrUrl = $this->parseUrl();
        $this->setController($arrUrl);
        $this->setMethod($arrUrl);
        $this->setParams($arrUrl);
    }

    public function parseUrl(): array
    {
        return explode('/', trim(strtolower($_SERVER['REQUEST_URI']), '/'));
    }

    public function setController(array $url)
    {
        $isExistClass = file_exists(
            'app/controller/' . ucfirst($url[0]) . 'Controller.php'
        );

        if ($url && !is_null($url[0]) && !empty($url[0]) && $isExistClass) {
            $this->controller = ucfirst($url[0]);
        }

        $class = sprintf('Controller\%s', $this->controller . 'Controller');
        $this->controller = new $class();
    }

    public function setMethod(array $url)
    {
        $isExistMethod = method_exists($this->controller, $url[1]);

        if ($url && !is_null($url[1]) && !empty($url[1]) && $isExistMethod) {
            $this->method = $url[1];
        }
    }

    public function setParams(array $url)
    {
        if (count($url) > 2) {
            $this->params = array_slice($url, 2);
        }
    }

    public function run()
    {
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
}
