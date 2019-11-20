<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\BookRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(): Collection
    {
        return Book::all();
    }

    public function store(BookRequest $request): Book
    {
        return Book::create($request->validated());
    }

    public function show(Book $book): Book
    {
        return $book;
    }

    public function update(BookRequest $request, Book $book): Book
    {
        $book->update($request->validated());
        return $book;
    }

    public function destroy(Book $book): Book
    {
        $book->delete();
        return $book;
    }
}
