<?php

use App\Http\Controllers\about_page;
use App\Http\Controllers\main_page;
use App\Livewire\DeptAbout;
use App\Models\About;
use Illuminate\Support\Facades\Route;


Route::get('/',[main_page::class,'show'])->name('mainpage');

Route::get('/cal', function () {
    return view('calendar');
})->name('cal');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // Route::get('/dashboard',[about_page::class,'show'])->name('dashboard');

    Route::get('/dashboard',[DeptAbout::class,'show'])->name('dashboard');
    Route::get('/showeditabout',[DeptAbout::class,'showeditabout'])->name('showeditabout');
    Route::post('/editaddress',[DeptAbout::class,'editaddress'])->name('editaddress');


    Route::get('/media', function () {
        return view('navigationtab.media');
    })->name('media');

    Route::get('/notice', function () {
        return view('navigationtab.notice');
    })->name('notice');

    Route::get('/events', function () {
        return view('navigationtab.events');
    })->name('events');
});
