<?php

namespace menu\Controller;



class UserController extends AbstractController
{

    /**
     * @return void
     */
    public function index()
    {
        $this->render('home/index');
    }


}