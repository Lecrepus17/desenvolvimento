<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seguir extends Model
{
    use HasFactory;
    protected $fillable = [
        'seguido_fk',
        'seguidor_fk',

    ];
}
