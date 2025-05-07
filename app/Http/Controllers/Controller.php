<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Entreprise;
use Illuminate\Http\Request;

abstract class Controller
{
    // public function store(Request $request)
    // {
    //     $user = User::create($request->all());

    //     if ($user->role === 'admin') {
    //         Admin::create(['id_user' => $user->id]);
    //     } elseif ($user->role === 'entreprise') {
    //         Entreprise::create(['id_users' => $user->id, 'code' => $request->code]);
    //     }

    //     return redirect()->back()->with('success', 'Utilisateur créé avec succès.');
    // }
}
