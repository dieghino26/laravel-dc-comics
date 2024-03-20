<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function comics()
    {
        $comics = Comic::all();
        return view('comics.comics', compact('comics'));
    }

    public function comic(Comic $comic)
    {
        return view('comics.comic', compact('comic'));
    }
}
