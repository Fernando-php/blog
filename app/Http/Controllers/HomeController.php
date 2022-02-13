<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class HomeController extends Controller
{
    public function index(){
        // $articulos= Articulo::orderBy('fecha','desc')->get(); //obtener todos ordenados
        // $articulos= Articulo::all(); //obtenerlos todos
        $articulos= Articulo::orderBy('fecha','desc')->paginate(5);//paginado de 5 en 5
        return view('home',compact('articulos'));
    }
    public function crear(){
        $fecha=date("d/m/Y");
        return view('formularioNuevo',compact('fecha'));
    }
    public function modificar($id){
        $articulo = Articulo::find($id);
        return view('formularioEdit',compact('articulo'));
    }
    public function insertar(Request $request){
        $articulo = new Articulo();
        $articulo->titulo=$request->titulo;
        $articulo->fecha=date("Y/m/d");
        $articulo->contenido=$request->contenido;
        $articulo->save();
        return view('mostrar',compact('articulo'));
    }
    public function guardar(Request $request, Articulo $articulo){
        $articulo->titulo=$request->titulo;
        $articulo->fecha=date("Y/m/d");
        $articulo->contenido=$request->contenido;
        $articulo->save();
        return view('mostrar',compact('articulo'));
    }
    public function mostrar($id){
        $articulo = Articulo::find($id);
        return view('mostrar',compact('articulo'));
    }
    public function borrar($id){
        $articulo = Articulo::find($id);
        $articulo->delete();
        return redirect()->route('inicio');
    }
}
