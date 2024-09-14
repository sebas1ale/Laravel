<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <style>
            .imagenCabecera{
                float: right;
                padding-right:150px;
                width:150px;
            }
            .cabecera{
                text-align: center;
                font-size: x-large;
                font-family: Tahoma, Geneva, sans-serif;
                margin-bottom: 100px;
                color: #090;
            }
            .contenido form, table{
                width: 500px;
                margin: 0 auto;
                
            }
            .pie{
                position: fixed;
                bottom: 0px;
                width: 100%;
                font-size: 0.7em;
                margin-bottom: 15px;                
            }
        </style>
        
    </head>
    <body>

        <div class="cabecera">
            @yield("cabecera")
            <img src="\images\logo.png" class="imagenCabecera"/>

        </div>

        <div class="contenido">
            @yield("contenido")
        </div>

        <div class="pie">
            @yield("pie")

            Todos los derechos reservados.
        </div>
        
    </body>
</html>
