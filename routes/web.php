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
    Route::get('/admin', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admin-sobre', \App\Http\Livewire\About\AboutIndex::class)->name('admin.about');
    Route::get('/admin-area-de-atuacao', \App\Http\Livewire\ExpertiseArea\ExpertiseAreaIndex::class)->name('admin.expertise-area');
    Route::get('/admin-contato', \App\Http\Livewire\Contact\ContactIndex::class)->name('admin.contact');
    Route::get('/admin-posts', \App\Http\Livewire\Post\PostIndex::class)->name('admin.posts');
    Route::get('/admin-time', \App\Http\Livewire\TeamMember\TeamMemberIndex::class)->name('admin.team');
    Route::get('/admin-escritorios', \App\Http\Livewire\Office\OfficeIndex::class)->name('admin.offices');
    Route::get('/admin-servicos', \App\Http\Livewire\Service\ServiceIndex::class)->name('admin.services');
    Route::get('/admin-imagens', function () {
        return view('admin-site-images.index');
    })->name('admin.images');
    Route::get('/admin-links-uteis', \App\Http\Livewire\UsefulLink\UsefulLinkIndex::class)->name('admin-useful-links');

});

Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('/sobre', function () {
    return view('about.index');
})->name('about');

Route::get('/time', function () {
    return view('team.index');
})->name('team');

Route::get('/escritorios', function () {
    return view('offices.index');
})->name('offices');

Route::get('/contato', function () {
    return view('contact.index');
})->name('contact');

Route::get('/posts', function () {
    return view('posts.index');
})->name('posts');

Route::get('/links-uteis', function () {
    return view('useful-links.useful-links');
})->name('useful-links');


Route::post('/send-contact', [\App\Http\Controllers\SendContactController::class, 'sendContact'])->name('send-contact');
