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

Route::get('/', function () {
    return view('index');
});

Route::get('/view', function () {
    return view('view');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/add', [EmployeeController::class, 'add'])->name('getAdd');
Route::post('/create-employee', [EmployeeController::class, 'createEmployee']);

Route::get('/view', [EmployeeController::class, 'getEmployee'])->name('getEmployee');

Route::get('/update-employee/{id}', [EmployeeController::class, 'getEmployeeById'])->name('EmployeeController');
Route::patch('/update-employee/{id}', [EmployeeController::class, 'updateEmployee'])->name('updateEmployee');

Route::delete('/delete-employee/{id}', [EmployeeController::class, 'deleteEmployee'])->name('delete');