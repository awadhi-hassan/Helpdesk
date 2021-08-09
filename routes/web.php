<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::resource('admin', AdminController::class)->middleware(['role:admin'])->names([
    'index' => 'admin.index',
    'create' => 'admin.create'
]);

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('profile', ProfileController::class)->names([
    'index' => 'profile.index',
    'show' => 'profile.show',
    'update' => 'profile.update',
]);

Route::resource('ticket', TicketsController::class)->names([
    'index' => 'ticket.index',
    'create' => 'ticket.create',
    'store' => 'ticket.store',
]);

Route::get('contact', function(){
    return view('contact');
})->name('contact');

Route::get('feedback', function(){
    return view('feedback');
})->name('feedback');

require __DIR__.'/auth.php';
