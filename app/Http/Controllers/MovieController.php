<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class MovieController extends Controller
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

       return view('movies.index', compact('movies', 'main_menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
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

        return redirect()->route('movies.show', $movie->id)->with('type', 'success')->with('message', "Elemento ( $movie->title ) salvato");
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        /* RECUPERO VALORI DEL FILE MAIN_MENU */
        $main_menu = config('main_menu');

        return view('movies.show', compact('movie', 'main_menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        
        $data = $request->validated();

        $movie->fill($data);

        $movie->save();

        return redirect()->route('movies.show', $movie->id)->with('type', 'info')->with('message', "Elemento ( $movie->title ) aggiornato");;
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('movies.index')->with('type', 'secondary')->with('message', "Elemento ( $movie->title ) messo nel cestino");
    }

    /* SOFT DELETE */

    public function trash()
    {

        $movies = Movie::onlyTrashed()->get();
        
        return view('movies.trash', compact('movies'));
    }
    
    public function restore(string $id)
    {

        $movie = Movie::onlyTrashed()->findOrFail($id);

        $movie->restore();

        return redirect()->route('movies.index')->with('type', 'success')->with('message', "Elemento ( $movie->title ) ripreso dal cestino");
    }

    public function drop(string $id)
    {

        $movie = Movie::onlyTrashed()->findOrFail($id);

        $movie->forceDelete();
        
        return redirect()->route('movies.index')->with('type', 'danger')->with('message', "Elemento ( $movie->title ) eliminato");
    }
}