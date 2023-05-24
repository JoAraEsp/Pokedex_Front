<?php

use App\Http\Controllers\answerSurvey;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PreguntaController;
use App\Notifications\testNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;
use PHPUnit\Util\Test;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/get', [CrudController::class,"getAll"]);

Route::post('/insert',[CrudController::class,"insert"]);

Route::put('/update',[CrudController::class,"update"]);

Route::delete('/delete',[CrudController::class,"delete"]);

Route::get('/user/get', [UserController::class,"getAllUser"]);

Route::get('/user/notify' ,[UserController::class,"notify"]);

Route::post('/user/notificacion',[UserController::class,"testNotificacion"]);

Route::post('/getSurvey',[CrudController::class, "getSurvey"]);

Route::post('/insertAnswer',[answerSurvey::class, "insertAnswer"]);

Route::post('/getAnswer',[answerSurvey::class, "getAnswer"]);

Route::post('/postPregunta',[PreguntaController::class,"preguntas"]);
