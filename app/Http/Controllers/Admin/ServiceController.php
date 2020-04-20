<?php

namespace App\Http\Controllers\Admin;

use App\Game;
use App\Http\Controllers\Controller;
use App\Service;
use App\ServiceType;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::with('game')->with('type')
            ->with('selects')->paginate(10);
        $vars = ['title' => 'Услуги', 'services' => $services];
        return view('admin.service.index', $vars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $games = Game::all();
        $types = ServiceType::all();
        $vars = ['title' => 'Добавить услугу', 'games' => $games, 'types' => $types];
        return view('admin.service.create', $vars);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'game_id' => 'required',
            'type_id' => 'required',
            'description' => 'required',
        ]);

        $game = new Service();
        $game->name = $request->input('name');
        $game->game_id = $request->input('game_id');
        $game->type_id = $request->input('type_id');
        $game->description = $request->input('description');
        $game->save();

        return redirect()->route('service_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $service = Service::with('game')->with('type')
            ->with('selects')->find($request->id);
        $vars = ['title' => $service->name, 'service' => $service];
        return view('admin.service.show', $vars);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $games = Game::all();
        $types = ServiceType::all();
        $service = Service::find($request->id);
        $vars = ['title' => 'Редактировать услугу', 'games' => $games, 'types' => $types ,'service' => $service];

        return view('admin.service.edit', $vars);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'game_id' => 'required',
            'type_id' => 'required',
            'description' => 'required',
        ]);

        $game = Service::find($request->id);
        $game->name = $request->input('name');
        $game->game_id = $request->input('game_id');
        $game->type_id = $request->input('type_id');
        $game->description = $request->input('description');
        $game->save();

        return redirect()->route('service_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $service = Service::find($request->id);
        $service->delete();
        return redirect()->back();
    }
}
