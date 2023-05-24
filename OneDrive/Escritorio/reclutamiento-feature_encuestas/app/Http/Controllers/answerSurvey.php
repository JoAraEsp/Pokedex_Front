<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class answerSurvey extends Controller
{
    public function insertAnswer(Request $request){
        $datos=DB::table("respuestas")
        ->insert([
           "ID_encuestas"=>$request["ID_encuestas"],
           "Respuestas"=>$request["Respuestas"]
        ]
        );  
        return response()->json([
            "message" => "Correct inserts",
            "code" => "SUCCESSFUL_UPDATE"
        ], 200);

    }
    public function getAnswer(Request $request){
        $array=DB::table('respuestas')
        ->where(["ID_encuestas"=> $request["ID_encuestas"]])
        ->pluck("Respuestas");
        $arrayRespuestas = explode(",", $array);
        return $arrayRespuestas;
    }
}
