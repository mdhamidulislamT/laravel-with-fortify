<?php

use App\Http\Controllers\RelationshipController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('home', 'home')->name('home');
    Route::get('/oneToMany', [RelationshipController::class, 'oneToMany'])->name('oneToMany');
});
Route::get('/manyToMany', [RelationshipController::class, 'manyToMany'])->name('manyToMany');
Route::get('/hasManyThrough', [RelationshipController::class, 'hasManyThrough'])->name('hasManyThrough');
