@extends("layouts.plantilla")

@section("cabecera")
    <h1>Galeria</h1>

@endsection


@section("infoGeneral")
    <h1>Informacion</h1>
    @if(count($alumnos))
        <table width="25%" border="1">
        @foreach ($alumnos as $persona)
            <tr>
                <td>
                    {{$persona}}
                </td>
            </tr>
            
        @endforeach
        </table>
        @else
            {{"Sin alumnos"}}
    @endif

@endsection

@section("foot")
    <p>foot</p>

@endsection