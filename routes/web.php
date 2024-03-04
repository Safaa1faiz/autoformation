<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/blog', function (Request $request) {
//     return [

//         "name" => $request ->all(),
//         // "name" => $request ->url(),
//         // "name" => $request ->path(),
//         "article" => "Article 1"
//     ];
// });


Route::get('/blog', function (Request $request) {
    return [
        "name" => $request -> input('name', 'Safaa faiz')
    ];
});


Route::get('/blog/{slug}-{id}', function(string $slug, string $id) {
    return [
        "slug" => $slug,
         "id"  => $id

    ];
});


