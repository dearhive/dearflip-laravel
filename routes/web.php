<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $dflipOptions = [
        'source' => '/pdf/the-three-musketeers.pdf'
    ];
    return view('welcome', compact('dflipOptions'));
});
