<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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

Route::resource('post','PostController');

Route::get('/', function () {
    return view('welcome');
});
Route::resource('category','CategoryController');
Route::resource('userm','UserMangerController');



Route::get('/blog',function (){
    return view('front.blog');
});
Route::get('/project', function () {
    return view('front.single-project');
});
Route::get('/projects', function () {
    return view('front.projects');
});
Route::get('/Dashbord', function () {
    return view('Dashbord.index');
});
Route::resource('/roles', 'RoleController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('User','UserController');
