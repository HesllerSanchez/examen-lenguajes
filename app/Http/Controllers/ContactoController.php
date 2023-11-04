<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agregarcontacto');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contacto = new Contacto();

        $contacto->nombre = $request->post('nombre');
        $contacto->apellido = $request->post('apellido');
        $contacto->telefono = $request->post('telefono');

        $contacto->save();
        return redirect()->route('directorio.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contacto $contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contacto= Contacto::findOrFail($id);
        $contacto->delete();
        return redirect()->route('directorio.index');
    }
}
