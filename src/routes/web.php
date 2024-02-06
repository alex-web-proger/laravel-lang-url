<?php

use Alexlen\LangUrl\Http\Controllers\LangController;
use Illuminate\Support\Facades\Route;


Route::get('set-locale/{lang}', LangController::class)->name('set-locale');





