<?php

use App\Http\Controllers\CategoryController;
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
    return view('welcome');
});


Route::get('/students', function () {
    return view('StudentsInfo');
});
Route::get('/students/edit', function () {
    return view('EditStudent');
});


// students Crud


Route::get('/students', 'StudentController@index')->name('student.index');
Route::post('/students/create', 'StudentController@store')->name('student.store');
Route::get('/students/edit/{id}', 'StudentController@edit')->name('student.edit');
Route::put('/students/update/{id}', 'StudentController@update')->name('student.update');

Route::delete('/students/delete/{id}', 'StudentController@destroy')->name('student.destroy');




// Employee



Route::resource('/employee', 'EmployeeController');


Route::resource('/gallery', 'GalleryController');





Route::get('/categories/trashed', 'CategoryController@trashed')->name('categories.trashed');
Route::post('/categories/trashed/{category}', 'CategoryController@restore')->name('categories.restore');
Route::resource('/categories', 'CategoryController');
