<?php

use Illuminate\Support\Facades\Route;

//rotas

Route::get('/', function(){
    return view(view: 'site.home');
})->name('site.home');

Route::get('/cursos', function(){
    return view(view: 'site.courses');
})->name('site.courses');

Route::get('/contato', function(){
    return view(view: 'site.contact');
})->name('site.contact');