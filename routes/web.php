<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
* informações
get('rota', function() {})
post('rota', function() {})
delete('rota', function() {})
put('rota', function() {})
path('rota', function() {})
options('rota', function() {})
match(['get', 'post'], 'rota', function() {})
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello-world', function () {
    return 'Hello world!';
});

// Route::get('/hello/{name?}', function($name = 'world') {
//     return 'Hello '.$name;
// });

Route::get('/hello/{name?}', 'HelloController@index');

Route::post('/hello/{name?}', 'HelloController@render');

/*Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function () {
    Route::resource('pages', 'Admin\PagesController');
});*/

Route::prefix('admin')
    ->middleware(['auth'])
    ->group(function () {
        Route::resource('pages', 'Admin\PagesController');
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
