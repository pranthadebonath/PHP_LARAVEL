<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/post', function () {
    return view('post');
});
Route::get('/test', function () {
    return view('post');
});
Route::redirect('/post','/test');

Route::fallback(function()
{
    return "<h1>Page Not Found.</h1>";
});