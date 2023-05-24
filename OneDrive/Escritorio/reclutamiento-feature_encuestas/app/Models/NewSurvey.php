<?php
use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    protected $fillable = ['tipo_encuesta', 'tipo_preguntas', 'fecha_vencimiento', 'titulo_encuesta', 'indicaciones', 'pregunta'];
}
