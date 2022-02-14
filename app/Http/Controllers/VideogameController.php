<?php

namespace App\Http\Controllers;

use App\Videogame;
use App\Mail\VidegameDeleteMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        Mail::to('loris-e-adriano@hotmail.it')->send(new VidegameDeleteMail());

        return json_encode($videogame);
    }
}
