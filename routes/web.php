<?php

use App\Http\Controllers\DropdownController;
use App\Http\Controllers\Admin\DashboardControoler;
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

Route::get('dependent-dropdown', [DropdownController::class, 'index']);
Route::post('dependent-dropdown', [DropdownController::class, 'string']);
Route::post('api/fetch-districts', [DropdownController::class, 'fetchDistrict']);
Route::post('api/fetch-upazilas', [DropdownController::class, 'fetchUpazila']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardControoler::class, 'index'])->name('admin.dashboard');
});


// Route::get('/strsub', [DropdownController::class, 'string']);
