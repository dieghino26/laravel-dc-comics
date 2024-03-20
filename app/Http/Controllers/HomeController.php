<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class HomeController extends Controller
{
    public function __invoke()
    {

        /* RECUPERO VALORI DEL FILE MAIN_MENU */
        $main_menu = config('main_menu');

        return view('home', compact('main_menu'));
    }
}