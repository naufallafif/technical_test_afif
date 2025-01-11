<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $cards = [
        ['image' => 'img/city.jpg', 'category' => 'Recipe/Stories', 'title' => 'TRAVEL THE WORLD', 'date' => 'August 7, 2015'],
        ['image' => 'img/city.jpg', 'category' => 'Recipe/Stories', 'title' => 'TRAVEL THE WORLD', 'date' => 'August 7, 2015'],
        ['image' => 'img/city.jpg', 'category' => 'Recipe/Stories', 'title' => 'TRAVEL THE WORLD', 'date' => 'August 7, 2015'],
        ['image' => 'img/city.jpg', 'category' => 'Recipe/Stories', 'title' => 'TRAVEL THE WORLD', 'date' => 'August 7, 2015'],
        ['image' => 'img/city.jpg', 'category' => 'Recipe/Stories', 'title' => 'TRAVEL THE WORLD', 'date' => 'August 7, 2015'],
        ['image' => 'img/city.jpg', 'category' => 'Recipe/Stories', 'title' => 'TRAVEL THE WORLD', 'date' => 'August 7, 2015'],
    ];
    $title = "Home";
    return view('home', compact('cards','title'));
});

Route::get('/feat', function(){
    $title = "Feature";
    return view ('featur', compact('title'));
});
