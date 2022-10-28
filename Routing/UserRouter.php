<?php

namespace menu\Routing;

use menu\Controller\ErrorController;
use menu\Controller\UserController;

class UserRouter extends AbstractRouter
{
    public static function route(?string $action = null)
    {
        $controller = new UserController();
        switch ($action) {
            case 'index':
                $controller->index();
                break;
            default:
                (new ErrorController())->error404($action);
        }
    }
}