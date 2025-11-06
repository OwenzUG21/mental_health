<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestyController;
use App\Models\Testy;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/Contact', function () {
    return view('contact');
});

Route::get('/admin', function () {
    return view('admin');
});


Route::get('/Education', function () {
    return view('education');
});


Route::get('/Story', function () {
    $tests=[];
    $tests =Testy::all();
    return view('storytestom',['tests'=>$tests]);
});


Route::get('/About', function () {
    return view('about');
});


//----------inputs-------------------------------------------------------------------------------------------
Route::post('/cont',[ContactController::class,'cont']);
Route::post('/tes',[TestyController::class,'tes']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
