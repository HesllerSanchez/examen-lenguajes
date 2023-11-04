<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Models\Directorio;
use Illuminate\Http\Request;

class DirectorioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directorio= Directorio::all();
        return view('directorio', compact('directorio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crearEntrada');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $directorio = new Directorio();

        $directorio->codigoEntrada = $request->post('codigo');
        $directorio->nombre = $request->post('nombre');
        $directorio->apellido = $request->post('apellido');
        $directorio->telefono = $request->post('telefono');
        $directorio->correo = $request->post('correo');

        $directorio->save();
        return redirect()->route('directorio.index');
    }

    public function buscar()
    {
        return view('buscar');
    }

    public function showContactos()
    {
/*
        $directorio = Directorio::find($codigoEntrada);
        $contacto = $directorio->contactos;
        , compact('directorio','contacto')*/
        $contacto= Contacto::all();
        return view('vercontactos',compact('contacto'));
    }


    public function eliminar()
    {
        return view('eliminar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Directorio $directorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Directorio $directorio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Directorio $directorio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Directorio $directorio)
    {
        //
    }
}
