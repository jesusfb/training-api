<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\URL;


Route::get('/', function () {
    $routes = [];
    $not_these_routes = ['/', 'web', 'reset'];
    foreach (\Route::getRoutes()->getIterator() as $route) {
        if (!in_array($route->uri, $not_these_routes)) {
            $routes[] = $route->uri . ': ' . $route->methods[0];
        }
    }
    return $routes;
});

Route::get('/reset', function () {
    Artisan::call('migrate:fresh');
    Artisan::call('db:seed');
    $root_url = URL::to('/');
    return "DB was reset<br><br><a href=\"$root_url\">Return to root</a>";
});

Route::apiResource('authors', 'AuthorController');
Route::apiResource('books', 'BookController');
Route::apiResource('genres', 'GenreController');