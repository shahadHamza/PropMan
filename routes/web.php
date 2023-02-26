<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use Carbon\Carbon;
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
require __DIR__.'/auth.php';


Route::get('/home', function () {
return view('home.home');
})->name("home");

Route::get('/dashboard/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/all_contracts', [\App\Http\Controllers\ContractsController::class, 'index']);
    Route::resource("contracts",\App\Http\Controllers\ContractsController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/', [IndexController::class, 'index']);
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource("confirmation",\App\Http\Controllers\ConfirmationsController::class);
    Route::resource("payment",\App\Http\Controllers\PaymentsController::class);
    Route::post("/payment/update",[\App\Http\Controllers\PaymentsController::class,"update_payment"])->name("update_payment");
    Route::resource("maintenance",\App\Http\Controllers\MainController::class);
    Route::get('/{page}', [\App\Http\Controllers\AdminController::class, 'index']);

});



