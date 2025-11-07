<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestyController;
use App\Models\Contact;
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
    // $tests=[];
    // $tests =Testy::all();
    $tests = Testy::orderBy('created_at', 'desc')->paginate(6);
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
         $tests=[];
    $tests =Testy::all();
         $messages=[];
    $messages =Contact::all();
        return view('dashboard',['tests'=>$tests],['messages'=>$messages]);
    })->name('dashboard');
});

Route::delete('/del/{tests}',[TestyController::class,'del']);

Route::delete('/delz/{messages}',[ContactController::class,'delz']);


// Route::get('/edit',[TestyController::class,'show'])->name('edit');
// Route::PATCH('/edit',[TestyController::class,'edit'])->name('test.update');

Route::get('/edit/{test}',[TestyController::class,'ed']);
Route::put('/edit/{test}',[TestyController::class,'upd']);