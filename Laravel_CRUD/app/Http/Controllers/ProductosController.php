<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos=Producto::all();
        return view("productos.index", compact("productos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("productos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return view("productos.insert");

        $producto=new Producto;
        $producto->NombreArticulo=$request->NombreArticulo;
        $producto->Seccion=$request->Seccion;
        $producto->Precio=$request->Precio;
        $producto->Fecha=$request->Fecha;
        $producto->PaisOrigen=$request->PaisOrigen;
        $producto->save();
        return redirect("/productos");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto=Producto::findOrFail($id);
        $producto->update($request->all());

        return redirect("/productos");
    }

    public function show($id)
    {
        $producto=Producto::findOrFail($id);

        return view("productos.show", compact("producto"));
    }

    public function edit($id)
    {
        $producto=Producto::findOrFail($id);

        return view("productos.edit", compact("producto"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto=Producto::findOrFail($id);
        $producto->delete();

        return redirect("/productos");
    }
}
