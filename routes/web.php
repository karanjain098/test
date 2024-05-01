<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    $authenticated = Auth::check(); // Check if the user is authenticated

    return Inertia::render('Home', [
        'authenticated' => $authenticated, // Pass the authentication status as a prop
    ]);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/contact', function () {
        $users = User::get();
        return Inertia::render('Test', compact('users'));
    })->name('contact');
});

Route::get('login', function () {
    return Inertia::render('Login');
})->name('login');

Route::post('login', [AuthController::class,'login']);
