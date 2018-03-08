<?php

namespace App\Http\Controllers;

use App\Dependence;
use Illuminate\Http\Request;

class DependenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Buscar
        $dependenceSearch = $request['dependence'];

        $dependences = Dependence::dependencesearch($dependenceSearch)->orderBy('id', 'DESC')->paginate(13);
        return view('dependences.index', ['dependences'=>$dependences, 'dependenceSearch'=>$dependenceSearch]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dependences.create');
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
            'name' => 'required|string|unique:dependences'
        ], [], [
            'name' => 'Nombre'
        ]);
        Dependence::create($request->all());
        return redirect()->route('dependences.index')->with('info', 'Dependencia creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dependence  $dependence
     * @return \Illuminate\Http\Response
     */
    public function show(Dependence $dependence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dependence  $dependence
     * @return \Illuminate\Http\Response
     */
    public function edit(Dependence $dependence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dependence  $dependence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dependence $dependence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dependence  $dependence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dependence $dependence)
    {
        //
    }
}
