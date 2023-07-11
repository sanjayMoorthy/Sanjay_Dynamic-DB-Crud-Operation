<?php

 require 'controller/controller.php';

class Router
{
    public $route = [];
    public $controller;

    public function __construct()
    {
        $this->controller = new userController();
    }

    public function get($uri, $action)
    {
        $this->route[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET'
        ];
    }

    public function post($uri, $action)
    {
        $this->route[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }

    public function put($uri, $action)
    {
        $this->route[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }

    public function delete($uri, $action)
    {
        $this->route[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }

    public function routes($uri, $method)
    {
        foreach ($this->route as $routers) {
            if ($routers['uri'] === $uri) {
                $action = $routers['action'];
                switch ($action) {
                    case 'homePage':
                        $this->controller->homePage();
                    break;
                    case 'addDbpage':
                        $this->controller->DatabasePage();
                    break;
                    case 'createDatabase':
                        $this->controller->creatingDatabase($_POST);
                    break;
                    case 'addTabblepage':
                        $this->controller->getingDatabase($_POST);
                    break;
                    case 'creatTable':
                        $this->controller->createTable($_POST);
                    break;
                    case 'addRowpage':
                        $this->controller->getTables($_POST);
                        break;
                        
                    break;
                }
            }
        }
    }
}





















