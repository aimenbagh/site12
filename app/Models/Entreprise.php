<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;

    protected $table = 'entreprises'; // Spécifiez le nom de la table

    protected $fillable = [
        'id_users',
        'name',
        'code',
        'address',
        'city',
        'postal_code',
        'phone',
        'email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }
}
