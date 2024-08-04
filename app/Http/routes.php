<?php
Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/profile', ['middleware' => 'accType', function () {
    //
}]);
Route::resource('categories', 'CategoriesController');
Route::resource('products', 'ProductsController');
Route::resource('contact', 'ContactController');


