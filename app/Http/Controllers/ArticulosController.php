<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;
use App\Models\Proveedore;
class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos=articulo::all();
        return view('articulo/index',['articulos'=>$articulos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores=proveedore::all();
        return view('articulo/alta',['proveedores'=>$proveedores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevoarticulo=new Articulo;
        $nuevoarticulo->nombre=$request->input('nombre');
        $nuevoarticulo->precio=$request->input('precio');
        $nuevoarticulo->proveedor_id=$request->proveedor_id;
        $nuevoarticulo->save();
        return redirect('/articulo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedor=Proveedore::all();
        $articulo=Articulo::findorfail($id);
        return view('articulo/edicion',['proveedores'=>$proveedor, 'articulos'=>$articulo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $articulo)
    {
        $nuevoarticulo=Articulo::findorfail($articulo);
        $nuevoarticulo->nombre=$request->input('nombre');
        $nuevoarticulo->precio=$request->input('precio');
        $nuevoarticulo->proveedor_id=$request->input('proveedor_id');
        $nuevoarticulo->save();
        return redirect('/articulo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($articulo)
    {
        Articulo::destroy($articulo);
        return redirect('/articulo');
    }
}
