<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
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

Route::get('companies',[CompanyController::class, 'index']);
Route::get('companies/create',[CompanyController::class, 'create']);
Route::get('companies/{id}',[CompanyController::class, 'show']);
Route::get('companies/edit/{id}',[CompanyController::class, 'edit']);
Route::post('companies',[CompanyController::class, 'store']);
Route::delete('companies/{id}',[CompanyController::class,'destroy']);
Route::put('companies/{id}',[CompanyController::class,'update']);

Route::redirect('/','companies');

Route::get('employees',[EmployeeController::class,'index']);
Route::get('employees/create',[EmployeeController::class,'create']);
Route::get('employees/{id}',[EmployeeController::class,'show']);
Route::get('employees/edit/{id}',[EmployeeController::class,'edit']);
Route::post('employees',[EmployeeController::class,'store']);
Route::delete('employees/{id}',[EmployeeController::class,'destroy']);
Route::put('employees/{id}',[EmployeeController::class,'update']);


