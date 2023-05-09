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

$footerLinks = [

    [

        'title' => "dc comics",
        'links' =>[
            "Charaters",
            "Comics",
            "Movies",
            "TV",
            "Games",
            "Videos",
            "News"
        ]
    ],
    [

        'title'=> "shop",
        'links' => [
            "Shop DC",
            "Shop DC Collectibles",
            
        ]
    
    ],
    [
        'title'=>"DC",
        'links' => [
            "Terms Of Use",
            "Privacy policy(New)",
            "Ad Choises",
            "Advertising",
            "Jobs",
            "Subscriptions",
            "Talent Workshops",
            "CPSC Certificates",
            "Ratings",
            "Show Help",
            "Contact Us",


        ]
    ],
    [
        'title'=>"Sites",
        'links' => [
            "DC",
            "MAD Magazine",
            "DC Kids",
            "DC Universe",
            "DC Power Visa",
        ]
    ]
];



Route::get('/', function () use ($links, $footerLinks) {


    $comics = config('comics');


    $data = [

        'links' => $links,
        'footerLinks' => $footerLinks,
        'comics'=> $comics,
    ];


    return view('home', $data);
})->name('home');



Route::get('/page-2', function () use ($links, $footerLinks) {


    $comics = config('comics');


    $data = [

        'links' => $links,
        'footerLinks' => $footerLinks,
        'comics'=> $comics,
    ];


    return view('page2', $data);
})->name('page2');