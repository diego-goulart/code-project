<?php

Route::get('/', function () {
    return view('welcome');
});


Route::resource('client', 'ClientController', [
    'except' => [
        'create',
        'edit',
    ],
]);