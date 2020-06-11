<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function indexWeb(){
        return view("productos_index");
    }
    public function index(){
        $productos = Producto::all();
        return response()->json(["productos"=>$productos]);
    }
    public function store(Request $request){

        $this->validate($request,[
            "nombre"=>"required|string|max:80",
        ]);
        $foto = $_FILES["img_url"]["name"];
        $ruta = $_FILES["img_url"]["tmp_name"];
        $destino = "images/" . $foto;
        copy($ruta, $destino);

        $producto = new Producto();
        $producto->nombre=$request->nombre;
        $producto->precio=$request->precio;
        $producto->descripcion=$request->descripcion;
        $producto->en_stock=$request->en_stock;
        $producto->save();

        return "Guardado exitosamente";
    }
}
