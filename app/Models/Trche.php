<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trche extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_admin',
        'id_entreprises',
        'qunt_ca',
        'qunt_pa',
        'qunt_pl',
        'qunt_ve',
        'qunt_me',
        'qunt_or',
    ];
}
