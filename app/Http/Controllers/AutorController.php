<?php

namespace App\Http\Controllers;

use App\Models\AutorModel;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Autores = AutorModel::latest()->paginate(4);

        return view('VistaAutores/index', ['Autores' => $Autores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('VistaAutores/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellidoPaterno' => 'required',
            'apellidoMaterno' => 'required',
            'estado' => 'required',
        ]);
        AutorModel::create($request->all());
        return redirect()->route('Autores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(AutorModel $autorModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AutorModel $Autore)
    {
        return view('VistaAutores/edit',['Autore' => $Autore]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AutorModel $Autore)
    {
        $Autore->update($request->all());

        return redirect()->route('Autores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AutorModel $Autore)
    {
        $Autore->delete();

        return redirect()->route('Autores.index');
    }
}
