<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AutoMarksController;
use App\Http\Controllers\FeedbackController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('promotions', PromotionController::class);

Route::apiResource('service', ServiceController::class);

Route::apiResource('marks', AutoMarksController::class);

Route::apiResource('feedbacks', FeedbackController::class);

// Route::apiResources([
//     'desks' => DeskController::class,
// ]);
