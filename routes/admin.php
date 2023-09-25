<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now criar something great!
|
*/


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified','bibliotecario'
])->namespace('Admin')->group(function () {

    route::get('/', ['as' => 'admin.dash', 'uses' => 'HomeController@dash']);
});


Route::middleware(['auth','bibliotecario'])->group(function () {

    /* START USER */
    Route::prefix('user')->namespace('Admin')->group(
        function () {
            route::get('index', ['as' => 'admin.user.index', 'uses' => 'UserController@index']);
            route::get('create', ['as' => 'admin.user.create', 'uses' => 'UserController@create'])->middleware(['admin']);
            route::post('store', ['as' => 'admin.user.store', 'uses' => 'UserController@store'])->middleware(['admin']);
            route::get('edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'UserController@edit']);
            route::post('update/{id}', ['as' => 'admin.user.update', 'uses' => 'UserController@update']);
            route::get('destroy/{id}', ['as' => 'admin.user.destroy', 'uses' => 'UserController@destroy'])->middleware(['admin']);
            route::get('purge/{id}', ['as' => 'admin.user.purge', 'uses' => 'UserController@purge'])->middleware(['admin']);
            route::get('perfil', ['as' => 'admin.user.perfil', 'uses' => 'UserController@perfil'])->middleware(['admin']);

        }
    );

    /* END USER */


     /* START CATEGORIA*/
     Route::prefix('categoria')->namespace('Admin')->group(
        function () {
            route::get('index', ['as' => 'admin.categoria.index', 'uses' => 'CategoriaController@index']);
            route::get('create', ['as' => 'admin.categoria.create', 'uses' => 'CategoriaController@create'])->middleware(['admin']);
            route::post('store', ['as' => 'admin.categoria.store', 'uses' => 'CategoriaController@store'])->middleware(['admin']);
            route::get('edit/{id}', ['as' => 'admin.categoria.edit', 'uses' => 'CategoriaController@edit'])->middleware(['admin']);;
            route::post('update/{id}', ['as' => 'admin.categoria.update', 'uses' => 'CategoriaController@update'])->middleware(['admin']);;
            route::get('destroy/{id}', ['as' => 'admin.categoria.destroy', 'uses' => 'CategoriaController@destroy'])->middleware(['admin']);
            route::get('purge/{id}', ['as' => 'admin.categoria.purge', 'uses' => 'CategoriaController@purge'])->middleware(['admin']);
        }
    );
    /* END CATEGORIA*/


         /* START AUTOR*/
         Route::prefix('autor')->namespace('Admin')->group(
            function () {
                route::get('index', ['as' => 'admin.autor.index', 'uses' => 'AutorController@index']);
                route::get('create', ['as' => 'admin.autor.create', 'uses' => 'AutorController@create'])->middleware(['admin']);
                route::post('store', ['as' => 'admin.autor.store', 'uses' => 'AutorController@store'])->middleware(['admin']);
                route::get('edit/{id}', ['as' => 'admin.autor.edit', 'uses' => 'AutorController@edit'])->middleware(['admin']);;
                route::post('update/{id}', ['as' => 'admin.autor.update', 'uses' => 'AutorController@update'])->middleware(['admin']);;
                route::get('destroy/{id}', ['as' => 'admin.autor.destroy', 'uses' => 'AutorController@destroy'])->middleware(['admin']);
                route::get('purge/{id}', ['as' => 'admin.autor.purge', 'uses' => 'AutorController@purge'])->middleware(['admin']);
            }
        );
        /* END AUTOR*/

         /* START EDITORA*/
         Route::prefix('editora')->namespace('Admin')->group(
            function () {
                route::get('index', ['as' => 'admin.editora.index', 'uses' => 'EditoraController@index']);
                route::get('create', ['as' => 'admin.editora.create', 'uses' => 'EditoraController@create'])->middleware(['admin']);
                route::post('store', ['as' => 'admin.editora.store', 'uses' => 'EditoraController@store'])->middleware(['admin']);
                route::get('edit/{id}', ['as' => 'admin.editora.edit', 'uses' => 'EditoraController@edit'])->middleware(['admin']);;
                route::post('update/{id}', ['as' => 'admin.editora.update', 'uses' => 'EditoraController@update'])->middleware(['admin']);;
                route::get('destroy/{id}', ['as' => 'admin.editora.destroy', 'uses' => 'EditoraController@destroy'])->middleware(['admin']);
                route::get('purge/{id}', ['as' => 'admin.editora.purge', 'uses' => 'EditoraController@purge'])->middleware(['admin']);
            }
        );
        /* END EDITORA*/


    /* START LOGS */
    Route::middleware(['admin'])->prefix('log')->namespace('Admin')->group(
        function () {
            route::get('search', ['as' => 'admin.log.search', 'uses' => 'LogController@search'])->middleware(['admin']);;
            route::post('index', ['as' => 'admin.log.index', 'uses' => 'LogController@index'])->middleware(['admin']);;
            Route::get('/search/print', ['as' => 'admin.log.search.print', 'uses' => 'LogController@searchPrint'])->middleware(['admin']);;
            route::post('print', ['as' => 'admin.log.print', 'uses' => 'LogController@print'])->middleware(['admin']);;
        }
    );
    /* END LOGS */
});

/* require __DIR__ . '/auth.php'; */