<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ArchiveController;

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
//     return view('welcome1');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/hello', function () {
    return 'Hello';
});

Route::get('/hello/{name}', function ($name) {
    return 'Hi '.$name;
});


Route::get('/homeOld', [HomeController::class, 'indexOld']);
Route::get('/name/{name}', [HomeController::class, 'showName']);

Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/create', [KaryawanController::class, 'create']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/edit/{id}', [KaryawanController::class, 'edit']);
Route::put('/karyawan/update', [KaryawanController::class, 'update']);
Route::get('/karyawan/delete/{id}', [KaryawanController::class, 'destroy']);

Route::get('/department', [DepartmentController::class, 'index']);
Route::get('/department/create', [DepartmentController::class, 'create']);
Route::post('/department/store', [DepartmentController::class, 'store']);
Route::get('/department/edit/{id}', [DepartmentController::class, 'edit']);
Route::put('/department/update', [DepartmentController::class, 'update']);
Route::get('/department/delete/{id}', [DepartmentController::class, 'destroy']);

Route::get('/position', [PositionController::class, 'index']);
Route::get('/position/create', [PositionController::class, 'create']);
Route::post('/position/store', [PositionController::class, 'store']);
Route::get('/position/edit/{id}', [PositionController::class, 'edit']);
Route::put('/position/update', [PositionController::class, 'update']);
Route::get('/position/delete/{id}', [PositionController::class, 'destroy']);

Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/employee/create', [EmployeeController::class, 'create']);
Route::post('/employee/store', [EmployeeController::class, 'store']);
Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit']);
Route::put('/employee/update', [EmployeeController::class, 'update']);
Route::get('/employee/delete/{id}', [EmployeeController::class, 'destroy']);
Route::get('/employee/show/{id}', [EmployeeController::class, 'show']);

Route::get('/inventory', [InventoryController::class, 'index']);
Route::get('/inventory/create', [InventoryController::class, 'create']);
Route::post('/inventory/store', [InventoryController::class, 'store']);
Route::get('/inventory/edit/{id}', [InventoryController::class, 'edit']);
Route::put('/inventory/update', [InventoryController::class, 'update']);
Route::get('/inventory/delete/{id}', [InventoryController::class, 'destroy']);
Route::get('/inventory/show/{id}', [InventoryController::class, 'show']);

Route::get('/archive', [ArchiveController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
