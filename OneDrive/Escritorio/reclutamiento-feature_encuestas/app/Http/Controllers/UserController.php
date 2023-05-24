<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Notifications\Notifiable;
use App\Notifications\testNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\DB;
use PharIo\Manifest\Email;
use App\Mail\TestMailable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function getAllUser(){
        $datos=DB::table('users')
        ->select("ID","nombre","email")
        ->get();
        return response()->json($datos);

    }

    public function notify(){
       $datos=DB::table('users')
       ->select("email")
       ->get();
        $correo = new TestMailable; 
    Mail::to($datos)->send($correo);

    return response()->json([
        "message" => "Correct inserts",
        "code" => "SUCCESSFUL_UPDATE",
    ], 200);
    }

    public function testNotificacion(Request $request){
        $datos=DB::table('users')
        ->pluck("email")
        ->toArray();
        $emails_enviados = $request->input('emails');
        $correo= new TestMailable;
        $resultado = array_intersect($emails_enviados, $datos);
        Mail::to($resultado)->send($correo);
        return response()->json([
            "message" => "Correct inserts",
            "code" => "SUCCESSFUL_UPDATE"
        ], 200);
    }
}
