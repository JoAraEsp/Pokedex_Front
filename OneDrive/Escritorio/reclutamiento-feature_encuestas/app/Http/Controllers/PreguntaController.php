<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PreguntaController extends Controller
{
    public function guardarPreguntas(Request $request)
    {
        $preguntas = [];
        $preguntasText = $request->input('preguntas');

        foreach ($preguntasText as $preguntaText) {
            $preguntas[] = [
                'preguntas' => $preguntaText,
            ];
        }
        DB::table('preguntas')->insert($preguntas);
    }
}
