<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route :: get('/test', function () {
    $age = 25;
    $data = ['name' => 'Paco', 'age' => $age];
    return view('test', $data);
})->name('prueba');

Route :: get('/prueba2', function () {
    return view('pruebas/prueba2');
    //return redirect('/test');
    //return redirect()->route('prueba');
    //return to_route('prueba');
})->name('prueba2');

Route :: get('/prueba3', function () {
    return view('pruebas/prueba3');
})->name('prueba3');
