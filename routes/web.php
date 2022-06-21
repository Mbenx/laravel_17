<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaryawanController;

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
// Route::get('/create', [HomeController::class, 'create']);


//  Route::get('/trial/karyawan', [HomeController::class, 'trialKaryawan']);
Route::get('/trial/pengunjung', [HomeController::class, 'trialPengunjung']);

Route::get('/karyawan', [KaryawanController::class, 'index']);











Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
