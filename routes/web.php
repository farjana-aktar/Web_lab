<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [EmployeeController::class, 'index'])->name('employee.index');

Route::delete('/delete/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');

Route::get('/search', [EmployeeController::class, 'search'])->name('employee.search');

Route::get('/show/{id}', [EmployeeController::class, 'show'])->name('employee.show');

Route::get('/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/store', [EmployeeController::class, 'store'])->name('employee.store');

