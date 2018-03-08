<?php

namespace App\Http\Controllers;

use App\Funcionary;
use Illuminate\Http\Request;

class FuncionaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $funcionaries = Funcionary::names($search)->orderBy('id', 'DESC')->paginate(13);
        return view('funcionaries.index', ['funcionaries'=>$funcionaries, 'search'=>$search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('funcionaries.create');
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
            'identification' => 'required|numeric|unique:funcionaries',
            'name' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
        ], [], [
            'identification' => 'Identificación',
            'name' => 'Nombres',
            'lastname' => 'Apellidos'
        ]);
        Funcionary::create($request->all());
        return redirect()->route('funcionaries.index')->with('info', 'Funcionario creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\funcionary  $funcionary
     * @return \Illuminate\Http\Response
     */
    public function show(funcionary $funcionary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\funcionary  $funcionary
     * @return \Illuminate\Http\Response
     */
    public function edit(Funcionary $funcionary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\funcionary  $funcionary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funcionary $funcionary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\funcionary  $funcionary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funcionary $funcionary)
    {
        //
    }
}
