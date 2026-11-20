<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [ // or 'home' if you use a dedicated view
            'moviesCount' => Movie::count(),
            'genresCount' => Genre::count(),
        ]);
    }
}
