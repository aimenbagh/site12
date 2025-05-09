<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Entreprise; // Ensure the Entreprise class exists in the specified namespace
use App\Models\Admin; // Ensure the Admin class exists in the specified namespace

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'vile',
        'address',
        'postal_code',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
        ];
    }

    public function admin()
    {
        return $this->hasOne(Admin::class, 'id_user'); // Ensure the Admin class is defined and imported
    }

    public function entreprise()
    {
        return $this->hasOne(Entreprise::class, 'id_users'); // Ensure the 'id_users' column exists in the Entreprise table
    }
}
