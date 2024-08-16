<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/plan', [HomeController::class, 'plan']);
Route::post('/upload', [HomeController::class, 'upload']);
Route::get('/download/{id}', [HomeController::class, 'download']);
Route::get('/delete/{id}', [HomeController::class, 'delete']);
Route::get('/delete_all', [HomeController::class, 'delete_all']);
Route::get('/view', [HomeController::class, 'view']);
Route::post('/upload_file', [HomeController::class, 'upload_file']);
Route::get('/down/{id}', [HomeController::class, 'down']);
Route::get('/delete_view', [HomeController::class, 'delete_view']);
Route::get('/society', [HomeController::class, 'society']);
Route::get('/improve', [HomeController::class, 'improve']);
Route::get('/delete_data/{id}', [HomeController::class, 'delete_data']);
Route::post('/upload_society', [HomeController::class, 'upload_society']);
Route::get('/down_society/{id}', [HomeController::class, 'down_society']);
Route::get('/delete_society', [HomeController::class, 'delete_society']);
Route::get('/del/{id}', [HomeController::class, 'del']);
Route::post('/upload_improve', [HomeController::class, 'upload_improve']);
Route::get('/down_improve/{id}', [HomeController::class, 'down_improve']);
Route::get('/delete_improve', [HomeController::class, 'delete_improve']);
Route::get('/del_improve/{id}', [HomeController::class, 'del_improve']);
Route::get('/expert', [HomeController::class, 'expert']);
Route::get('delete_expert/{id}', [HomeController::class, 'delete_expert']);
Route::get('delete_experted', [HomeController::class, 'delete_experted']);

Route::get('/edu', [HomeController::class, 'edu']);
Route::post('/upload_expert', [HomeController::class, 'upload_expert']);
Route::get('/down_expert/{id}', [HomeController::class, 'down_expert']);
Route::post('/upload_edu', [HomeController::class, 'upload_edu']);
Route::get('/down_edu/{id}', [HomeController::class, 'down_edu']);
Route::get('/delete_edu/{id}', [HomeController::class, 'delete_edu']);
Route::get('/delete_educat', [HomeController::class, 'delete_educat']);
Route::get('/ment',[HomeController::class, 'ment']);
Route::post('/upload_ment', [HomeController::class, 'upload_ment']);
Route::get('/upload_men/{id}', [HomeController::class, 'upload_men']);
Route::get('/delete_men/{id}', [HomeController::class, 'delete_men']);
Route::get('/delete_ment', [HomeController::class, 'delete_ment']);
Route::get('/develop', [HomeController::class, 'develop']);
Route::post('/upload_dev', [HomeController::class, 'upload_dev']);
Route::get('/upload_develop/{id}', [HomeController::class, 'upload_develop']);
Route::get('/delete_dev/{id}', [HomeController::class, 'delete_dev']);
Route::get('/delete_develop', [HomeController::class, 'delete_develop']);

//===================================
Route::get('/build', [HomeController::class, 'build']);
Route::post('/upload_build', [HomeController::class, 'upload_build']);
Route::get('/down_build/{id}', [HomeController::class, 'down_build']);
Route::get('/delete_build/{id}', [HomeController::class, 'delete_build']);
Route::get('/delete_bu', [HomeController::class, 'delete_bu']);
//=====================================================
Route::get('/security', [HomeController::class, 'security']);
Route::post('/upload_security', [HomeController::class, 'upload_security']);
Route::get('/down_security/{id}', [HomeController::class, 'down_security']);
Route::get('delete_securited/{id}', [HomeController::class, 'delete_securited']);
Route::get('/delete_security', [HomeController::class, 'delete_security']);
//================================================================














