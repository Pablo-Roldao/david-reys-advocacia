<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\LinksController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', function () {
    return view('home.index');
});

Route::get('/sobre', function () {
    return view('about.index');
});

Route::get('/contato', function () {
    return view('contact.index');
});

Route::get('/time', function () {
    return view('team.index');
});

Route::get('/escritorios', function () {
    return view('offices.index');
});

Route::get('/artigos', [ArticlesController::class, 'indexPublic']);

Route::get('/links-uteis', [LinksController::class, 'indexPublic']);

Route::resource('/articles', ArticlesController::class)
    ->except(['show']);

Route::resource('/links', LinksController::class)
    ->except(['show']);