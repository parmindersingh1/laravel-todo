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
*/

Route::get('/', function () {
    // try {
    //     DB::connection()->getPdo();
    //     echo "connected..";
    // } catch (\Exception $e) {
    //     die("Could not connect to the database.  Please check your configuration.");
    // }
    return view('welcome');
});


Route::get('/new', [
    'uses' =>'PagesController@neww'
]);

Route::get('/todos', [
    'uses' =>'TodosController@index',
    'as'   =>'todos'
]);

Route::get('/todo/delete/{id}', [
    'uses' =>'TodosController@delete',
    'as'   =>'todo.delete'
]);

Route::get('/todo/update/{id}', [
    'uses' =>'TodosController@update',
    'as'   =>'todo.update'
]);

Route::post('/create/todo', [
    'uses' =>'TodosController@store'
]);

Route::post('/todo/save/{id}', [
    'uses' =>'TodosController@save',
    'as'   =>'todos.save'
]);

Route::get('/todos/completed/{id}', [
    'uses' =>'TodosController@completed',
    'as'   =>'todos.completed'
]);