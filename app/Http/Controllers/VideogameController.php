<?php

namespace App\Http\Controllers;

use App\Videogame;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    public function home() {

        return view('pages.home');
    }

    public function getVideogames() {

        $videogames = Videogame::all();

        return json_encode($videogames);
    }
}
