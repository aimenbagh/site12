<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Request;
use App\Models\Entreprise;
use App\Models\Trche;
use Illuminate\Http\Request as HttpRequest;

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
        'view' => 'dashboard', // Ajout de la variable $view
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

Route::get('/admin/users', function () {
    $users = User::all(); // Récupère tous les utilisateurs
    return view('dashboardadmin', [
        'view' => 'users', // Définit la vue à afficher
        'users' => $users,
    ]);
})->name('admin.users');

Route::get('/admin/entreprise/create', function () {
    return view('dashboardadmin', [
        'view' => 'create-entreprise', // Définit la vue à afficher
    ]);
})->name('admin.entreprise.create');

Route::post('/admin/entreprise/store', function (HttpRequest $request) {
    Entreprise::create($request->all());
    return redirect()->route('admin.entreprise.create')->with('success', 'Entreprise ajoutée avec succès.');
})->name('entreprise.store');

Route::get('/admin/trche', function () {
    $trches = Trche::all(); // Récupère toutes les entrées de la table trches
    return view('dashboardadmin', [
        'view' => 'trche', // Définit la vue à afficher
        'trches' => $trches,
    ]);
})->name('admin.trche');

require __DIR__.'/auth.php';
