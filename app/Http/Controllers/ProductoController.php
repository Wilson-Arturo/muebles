<?php

namespace App\Http\Controllers;
use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all(); 
        return $this->showAll($productos);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos = new Producto();
        $producto->id_productos = $request->id_productos;
        $producto->nombre = $request->nombre;
        $producto->costo = $request->costo;
        $producto->descripcion = $request->descripcion;
        $producto->codigo_barras = $request->codigo_barras;
        $producto->stock = $request->stock;
        $producto->id_categoria = $request->id_categoria;

        $producto->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_usuario)
    {
        return Producto::finf($id_usuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_productos)
    {
   
   $producto = Producto::finOrFail($request->id_productos);
   $producto->id_productos = $request->id_productos;
   $producto->nombre = $request->nombre;
   $producto->costo = $request->costo;
   $producto->descripcion = $request->descripcion;
   $producto->codigo_barras = $request->codigo_barras;
   $producto->stock = $request->stock;
   $producto->id_categoria = $request->id_categoria;

    $producto->save();

    return $producto;
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_productos)
    {
        $producto = Producto::destroy($request->id_productos);
        return $producto;
    }
}
