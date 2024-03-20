<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* RECUPERO VALORI DEL FILE COMICS */
        $movies = Movie::all();

        /* RECUPERO VALORI DEL FILE MAIN_MENU */
        $main_menu = config('main_menu');

        return view('movies_user.index', compact('movies', 'main_menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies_user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovieRequest $request)
    {

        $data = $request->validated();

        $movie = new Movie();

        $movie->fill($data);

        $movie->save();

        return redirect()->route('movies_user.show', $movie->id)->with('type', 'success')->with('message', "Elemento ( $movie->title ) salvato");
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        /* RECUPERO VALORI DEL FILE MAIN_MENU */
        $main_menu = config('main_menu');

        return view('movies_user.show', compact('movie', 'main_menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }
}