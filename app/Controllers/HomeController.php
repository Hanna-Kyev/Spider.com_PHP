<?php


class HomeController
{
    public function __construct()
    {        
        // render('home/index', ['title'=>"Home Page Class"]);
    }

    public function index(){
        render('home/index', ['title'=>"Home Page Class"]);
    }
}



// render('home/index');

// include_once VIEWS.'/home/index.php';