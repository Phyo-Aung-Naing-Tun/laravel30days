<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/jobs', function () {
    return view('jobs',['jobs' => Job::with('employer')->get()]);
});

Route::get('/content',function(){
    return view('content');
});
Route::get('/jobs/{id}', function ($id) {
    return view('job',['job' => Job::find($id)]);
});
