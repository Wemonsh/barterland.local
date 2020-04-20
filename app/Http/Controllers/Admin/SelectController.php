<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Select;
use App\Service;
use Illuminate\Http\Request;

class SelectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $selects = Select::with('services')->paginate(10);
        $vars = ['title' => 'Селекты', 'selects' => $selects];
        return view('admin.select.index', $vars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::with('game')->get();
        $vars = ['title' => 'Добавить селект', 'services' => $services];
        return view('admin.select.create', $vars);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $select = new Select();
        $select->name = $request->input('name');
        $select->placeholder = $request->input('placeholder');
        $select->save();
        $select->services()->attach($request->input('services'));
        return redirect()->route('select_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Select  $select
     * @return \Illuminate\Http\Response
     */
    public function show(Select $select)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Select  $select
     * @return \Illuminate\Http\Response
     */
    public function edit(Select $select)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Select  $select
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Select $select)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Select  $select
     * @return \Illuminate\Http\Response
     */
    public function destroy(Select $select)
    {
        //
    }
}
