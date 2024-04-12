<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DhfController;
use App\Http\Controllers\TbpController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DiareController;
use App\Http\Controllers\KatarakController;
use App\Http\Controllers\KemoterapiController;
use App\Http\Controllers\HemodialisisController;
use App\Http\Controllers\GastroenteritisController;

Route::get('/', function () {
    return view('welcome');
});



Route::post('/search-patient', [DataController::class, 'search']);

Route::get('/dhf', [DhfController::class, 'index']);
Route::get('/dhf/delete/{id}', [DhfController::class, 'delete']);
Route::get('/dhf/{cmd}/{id}', [DhfController::class, 'modify']);
Route::get('/dhf/add', [DhfController::class, 'add']);
Route::post('/dhf/add', [DhfController::class, 'store']);
Route::post('/dhf/update/{id}', [DhfController::class, 'update']);

Route::get('/tbp', [TbpController::class, 'index']);
Route::get('/tbp/delete/{id}', [TbpController::class, 'delete']);
Route::get('/tbp/{cmd}/{id}', [TbpController::class, 'modify']);
Route::get('/tbp/add', [TbpController::class, 'add']);
Route::post('/tbp/add', [TbpController::class, 'store']);
Route::post('/tbp/update/{id}', [TbpController::class, 'update']);

Route::get('/katarak', [KatarakController::class, 'index']);
Route::get('/katarak/delete/{id}', [KatarakController::class, 'delete']);
Route::get('/katarak/{cmd}/{id}', [KatarakController::class, 'modify']);
Route::get('/katarak/add', [KatarakController::class, 'add']);
Route::post('/katarak/add', [KatarakController::class, 'store']);
Route::post('/katarak/update/{id}', [KatarakController::class, 'update']);

Route::get('/kemoterapi', [KemoterapiController::class, 'index']);
Route::get('/kemoterapi/delete/{id}', [KemoterapiController::class, 'delete']);
Route::get('/kemoterapi/{cmd}/{id}', [KemoterapiController::class, 'modify']);
Route::get('/kemoterapi/add', [KemoterapiController::class, 'add']);
Route::post('/kemoterapi/add', [KemoterapiController::class, 'store']);
Route::post('/kemoterapi/update/{id}', [KemoterapiController::class, 'update']);

Route::get('/diare', [DiareController::class, 'index']);
Route::get('/diare/delete/{id}', [DiareController::class, 'delete']);
Route::get('/diare/{cmd}/{id}', [DiareController::class, 'modify']);
Route::get('/diare/add', [DiareController::class, 'add']);
Route::post('/diare/add', [DiareController::class, 'store']);
Route::post('/diare/update/{id}', [DiareController::class, 'update']);

Route::get('/hemodialisis', [HemodialisisController::class, 'index']);
Route::get('/hemodialisis/delete/{id}', [HemodialisisController::class, 'delete']);
Route::get('/hemodialisis/{cmd}/{id}', [HemodialisisController::class, 'modify']);
Route::get('/hemodialisis/add', [HemodialisisController::class, 'add']);
Route::post('/hemodialisis/add', [HemodialisisController::class, 'store']);
Route::post('/hemodialisis/update/{id}', [HemodialisisController::class, 'update']);

Route::get('/gastroenteritis', [GastroenteritisController::class, 'index']);
Route::get('/gastroenteritis/delete/{id}', [GastroenteritisController::class, 'delete']);
Route::get('/gastroenteritis/{cmd}/{id}', [GastroenteritisController::class, 'modify']);
Route::get('/gastroenteritis/add', [GastroenteritisController::class, 'add']);
Route::post('/gastroenteritis/add', [GastroenteritisController::class, 'store']);
Route::post('/gastroenteritis/update/{id}', [GastroenteritisController::class, 'update']);

