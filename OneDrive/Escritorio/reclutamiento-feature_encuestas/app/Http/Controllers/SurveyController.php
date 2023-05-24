<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encuesta;
use App\Models\Surveys;

class SurveyController extends Controller
{
    public function index(){
        $surveys = Surveys::paginate(50);
        return view('surveys', compact('surveys'));
    }

    public function show(Surveys $surveys){
        return view('surveys', ['surveys' => $surveys]);
    }

    public function create(Request $request){
        $survey = new Surveys;

        return view('createsurveyopenP');
    }


    public function store(Request $request){
        $surveys = new Surveys;
        $surveys -> titulo = $request->input('titulo');
        $surveys -> tipo = 'Publico';
        $surveys -> tipo_preguntas = 'Abierta';
        $surveys -> fecha = $request->input('fecha-vigencia');
        $surveys -> indicaciones = $request->input('indicaciones');
        $surveys -> preguntas = $request->input('pregunta');
        $surveys ->save();
        return view('surveys');
    }

}
