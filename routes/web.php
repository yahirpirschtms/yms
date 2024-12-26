<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar.view');


use App\Http\Controllers\CalendarController;

Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.view');
