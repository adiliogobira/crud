<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Itens que podem ser enfileirados no registro das informações
    protected $fillable = [
        'title', 'body'
    ];
}
