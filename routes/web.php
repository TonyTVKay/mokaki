<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AuctionsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\DiscoverController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\CredentialsController;

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
Route::middleware(['auth'])->group(function(){
  Route::get('/', [ HomeController::class, 'index' ]);
});
Route::get('/home', [ HomeController::class, 'index' ]);
Route::get('/activity', [ ActivityController::class, 'index' ]);
Route::get('/auctions', [ AuctionsController::class, 'index' ]);
Route::get('/authors', [ UserController::class, 'index' ]);
Route::get('/contact-us', [ ContactController::class, 'index' ]);
Route::get('/create-item', [ ItemController::class, 'create' ]);
Route::get('/discover', [ DiscoverController::class, 'index' ]);
Route::get('/item-details', [ ItemController::class, 'index' ]);
Route::get('/profile', [ UserController::class, 'show' ]);
Route::get('/wallet-connect', [ WalletController::class, 'index' ]);
Route::get('/login', [ CredentialsController::class, 'login' ]);
Route::get('/signup', [ CredentialsController::class, 'signup' ]);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
