<?php
    use Illuminate\Support\Facades\Route;


    Route::get('.well-known', \Bearlovescode\Webfinger\Http\Controllers\WebfingerController::class);
