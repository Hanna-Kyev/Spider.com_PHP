<?php

return [
    ''=>'HomeController@index',
    'bookstore'=>'BookstoreController@index',
    'reviews'=>'ReviewsController@index',
    'contacts'=>'ContactsController@index',
    'config'=>'ConfigController@index',
    'admin'=>'Admin\DashboardController@index',
    'admin/categories'=>'Admin\CategoryController@index',
    'admin/categories/create'=>'Admin\CategoryController@create',
    'admin/categories/store'=>'Admin\CategoryController@store',

    '404'=>'ErrorController@index'     
];