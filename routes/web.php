<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobController;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

Route::view('/', 'index');
Route::controller(JobController::class)->group(function(){
    Route::get('/jobs','index');

    Route::get('/jobs/create','create');

    Route::post('/jobs/create','store' )->name('job.create');

    Route::get('/jobs/{id}', 'show');

    Route::get('/jobs/{job}/edit', 'edit')->name('job.edit');

    Route::patch('/jobs/{job}',[JobController::class, 'update'])->name('job.update');

    Route::delete('/jobs/{job}',[JobController::class, 'destory'])->name('job.destory');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('/register', 'register');
    Route::get('/login','login');
    Route::post('/register','store');
    Route::post('/login', 'tryLogin');
    Route::get('/logout','logout');
});

Route::view('/content','content');

