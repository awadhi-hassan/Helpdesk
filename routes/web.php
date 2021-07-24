<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
#use App\Http\Controllers\TicketsController;

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
Route::get('admin', function() {
    return view('admin');
})->middleware(['role:admin']);

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('profile', [ProfileController::class, 'index'])->name('profile');

Route::resource('ticket', TicketsController::class)->names([
    'index' => 'ticket.index',
    'create' => 'ticket.create',
    'store' => 'ticket.store',
]);

require __DIR__.'/auth.php';
