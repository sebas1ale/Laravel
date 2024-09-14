@extends('layouts.plantilla')

@section("cabecera")

EDITAR REGISTRO

@endsection


@section("contenido")

{!! html()->form('POST', url('/productos/' . $producto->id))->open() !!}
{!! csrf_field() !!}
{!! html()->hidden('_method', 'PUT') !!}

<table>
    <tr>
        <td>Nombre:</td>
        <td>
            {!! html()->text('NombreArticulo', $producto->NombreArticulo) !!}
        </td>
    </tr>
    <tr>
        <td>Seccion:</td>
        <td>
            {!! html()->text('Seccion', $producto->Seccion) !!}
        </td>
    </tr>
    <tr>
        <td>Precio:</td>
        <td>
            {!! html()->text('Precio', $producto->Precio) !!}
        </td>
    </tr>
    <tr>
        <td>Fecha:</td>
        <td>
            {!! html()->text('Fecha', $producto->Fecha) !!}
        </td>
    </tr>
    <tr>
        <td>Pais de Origen:</td>
        <td>
            {!! html()->text('PaisOrigen', $producto->PaisOrigen) !!}
        </td>
    </tr>
    <tr>
        <td>
            {!! html()->submit('Actualizar') !!}
        </td>
        <td>
            {!! html()->reset('Valores Originales') !!}
        </td>
    </tr>
</table>
{!! html()->form()->close() !!}

{!! html()->form('POST', url('/productos/' . $producto->id))->open() !!}
{!! csrf_field() !!}
{!! html()->hidden('_method', 'DELETE') !!}
{!! html()->submit('Eliminar Registro') !!}
{!! html()->form()->close() !!}

@endsection

@section("pie")

@endsection