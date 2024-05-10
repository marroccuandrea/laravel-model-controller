<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function moviesTitle()
    {
        // Order By, per ordinare le card in base al titolo
        $movies = Movie::orderBy('title')->get();
        return view('movies-title', compact('movies'));
    }

    public function movies()
    {
        $movies = Movie::all();

        return view('movies', compact('movies'));
    }
}
