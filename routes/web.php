<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'));

Route::get('/commit', fn() => shell_exec("git log -1 --pretty=format:'%h - %s (%ci)' --abbrev-commit"));
