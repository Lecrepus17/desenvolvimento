<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Post;

class Comentario extends Model
{
    use HasFactory;
    protected $fillable = [
        'texto',
        'imagem',
        'like',
        'post_fk',
        'user_fk',
    ];

}




