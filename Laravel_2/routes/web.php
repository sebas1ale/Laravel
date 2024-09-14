<?php

use App\Http\Controllers\myControlador;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Articulo;
use App\Models\Cliente;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [myControlador::class, 'index']);
Route::get('/crear', [myControlador::class, 'create']);
Route::get('/mostrar', [myControlador::class, 'show']);
Route::get('/articulos', [myControlador::class, 'store']);
Route::get('/contacto', [myControlador::class, 'contacto']);
Route::get('/galeria', [myControlador::class, 'galeria']);

/*
Route::resource("posts",myControlador::class);
*/

Route::get("/insertar", function(){
    DB::insert("INSERT INTO articulos (NOMBRE_ARTICULO, PRECIO, PAIS_ORIGEN, SECCION, OBSERVACIONES) VALUES(?,?,?,?,?)",["LAMPARA",15.2,"CHINA","PLASTICO","NOGANGA"]);
   });

   Route::get("/insertar1", function(){
    DB::insert("INSERT INTO articulos (NOMBRE_ARTICULO, PRECIO, PAIS_ORIGEN, SECCION, OBSERVACIONES) VALUES(?,?,?,?,?)",["NAVAJA4",168,"CHINA","CAZA","NADA"]);
   });

Route::get("/insertar2", function(){
    $articulos=new Articulo;

    $articulos->Nombre_Articulo="Pantalones";
    $articulos->Precio=18.95;
    $articulos->pais_origen="Argentina";
    $articulos->observaciones="observacion1";
    $articulos->seccion="Confeccion";

    $articulos->save();
});

Route::get("/insertar3", function(){
    Articulo::create([
        "Nombre_Articulo"=>"Impresora",
        "Precio"=>"50",
        "pais_origen"=>"Colombia",
        "observaciones"=>"Nada que decir",
        "seccion"=>"Informatica"
    ]);

});

Route::get("/actualizar", function(){
    $articulos=Articulo::find(11);

    $articulos->Nombre_Articulo="NavajaUSA";
    //$articulos->Precio=18.95;
    //$articulos->pais_origen="Argentina";
    //$articulos->observaciones="observacion1";
    //$articulos->seccion="Confeccion";

    $articulos->save();
});

Route::get("/actualizarV1", function(){
    $articulos=Articulo::where("seccion","CAZA")->update(["seccion"=>"CAMPING"]);

});

Route::get("/actualizarV2", function(){
    $articulos=Articulo::where("seccion","CAMPING")->where("pais_origen","SUIZA")->update(["precio"=>91]);

});

Route::get("/borrar1", function(){
    $articulo=Articulo::find(10);
    $articulo->delete();

});

Route::get("/leer", function(){
    $resultados=DB::select("SELECT * FROM articulos WHERE ID=?",[1]);

    if (is_array($resultados) || is_object($resultados)) {
        foreach ($resultados as $articulo) {
            // Retorna el nombre del artículo
            return $articulo->Nombre_Articulo;
        }
    } else {
        return 'No se encontraron artículos o hubo un error en la consulta.';
    }
});

Route::get("/leer2", function(){
    $articulos=Articulo::where("pais_origen","china")->orderBy("Nombre_Articulo","asc")->take(3)->get();
    return $articulos;
});

Route::get("/actualiza", function(){
    DB::update("UPDATE articulos SET SECCION='DECORACION' WHERE ID=?",[1]);

});

Route::get("/borrar", function(){
    DB::update("DELETE FROM articulos WHERE ID=?",[1]);

});

Route::get("/leer1", function(){
    $articulos=Articulo::all();
    foreach($articulos as $articulo){
        echo "Nombre: ".$articulo->Nombre_Articulo." Valor: " .$articulo->Precio ."<br>";
    }
});

Route::get("/softDelete", function(){
    Articulo::find(6)->delete();
});

//para mostrar articulos que fueron borrados o no
Route::get("/leer3", function(){

    $articulos = Articulo::withTrashed()
                ->where('id', 4)
                ->get();
    return $articulos;
});

//para mostrar articulos que solo fueron borrados
Route::get("/leer4", function(){

    $articulos = Articulo::onlyTrashed()
                ->where('id', 5)
                ->get();
    return $articulos;
});

Route::get("/leer5", function(){

    $articulos = Articulo::withTrashed()
                ->where('id', 6)
                ->restore();
    return $articulos;
});

//borrar permanente
Route::get("/hardDelete", function(){
    $articulos = Articulo::withTrashed()
                ->where('id', 7)
                ->forceDelete();
});

Route::get("/cliente/{id}/articulo", function($id){
    return Cliente::find($id)->articulo;
});

Route::get("/articulo/{id}/cliente", function($id){
    return Articulo::find($id)->cliente->Nombre;
});

Route::get("/articulos/{id}", function($id){
    
    $articulos=Cliente::find($id)->articulos->where("pais_origen","CHINA");

    foreach($articulos as $articulo){
        echo $articulo->Nombre_Articulo."<br>";
    }
});

Route::get("/cliente/{id}/perfil", function($id){
    $cliente=Cliente::find($id);
    foreach($cliente->perfils as $perfil){
        return $perfil->nombre;
    }
});

Route::get("/calificaciones/{id}", function($id){
    $cliente = Cliente::find($id);

    // Verificar si el cliente existe
    if (!$cliente) {
        return 'Cliente no encontrado.';
    }

    // Verificar si el cliente tiene calificaciones
    if ($cliente->calificaciones->isEmpty()) {
        return 'No se encontraron calificaciones para este cliente.';
    }

    // Retornar todas las calificaciones del cliente
    foreach($cliente->calificaciones as $calificacion){
        return $calificacion->calificacion;
    }
});