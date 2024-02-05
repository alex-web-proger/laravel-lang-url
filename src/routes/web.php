<?php

use Alexlen\LangUrl\Http\Controllers\LangController;
use Illuminate\Support\Facades\Route;


Route::get('setlocale/{lang}', LangController::class)->name('setlocale');





