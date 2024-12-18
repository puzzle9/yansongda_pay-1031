<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;

Route::any('/', [Controllers\Index::class, 'start']);
