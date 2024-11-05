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

Route::get('/IncludePractice', function () {
    return view('IncludePractice');
});

Route::get('/simple_page', function () {
    return view('simple_page');
}); 
Route::get('/contact', function () {
    return view('contact');
}); 

Route::get('/layouts/about', function () {
    return view('/layouts/about');
});

Route::get('/layouts/contact', function () {
    return view('/layouts/contact');
});

Route::get('/layouts/masterLayout', function () {
    return view('/layouts/masterLayout');
});

Route::get('/test', function () {
    return view('post');
});
Route::redirect('/post','/test');

Route::fallback(function()
{
    return "<h1>Page Not Found.</h1>";
});