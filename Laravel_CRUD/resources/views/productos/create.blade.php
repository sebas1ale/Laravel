@extends('layouts.plantilla')

@section("cabecera")

INSERTAR REGISTROS

@endsection


@section("contenido")


{{ html()->form('POST', '/productos')->open() }}

<table>
    <tr>
        <td>Nombre: </td>
        <td>
            {{ html()->text('NombreArticulo') }}
            {{csrf_field()}}
        </td>
    </tr>
    <tr>
        <td>Seccion: </td>
        <td>
            {{ html()->text('Seccion') }}
        </td>
    </tr>
    <tr>
        <td>Precio: </td>
        <td>
            {{ html()->text('Precio') }}
        </td>
    </tr>
    <tr>
        <td>Fecha: </td>
        <td>
            {{ html()->text('Fecha') }}
        </td>
    </tr>
    <tr>
        <td>Pais de Origen: </td>
        <td>
            {{ html()->text('PaisOrigen') }}
        </td>
    </tr>
    <tr>
        <td>
            {!! html()->submit('Enviar') !!}
            <!--<input type="submit" name="enviar" value="Enviar">-->
        </td>
        <td>
            {!! html()->reset('Borrar campos') !!}
            <!--<input type="reset" name="borrar" value="Borrar">-->
        </td>
    </tr>
</table>

{{ html()->form()->close() }}
    
@endsection

@section("pie")

@endsection