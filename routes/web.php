<?php

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RequestController;
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

//company manage opportunities
Route::get('create/opportunity',[OpportunityController::class,'create'])->name('create_opp')->middleware(['auth','isCompany']);
Route::post('store/opportunity',[OpportunityController::class,'store'])->name('store_opp')->middleware(['auth','isCompany']);
Route::get('show/opportunities/{id}',[OpportunityController::class,'show'])->name('show_opp')->middleware(['auth','isCompany']);
Route::get('edit/opportunities/{id}',[OpportunityController::class,'edit'])->name('edit_opp')->middleware(['auth','isCompany']);
Route::put('update/opportunities/{id}',[OpportunityController::class,'update'])->name('update_opp')->middleware(['auth','isCompany']);
Route::delete('destroy/opportunities/{id}',[OpportunityController::class,'destroy'])->name('destroy_opp')->middleware(['auth','isCompany']);
//company manage reports
Route::get('show/reports/{id}',[ReportController::class,'show'])->name('show_report')->middleware(['auth','isCompany']);
Route::get('show/requests/{id}',[RequestController::class,'show'])->name('show_request')->middleware(['auth','isCompany']);
Route::put('update/requests/{id}',[RequestController::class,'update'])->name('update_request')->middleware(['auth','isCompany']);
Route::get('showAccepted/requests',[RequestController::class,'showAccepted'])->name('showAccepted_request')->middleware(['auth','isCompany']);
Route::get('showRejected/requests',[RequestController::class,'showRejected'])->name('showRejected_request')->middleware(['auth','isCompany']);
