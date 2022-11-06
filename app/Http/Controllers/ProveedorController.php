<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedore;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedore::all();
        return view('proveedor/index')->with('proveedores',$proveedores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedor/alta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevoproveedor=new Proveedore;
        $nuevoproveedor->nombre=$request->input('nombre');
        $nuevoproveedor->correo=$request->input('correo');
        $nuevoproveedor->save();
        return redirect('/proveedor');
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
    public function edit($proveedor)
    {
        $proveedoreditar=Proveedore::findorfail($proveedor);
        return view('proveedor/edicion',['proveedores'=>$proveedoreditar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $proveedor)
    {
        
        $nuevoproveedor=Proveedore::findorfail($proveedor);
        $nuevoproveedor->nombre=$request->input('nombre');
        $nuevoproveedor->correo=$request->input('correo');
        $nuevoproveedor->save();
        return redirect('/proveedor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($proveedor)
    {
        Proveedore::destroy($proveedor);
        return redirect('/proveedor');
    }
}
