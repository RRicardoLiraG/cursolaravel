<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['nombre' => 'Roberto']);
})->name('home'); // nombre de la ruta

// Route::get('/hola', function () {
//     return route('hola');
// });

// Route::get('/suma', function () {
//     $x = 20;
//     $y = 30;
//     $suma = $x + $y;
//     return $suma;
// });

// rutas con parametros obligatorios

Route::get('/suma/{x}/{y}', function ($x, $y) {
    $suma = $x + $y;
    return 'La suma es: ' . $suma;
});

// Route::get('nombre/{name}', function ($name) {
//     return 'Mi nombre es: ' . $name;
// });

// rutas con parametros opcionales

// Route::get('nombre/{name?}', function ($name = 'Invitado') {
//     return 'Mi nombre es: ' . $name;
// });

// rutas con expresiones regulares

// Route::get('nombre/{name?}', function ($name = 'Invitado') {
//     return 'Mi nombre es: ' . $name;
// })->where('name', '[a-zA-Z]+');


// Route::get('/suma/{x}/{y}', function ($x, $y) {
//     $suma = $x + $y;
//     return 'La suma es: ' . $suma;
// })->where(['x' => '[0-9]+', 'y' => '[0-9]+']);

// Route::get('/verificar', function (Request $request) {
//     if($request->route()->named('verificar')) {
//         return 'Estás en la ruta verificar';
//     } else {
//         return 'No estás en la ruta verificar';
//     }
// })->name('verificar');

// Route::prefix('admin')->group(function () {
//     Route::get('/primero', function () {
//         return 'Primero';
//     })->name('admin.primero');
//     Route::get('/segundo', function () {
//         return 'Segundo';
//     })->name('admin.segundo');
// });



