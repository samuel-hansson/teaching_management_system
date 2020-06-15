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
