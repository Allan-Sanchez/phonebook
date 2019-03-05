<?php


Route::get('/', function () {
    return view('phonebook');
});

Route::get('/home', function () {
    return redirect('/');
})->where('name','[A-Za-z]+');

Route::get('/about', function () {
    return redirect('/');
})->where('name','[A-Za-z]+');


Route::resource('phonebook','PhonebookController');
