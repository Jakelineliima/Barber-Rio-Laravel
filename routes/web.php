<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

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


Route::get('/meusagendamento', function () {
    return view('site.meusagendamento');
})->name('site.meusagendamento');

Route::get('/cabelo', function () {
    return view('site.cabelo');
})->name('site.cabelo');

Route::get('/bigode', function () {
    return view('site.bigode');
})->name('site.bigode');

Route::get('/barba', function () {
    return view('site.barba');
})->name('site.barba');

Route::get('/cadastro', function () {
    return view('site.cadastro');
})->name('site.cadastro');

Route::get('/logar', function () {
    return view('site.logar');
})->name('site.logar');

Route::get('/sobre', function () {
    return view('site.sobre');
})->name('site.sobre');

Route::get('/equipe', function () {
    return view('site.equipe');
})->name('site.equipe');

Route::get('/agendar', function () {
    return view('site.agendar');
})->name('site.agendar');

Route::get('/about', function () {
    return view('site.about');
})->name('site.about');


Route::get('/', 'PageController@comentarios')->name('comentario');



//middleware/Controllers

Route::group(['middleware' => 'auth'], function () {
    Route::prefix('admin')->namespace('Admin')->group(function () {
        Route::resource('comentario', 'ComentarioController');
        Route::resource('cadastro', 'CadastroController');
        Route::resource('agenda', 'AgendaController');
    });
});



Auth::routes();
Route::get('auth/dash', 'HomeController@index')->name('home');
