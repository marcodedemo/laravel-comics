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

$links = [

    'Charaters',
    'Comics',
    'Movies',
    'Tv',
    'Games',
    'Collectibles',
    'Videos',
    'Fans',
    'News',
    'Shop',

];

Route::get('/', function () use ($links) {

    $data = [

        'links' => $links,
    ];


    return view('home', $data);
});
