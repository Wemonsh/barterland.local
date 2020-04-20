<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class MainController extends Controller
{
    public function index() {
        $games = Game::with('services')->get();
        $vars = [
            'games' => $games
        ];

        //dump($vars);
        return view('web.pages.index', $vars);
    }

    public function about() {
        return view('web.pages.about');
    }

    public function rules() {
        return view('web.pages.rules');
    }

    public function help() {
        return view('web.pages.help');
    }

    public function reviews() {
        return view('web.pages.reviews');
    }

    public function rating() {
        return view('web.pages.rating');
    }
}
