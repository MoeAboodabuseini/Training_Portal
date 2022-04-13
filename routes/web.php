<?php

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\UserController;
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
})
;Route::get('/companies/login', function () {
    return view('companies.companies_login');
})->name('companies_login');
Route::get('/admin/login', function () {
    return view('admins.admins_login');
})->name('admins_login');
Route::get('/Supervisor/login', function () {
    return view('supervisors.Supervisor_login');
})->name('Supervisor_login');
Route::get('/student/login', function () {
    return view('users.Student_login');
})->name('Student_login');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('redirect_to');
Route::resource('users',UserController::class);
Route::resource('companies',CompaniesController::class);
Route::resource('admin/companies',CompaniesController::class)->name('index','showCompanies');
