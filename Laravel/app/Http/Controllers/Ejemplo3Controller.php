<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejemplo3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function showForo(int $id)
    {
        return view('foro');
    }

    /**
     * Display the specified resource.
     */
    public function quienesSomos()
    {
        return view('quienesSomos');
    }

    /**
     * Display the specified resource.
     */
    public function dondeEstamos()
    {
        return view('dondeEstamos');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return"estas accediendo al post ".$id .",para editarlo";
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
