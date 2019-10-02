<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Religion;

class ReligionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $senaraiReligions = Religion::all();

        return view('theme_religions.index', compact('senaraiReligions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('theme_religions.create');
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

        Religion::create($data);

        return redirect('/religions')
        ->with('sukses_mesej', 'Rekod baru ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Religion $religion)
    {
        return view('theme_religions.edit', compact('religion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Religion $religion)
    {
        $request->validate(['name' => 'required']);

        $data = $request->all();

        $religion->update($data);

        return redirect('/religions')
        ->with('sukses_mesej', 'Rekod berjaya dikemaskini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Religion $religion)
    {
        $religion->delete();

        return redirect('/religions')
        ->with('mesej_sukses', 'Rekod dihapuskan!');
    }
}
