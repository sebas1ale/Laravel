@extends('layouts.plantilla')

@section("cabecera")

LEER REGISTROS

@endsection


@section("contenido")
<table border="2">
    <tr>
        <td>Nombre de Articulo</td>
        <td>Precio</td>
        <td>Seccion</td>
        <td>Pais de Origen</td>
    </tr>
    <tr></tr>
        <td>{{$producto->NombreArticulo}}</td>
        <td>{{$producto->Precio}}</td>
        <td>{{$producto->Seccion}}</td>
        <td>{{$producto->PaisOrigen}}</td>
    </tr>
    
</table>
@endsection

@section("pie")

@endsection