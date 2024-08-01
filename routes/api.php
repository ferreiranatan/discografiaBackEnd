<?php

use Illuminate\Support\Facades\Route; // Add this line

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\TrackController;

Route::apiResource('albums', AlbumController::class);
Route::apiResource('tracks', TrackController::class)->only(['store', 'destroy']);
