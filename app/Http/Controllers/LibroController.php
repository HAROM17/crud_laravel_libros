<?php

namespace App\Http\Controllers;

use App\Models\LibroModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Redirect;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* return view('index'); */
        /* lastest() : propio del laravel dsde el ultimo al principio */
        $Libros = LibroModel::latest()->paginate(4);

        return view('VistaLibros/index', ['Libros' => $Libros]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('VistaLibros/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        /* dd($request->all()); */

        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'numPagina' => 'required',
            'estado' => 'required'
        ]);
        LibroModel::create($request->all());
        return redirect()->route('Libros.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(LibroModel $libroModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LibroModel $Libro)
    {
         return view('VistaLibros/edit',['Libro' => $Libro]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LibroModel $Libro)
    {
        $Libro->update($request->all());

        return redirect()->route('Libros.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LibroModel $Libro) : RedirectResponse
    {
        $Libro->delete();

        return redirect()->route('Libros.index');
    }
}
