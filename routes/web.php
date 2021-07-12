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
    $data = [
        "name" => "Jacopo",
        "teams" => [
            "Germania",
            "Spagna",
            "Italia",
            "Francia",
            "Unione Sovietica",
            "Cecoslovacchia",
            "Paesi Bassi",
            "Danimarca",
            "Grecia",
            "Portogallo"
        ]
    ];
    return view('home', $data);
});
