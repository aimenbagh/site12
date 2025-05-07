<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Request;

Route::get('/', function () {
    return view('welcome');
});

// Route for the dashboard page
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Route for the game page
Route::get('/game', function () {
    return view('game');
})->name('game');

// Route for the action page
Route::get('/action', function () {
    return view('action');
})->name('action');

Route::get('/dashboardadmin', function () {
    return view('dashboardadmin', [
        'users' => User::all(),
    ]);
})->middleware('auth')->name('dashboardadmin');

Route::get('/dashboardentreprise', function () {
    return view('dashboardentreprise');
})->middleware('auth')->name('dashboardentreprise');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/logout', function () {
    Auth::guard('web')->logout();

    Request::session()->invalidate();

    Request::session()->regenerateToken();
    return redirect('/'); // Redirect to the homepage after logout
})->name('logout');

require __DIR__.'/auth.php';
