<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $notes = Note::query()->orderBy("created_at", "desc")->paginate();
        return view("home.index", compact("notes"));
    }
}
