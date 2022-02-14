<?php

namespace App\Http\Controllers;

use App\Videogame;
use App\Mail\VidegameDeleteMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        // Invio email all'utente e all'admin con passaggio del dato eliminato
        Mail::to(Auth::user()->email)->send(new VidegameDeleteMail($videogame));
        Mail::to('admin@gmail.com')->send(new VidegameDeleteMail($videogame));

        return json_encode($videogame);
    }
}
