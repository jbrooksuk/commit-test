<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', fn() => view('welcome'));
Route::get('/', fn() => 'Hello World!');

Route::get('/commit', fn() => shell_exec("git log -1 --pretty=format:'%h - %s (%ci)' --abbrev-commit"));
