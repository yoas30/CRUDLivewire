<?php

use App\Livewire\Addcar;
use App\Livewire\Carlist;
use App\Livewire\EditCar;
use App\Livewire\Testpage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/page', Testpage::class);
Route::get('/cars', Carlist::class);
Route::get('/add/new', Addcar::class);
Route::get('/edit/car/{id}',EditCar::class);