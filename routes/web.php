<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('/direct', function () {
    $example2 = resolve('example2');
    ddd($example2);
});

Route::get('/', function () {
//    return view('welcome');
    /*
     * 现实开发中不会把绑定的逻辑放路由里面，而是放在Service provider里面。
     *
     */
    $container = new \App\Container();
    $container->bind('example',function(){
        return new \App\Example();
    });

    $example = $container->resolve('example');

//    ddd($example);
    $example->go();
});

Route::get('/direct_resolve', function () {

    $example = resolve(\App\DirectResolveClass::class);
    ddd($example);
});

Route::get('/dependency', function () {

    $example = resolve(\App\ClassOne::class);
    ddd($example);
});

Route::get('/controller_demo', 'ExampleController@index');

Route::get('/welcome', function () {
//    return view('welcome');
//    return '你好';
    return ['hi' => '你好'];
});

Route::get('/request', function () {
    $name = request('name');
    return view('result',[
        'name' => $name
    ]);
});

Route::get('/users/{user}/comments/{comment}', 'UserController@show');
Route::get('/users_table', 'UserController@show_table');
Route::get('/show_all_users', 'UserController@show_all_users');
Route::get('/show_user', 'UserController@show_user');

Route::get('/users', 'UserController@index');
Route::get('/users/create', 'UserController@create');
Route::post('/users','UserController@store');
Route::get('/users/{user}/edit', 'UserController@edit');
Route::put('/users/{user}','UserController@update');
Route::get('/users/{user}', 'UserController@display');


Route::get('/articles','ArticlesController@index');
Route::get('/articles/{article}','ArticlesController@show');

/*
 * GET /articles
 * GET /articles/20
 */

/*
 * GET /articles/create
 * POST /articles/
 */

/*
 * GET /articles/20/edit
 * PUT /articles/20
 */

/*
 * DELETE /articles/20
 */



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/testJob/{data}','TestJobController@testJob');
Route::get('/testAnotherQueueJob/{data}','TestAnotherQueueJobController@testAnotherQueueJob');

//Route:get('/seatingCharts/{computerRoom}','ComputerRoomsController@show');
//Route:get('/seatingCharts/{classroom}','ClassroomsController@show');
Route::get('/seatingCharts/{classroom}', function () {
    return 'ok';
});
