<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{

    protected $table= [
        'nome',
        'email',
        'datanasc'

    ];

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    use HasFactory;
}
