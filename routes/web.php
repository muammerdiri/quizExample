<?php

use App\Http\Controllers\Admin\QuizController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\QuestionController;




Route::get('/', function () {
    return view('welcome');
});




Route::middleware(['auth:sanctum', 'verified'])->get('/panel', function () {
    return view('dashboard');
})->name('dashboard');



Route::group(['middleware'=>['auth', 'isAdmin'],'prefix'=>'admin'],function () {
    Route::get('quizzes/{id}',[QuizController::class,'destroy'])->whereNumber('id')->name('quizzes.destroy');
    Route::resource('quizzes', QuizController::class);
    Route::resource('quiz/{quiz_id}/questions', QuestionController::class);
});