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
    return view('welcome');
});
Route::get('/addmember',"MemberController@addmember")->name('addmember'); //имя чтобы ссылаться на него при вызове апи
Route::post('/addmember',"MemberController@addmemberdo")->name('addmemberdo'); //имя чтобы ссылаться на него при вызове апи

Route::get('/addcompany',"CompanyController@addcompany")->name('addcompany'); //имя чтобы ссылаться на него при вызове апи
Route::post('/addcompany',"CompanyController@addcompanydo")->name('addcompanydo'); //имя чтобы ссылаться на него при вызове апи

Route::get('/getcompany',"CompanyController@getcompany")->name('getcompany'); //имя чтобы ссылаться на него при вызове апи
Route::get('/editcompany/{id}',"CompanyController@editcompany")->name('editcompany'); //имя чтобы ссылаться на него при вызове апи
Route::post('/editcompanydo/{id}',"CompanyController@editcompanydo")->name('editcompanydo'); //имя чтобы ссылаться на него при вызове апи

Route::get('/removecompany/{id}',"CompanyController@removecompanydo")->name('removecompanydo'); //имя чтобы ссылаться на него при вызове апи
