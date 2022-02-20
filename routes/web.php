<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CreateblogController;
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

Route::get('/blogs', function () {
    return view('blogpage');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    //get form models
    $users =  DB::table('users')->get();
    //$users = User::all();
    return view('dashboard',compact('users'));

})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function (){

    Route::get('/department/all',[DepartmentController::class,'index'])->name('department');
    Route::post('/department/add',[DepartmentController::class,'store'])->name('addDepartment');
    Route::get('/department/edit/{id}',[DepartmentController::class,'edit']);
    Route::post('/department/update/{id}',[DepartmentController::class,'update']);

    Route::get('/department/softdelete/{id}',[DepartmentController::class,'softdelete']);
    Route::get('/department/restore/{id}',[DepartmentController::class,'restore']);
    Route::get('/department/delete/{id}',[DepartmentController::class,'delete']);


    //Service
    Route::get('/service/all',[ServiceController::class,'index'])->name('services');
    Route::post('/service/add',[ServiceController::class,'store'])->name('addService');

    Route::get('/service/edit/{id}',[ServiceController::class,'edit']);
    Route::post('/service/update/{id}',[ServiceController::class,'update']);
    Route::get('/service/delete/{id}',[ServiceController::class,'delete']);

    //createblog
    Route::get('/createblog/all',[CreateblogController::class,'index'])->name('createblogs');
    Route::post('/createblog/add',[CreateblogController::class,'store'])->name('addCreateblogs');

    Route::get('/createblog/edit/{id}',[CreateblogController::class,'edit']);
    Route::post('/createblog/update/{id}',[CreateblogController::class,'update']);
    Route::get('/createblog/delete/{id}',[CreateblogController::class,'delete']);
});


