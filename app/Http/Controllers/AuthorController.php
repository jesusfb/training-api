<?php

namespace App\Http\Controllers;

use App\Author;
use App\Http\Requests\AuthorRequest;
use DeepCopy\f008\A;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(): Collection
    {
        return Author::all();
    }

    public function store(AuthorRequest $request): Author
    {
        return Author::create($request->validated());
    }

   public function show(Author $author): Author
    {
        return $author;
    }

    public function update(AuthorRequest $request, Author $author): Author
    {
        $author->update($request->validated());
        return $author;
    }

    public function destroy(Author $author): Author
    {
        $author->delete();
        return $author;
    }
}
