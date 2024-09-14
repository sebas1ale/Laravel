<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("welcome");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("crear");
    }

    public function contacto()
    {
        //
        return view("contacto");
    }

    public function galeria()
    {
        //
        $alumnos=["Ana","Sara","Antonio","Juan"];
        //$alumnos=[];
        return view("galeria", compact("alumnos"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
        return view("articulos");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        return view("mostrar");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "estas accediendo al edit del post: ".$id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
