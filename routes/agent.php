<?php

use App\Http\Controllers\AgentController;
use Illuminate\Support\Facades\Route;

Route::prefix('agent')->name('agent/')->group(function(){
    Route::get('/', [AgentController::class, 'login']);
    Route::post('/login', [AgentController::class, 'login']);
});
