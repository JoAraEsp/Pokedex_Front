<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surveys extends Model
{
    use HasFactory;

    protected $casts = [
        'preguntas' => 'array',
    ];

    protected $fillable = [
        'titulo',
        'tipo',
        'tipo_preguntas',
        'fecha',
        'indicaciones',
    ];
}
