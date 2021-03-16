<?php

class BookstoreController
{
    public function index()
    {
        render('bookstore/index', ['title'=>"Коллекции Class"]);
    }
}



// render('bookstore/index', ['title'=>"Категории"]);


// include_once VIEWS.'/bookstore/index.php';