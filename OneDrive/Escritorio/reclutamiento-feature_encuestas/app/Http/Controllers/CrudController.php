<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{

    public function getAll(){
        $datos=DB::table('encuestas')
        ->select("ID","Titulo","Fecha_Creacion","Fecha_Vigencia","Tipo","Estatus","Preguntas")
        ->get();
        
        return response()->json($datos);

    }

    
    public function insert(Request $request){
        $datos=DB::table("encuestas")
        ->insert([
            "Titulo" => $request["Titulo"],
            "Fecha_Creacion" => $request["Fecha_Creacion"],
            "Fecha_Vigencia" => $request["Fecha_Vigencia"],
            "Tipo" => $request["Tipo"],
            "Estatus" => $request["Estatus"],
            "Preguntas" => $request["Preguntas"]
        ]
        );
        return response()->json([
            "message" => "Correct inserts",
            "code" => "SUCCESSFUL_UPDATE"
        ], 200);

    }

    public function update(Request $request){
        $datos=DB::table("encuestas")
        ->where(["ID"=> $request["ID"]])
        ->update([
            "Titulo" => $request["Titulo"],
            "Fecha_Creacion" => $request["Fecha_Creacion"],
            "Fecha_Vigencia" => $request["Fecha_Vigencia"],
            "Tipo" => $request["Tipo"],
            "Estatus" => $request["Estatus"],
            
        ]);
        return response()->json([
            "message" => "Correct inserts",
            "code" => "SUCCESSFUL_UPDATE"
        ], 200);
    }

    public function eliminarFila(Request $request){
    $id = $request->input('id');
    return response()->json(['message' => 'Fila eliminada correctamente']);
    }

    public function getSurvey(Request $request){
        $array=DB::table('encuestas')
        ->where(["ID"=> $request["ID"]])
        ->pluck("Preguntas");
        $arrayPreguntas = explode(",", $array);
        return $arrayPreguntas;
    }
}
