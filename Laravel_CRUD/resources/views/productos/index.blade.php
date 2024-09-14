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
    @foreach($productos as $producto)
    <tr></tr>
        <td><a href="{{route('productos.edit', $producto->id)}}">{{$producto->NombreArticulo}}</a></td>
        <td>{{$producto->Precio}}</td>
        <td>{{$producto->Seccion}}</td>
        <td>{{$producto->PaisOrigen}}</td>
    </tr>
    @endforeach
</table>

<a href="{{ route('productos.create') }}">
    <button type="button">Crear Producto</button>
</a>

@endsection

@section("pie")

@endsection