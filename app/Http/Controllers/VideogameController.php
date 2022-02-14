<?php

namespace App\Http\Controllers;

use App\Videogame;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    public function home() {

        return view('pages.home');
    }

    // All videogames
    public function getVideogames() {

        $videogames = Videogame::all();

        return json_encode($videogames);
    }

    // delete Videogames
    public function deleteVideogame($id) {

        $videogame = Videogame::findOrFail($id);
        $videogame->delete();

        return json_encode($videogame);
    }
}
