<?php
namespace menu\Routing;

use menu\Controller\HomeController;

class HomeRouter extends AbstractRouter
{
    public static function route(?string $action = null)
    {
        (new HomeController())->index();
    }
}