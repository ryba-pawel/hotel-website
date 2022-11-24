<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ClientsController;
 
// Route::get('/user', [UserController::class, 'index']);

// Route::view('/', 'welcome');
Route::view('/about', 'about');
// Route::view('/clients', 'clients');
Route::view('/contact', 'contact');

// Route::get('/{slug}', [PageController::class, 'show'])->name('page.show');

Route::get('/', function () { return view('welcome');});

Route::get('/about',   [PagesController::class, 'about']);
Route::get('/clients', [ClientsController::class, 'showClients']);
// Route::get('/clients/{name}', [ClientsController::class, 'showIdClient']);

Route::get('/clients/{name}', 
    [ClientsController::class, 'showIdClient'])->where([
        'name' => '[0-9a-zA-Z]+'
    ]);


// Route::get('/clients', 'App\Http\Controllers\ClientsController@showClients');


// Route::get('/pl', 'MainController@index')->name('home_pl');

// Route::get('/{slug}', [PageController::class, 'show'])->name('pages.show');
// Route::get('/{slug}', [PageController::class, 'getPage'])->name('link_view');
// Route::get('/{slug}', 'OrganizationController@index');
// Route::get('/', function () {
//     return view('welcome');
// });