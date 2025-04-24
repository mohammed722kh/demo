<?php

use Illuminate\Support\Facades\Route;

Route::get('/layouts.layout', function () {
    return view('layouts.layout');
});
