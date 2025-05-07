<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;

    protected $table = 'entreprise'; // Spécifiez le nom de la table

    protected $fillable = [
        'id_users', // Foreign key referencing the users table
        'code',     // Unique code for the entreprise
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }
}
