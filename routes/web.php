<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DhfController;
use App\Http\Controllers\TbpController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DiareController;
use App\Http\Controllers\KatarakController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KemoterapiController;
use App\Http\Controllers\HemodialisisController;
use App\Http\Controllers\GastroenteritisController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\LogUserActivity;
use App\Http\Middleware\NotPelaksanaMiddleware;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', '/login');

Route::get('/test', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('test');

Route::get('/dashboard', function () {
    return view('pages.dashboard')->with('title', 'Dashboard Page');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::middleware(AdminMiddleware::class)->group(function () {

        Route::middleware(LogUserActivity::class)->group(function () {

            Route::post('/user-control/add', [AdminController::class, 'store'])->name('user.create');
            Route::delete('/user-control/delete/{id}', [AdminController::class, 'delete'])->name('user.delete');
            Route::patch('/user-control/update/{id}', [AdminController::class, 'update'])->name('user.update');

        });

        Route::get('/user-control', [AdminController::class, 'index'])->name('user.index');
        Route::get('/user-control/add', [AdminController::class, 'add'])->name('user.add');

        Route::get('/user-log', [AdminController::class, 'log'])->name('user.log');

    });

    Route::middleware(NotPelaksanaMiddleware::class)->group(function () {

        Route::middleware(LogUserActivity::class)->group(function () {

            Route::post('/tbp/add', [TbpController::class, 'store']);
            Route::delete('/tbp/delete/{id}', [TbpController::class, 'delete']);
            Route::patch('/tbp/update/{id}', [TbpController::class, 'update']);

            Route::delete('/kemoterapi/delete/{id}', [KemoterapiController::class, 'delete']);
            Route::post('/kemoterapi/add', [KemoterapiController::class, 'store']);
            Route::patch('/kemoterapi/update/{id}', [KemoterapiController::class, 'update']);

            Route::delete('/hemodialisis/delete/{id}', [HemodialisisController::class, 'delete']);
            Route::post('/hemodialisis/add', [HemodialisisController::class, 'store']);
            Route::patch('/hemodialisis/update/{id}', [HemodialisisController::class, 'update']);

        });

        Route::get('/tbp', [TbpController::class, 'index']);
        Route::get('/tbp/{cmd}/{id}', [TbpController::class, 'modify']);
        Route::get('/tbp/add', [TbpController::class, 'add']);

        Route::get('/kemoterapi', [KemoterapiController::class, 'index']);
        Route::get('/kemoterapi/{cmd}/{id}', [KemoterapiController::class, 'modify']);
        Route::get('/kemoterapi/add', [KemoterapiController::class, 'add']);

        Route::get('/hemodialisis', [HemodialisisController::class, 'index']);
        Route::get('/hemodialisis/{cmd}/{id}', [HemodialisisController::class, 'modify']);
        Route::get('/hemodialisis/add', [HemodialisisController::class, 'add']);

    });

    Route::middleware(LogUserActivity::class)->group(function () {

        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::delete('/dhf/delete/{id}', [DhfController::class, 'delete']);
        Route::post('/dhf/add', [DhfController::class, 'store']);
        Route::patch('/dhf/update/{id}', [DhfController::class, 'update']);

        Route::delete('/katarak/delete/{id}', [KatarakController::class, 'delete']);
        Route::post('/katarak/add', [KatarakController::class, 'store']);
        Route::patch('/katarak/update/{id}', [KatarakController::class, 'update']);

        Route::delete('/diare/delete/{id}', [DiareController::class, 'delete']);
        Route::post('/diare/add', [DiareController::class, 'store']);
        Route::patch('/diare/update/{id}', [DiareController::class, 'update']);

        Route::delete('/gastroenteritis/delete/{id}', [GastroenteritisController::class, 'delete']);
        Route::post('/gastroenteritis/add', [GastroenteritisController::class, 'store']);
        Route::patch('/gastroenteritis/update/{id}', [GastroenteritisController::class, 'update']);

    });

    Route::get('/profile-edit', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::post('/search-patient', [DataController::class, 'search']);

    Route::get('/dhf', [DhfController::class, 'index']);
    Route::get('/dhf/{cmd}/{id}', [DhfController::class, 'modify']);
    Route::get('/dhf/add', [DhfController::class, 'add']);

    Route::get('/katarak', [KatarakController::class, 'index']);
    Route::get('/katarak/{cmd}/{id}', [KatarakController::class, 'modify']);
    Route::get('/katarak/add', [KatarakController::class, 'add']);

    Route::get('/diare', [DiareController::class, 'index']);
    Route::get('/diare/{cmd}/{id}', [DiareController::class, 'modify']);
    Route::get('/diare/add', [DiareController::class, 'add']);

    Route::get('/gastroenteritis', [GastroenteritisController::class, 'index']);
    Route::get('/gastroenteritis/{cmd}/{id}', [GastroenteritisController::class, 'modify']);
    Route::get('/gastroenteritis/add', [GastroenteritisController::class, 'add']);

});

require __DIR__.'/auth.php';
