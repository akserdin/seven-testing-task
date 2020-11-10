<?php


namespace Site;


class Router
{
    const routes = ['get', 'post'];

    private $currentRoute;

    /** @var Controller */
    private $controller;

    public function __construct($uri)
    {
        $this->controller = new User();

        $segments = array_values(array_filter(explode('/', $uri)));

        if (count($segments) > 1) {
            $this->controller->notFoundAction();
        }

        $currentRoute = $segments[0];

        if (! $currentRoute || ! in_array($currentRoute, self::routes)) {
            $this->controller->notFoundAction();
        }

        $this->currentRoute = $currentRoute;
    }

    public function action()
    {
        $this->currentRoute .= 'Action';
        $this->controller->{$this->currentRoute}();
    }
}
