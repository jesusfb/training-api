<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Http\Requests\GenreRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(): Collection
    {
        return Genre::all();
    }

    public function store(GenreRequest $request): Genre
    {
        return Genre::create($request->validated());
    }

    public function show(Genre $genre): Genre
    {
        return $genre;
    }

    public function update(GenreRequest $request, Genre $genre): Genre
    {
        $genre->update($request->validated());
        return $genre;
    }

    public function destroy(Genre $genre): Genre
    {
        $genre->delete();
        return $genre;
    }
}
