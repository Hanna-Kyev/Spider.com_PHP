<?php

class ReviewsController
{
    public function index()
    {
        render('reviews/index', ['title'=>"Class Рецензии"]);
    }
}

// render('reviews/index');

// include_once VIEWS.'/reviews/index.php';