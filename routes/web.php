<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Product;

Route::get('/home', 'PageController@index');

Route::get('/createproduct', function () {
    $post = Product::create([
        'category' => 'Shirt/Polo',
        'product_name' => 'Revolt Factory ',
        'product_detail' => 'this is t-shirt with best quality materials',
        'product_photo' => 'rvlt.jpg'
    ]);

    return "Data berhasil ditambah.";
});

Route::get('/showproduct', function () {
    $post = Product::all();

    return $post;
});

// Route::get('/asuraimucok', fucction () {
    
// });

Route::resource('/feedback', 'FeedbackController');