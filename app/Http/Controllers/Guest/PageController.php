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

    public function nuovaPagina()
    {
        return view('nuova-pagina');
    }

    public function movies()
    {
        $movies = Movie::all();
        dd($movies);
        return view('movies');
    }
}
