<?php

namespace App\Http\Controllers;

use App\Ubication;
use Illuminate\Http\Request;

class UbicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ubications = Ubication::orderBy('id', 'DESC')->paginate(13);
        return view('ubications.index', ['ubications'=>$ubications]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ubications.create');
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
            'name' => 'required|string|unique:ubications'
        ], [], [
            'name' => 'Nombre'
        ]);
        Ubication::create($request->all());
        return redirect()->route('ubications.index')->with('info', 'Ubicación creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ubication  $ubication
     * @return \Illuminate\Http\Response
     */
    public function show(Ubication $ubication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ubication  $ubication
     * @return \Illuminate\Http\Response
     */
    public function edit(Ubication $ubication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ubication  $ubication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ubication $ubication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ubication  $ubication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ubication $ubication)
    {
        //
    }
}
