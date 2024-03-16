<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// ********** les routes de l'accueil du site
Route::get("/", [HomeController::class, "home"])->name("home");

// ********** la route qui gère les ressources du site
Route::resource("notes", \App\Http\Controllers\NoteContoller::class);
