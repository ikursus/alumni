<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Race;

class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $senaraiRaces = Race::all();

        return view('theme_races.index', compact('senaraiRaces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('theme_races.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request)
    {
        $request->validate(['name' => 'required']);

        $data = $request->all();

        Race::create($data);

        return redirect('/races')
        ->with('sukses_mesej', 'Rekod baru ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Race $race)
    {
        return view('theme_races.show', compact('race'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Race $race)
    {
        return view('theme_races.edit', compact('race'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Race $race)
    {
        $request->validate(['name' => 'required']);

        $data = $request->all();

        $race->update($data);

        return redirect('/races')
        ->with('sukses_mesej', 'Rekod berjaya dikemaskini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Race $race)
    {
        $race->delete();

        return redirect('/races')
        ->with('mesej_sukses', 'Rekod dihapuskan!');
    }
}
