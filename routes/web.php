<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->simplePaginate(3);

    return view('jobs', ['jobs' => $jobs]);
});

Route::get('/jobs/{id}', function (int $id) {
    return view('job', ['job' => Job::find($id)]);
});
