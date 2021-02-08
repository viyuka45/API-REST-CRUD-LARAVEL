<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'autor',
        'titulo',
        'genero',
        'editora',
        'anolancamento',
        'cod_autor'
    ];

    protected $table = 'livros';
}
