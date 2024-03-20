<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use Illuminate\Http\Request;
use App\Models\Comic;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');

        return view('comics.index',);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create', ['comic' => new Comic()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {
        $data = $request->validated();
        if (!str_contains($data['price'], '$')) $data['price'] = '$' . $data['price'];
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();
        return to_route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $data = $request->validated();
        if (!str_contains($data['price'], '$')) $data['price'] = '$' . $data['price'];
        $comic->fill($data);
        $comic->save();
        return to_route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }
}
