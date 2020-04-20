<?php

namespace App\Http\Controllers\Admin;

use App\Game;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::with('services')->paginate(10);
        $vars = ['title' => 'Игры', 'games' => $games];
        return view('admin.game.index', $vars);
    }

    public function create()
    {
        $vars = ['title' => 'Добавить игру'];
        return view('admin.game.create', $vars);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'alias' => 'required',
            'preview_image' => 'required',
            'full_image' => 'required',
            'background_color' => 'required',
        ]);

        $game = new Game();
        $game->name = $request->input('name');
        $game->alias = $request->input('alias');
        $game->preview_image = $request->input('preview_image');
        $game->full_image = $request->input('full_image');
        $game->background_color = $request->input('background_color');
        $game->save();

        return redirect()->route('game_index');
    }

    public function show(Request $request)
    {
        $game = Game::with('services')->find($request->id);
        $vars = ['title' => $game->name, 'game' => $game];
        return view('admin.game.show', $vars);
    }

    public function edit(Request $request)
    {
        $game = Game::find($request->id);
        $vars = ['title' => 'Редактировать игру', 'game' => $game];

        return view('admin.game.edit', $vars);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'background_color' => 'required',
        ]);

        $game = Game::find($request->id);
        $game->name = $request->input('name');
        $game->background_color = $request->input('background_color');
        $game->save();

        return redirect()->route('game_index');
    }


    public function destroy(Request $request)
    {
        $game = Game::find($request->id);
        $game->delete();
        return redirect()->back();
    }
}
