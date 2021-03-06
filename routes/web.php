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

Route::get("/", "HomeController@index")->name("home");

Route::get("/blog", function() {
    return view("portfolio-details");
})->name("blog");

Route::get("/blog2", function() {
    return view("blog2");
})->name("blog2");



Route::get("/blog3", function() {
    return view("blog3");
})->name("blog3");



Route::get('/portfolio',['as' => 'home.portfolio', 'uses' => 'HomeController@portfolio']);