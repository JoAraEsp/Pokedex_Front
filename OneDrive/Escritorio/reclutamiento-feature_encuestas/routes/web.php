<?php

use App\Models\Surveys;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SurveyController::class, 'index'])-> name('surveys.show');

Route::get('/createsurvey_anonymouslist', function () {
    return view('createsurveylistA');
});

Route::get('/createsurvey_anonymousopen', function () {
    return view('createsurveyopenA');
});

Route::get('/createsurvey_anonymousoption', function () {
    return view('createsurveyoptionA');
});

Route::get('/createsurvey_publiclist', function () {
    return view('createsurveylistP');
});

Route::get('/createsurvey_publicopen', [SurveyController::class, 'create']) -> name('surveys.createPublicOpen');
Route::post('/createsurvey_publicopen', [SurveyController::class, 'store']) -> name('surveys.storePublicoOpen');

Route::get('/createsurvey_publicoption', function () {
    return view('createsurveyoptionP');
});

Route::get('/statussurvey_progress', function () {
    return view('statussurveyProgress');
});

Route::get('/statussurvey_finished', function () {
    return view('statussurveyFinished');
});

Route::get('/surveypublic', function () {
    return view('surveypublic');
});

Route::get('/surveypublic_progress', function () {
    return view('surveypublicProgressDelete');
});

Route::get('/surveyanonymous', function () {
    return view('surveyanonymous');
});

Route::get('/surveyanonymous_progress', function () {
    return view('surveyanonymousProgressDelete');
});

Route::post('/guardardatos', 'DbController@guardarDatos');

Route::post('/guardarencuesta', 'EncuestaController@guardarEncuesta');

