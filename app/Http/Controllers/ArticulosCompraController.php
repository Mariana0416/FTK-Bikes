<?php

namespace App\Http\Controllers;


use App\Models\ArticulosCompra;
use App\Models\Articulo;
use App\Models\Compra;
use Illuminate\Http\Request;

class ArticulosCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulocompra=ArticulosCompra::all();
        return view('articuloscompra/index',['articuloscompra'=>$articulocompra]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articulos=Articulo::all();
        $compras=Compra::all();
        return view('articuloscompra/alta',['articulos'=>$articulos,'compras'=>$compras]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevoarticulocompra=new ArticulosCompra;
        $nuevoarticulocompra->articulo_id=$request->articulo_id;
        $nuevoarticulocompra->compra_id=$request->compra_id;
        $nuevoarticulocompra->save();
        return redirect('/articuloscompra');
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
        $articulo=Articulo::all();
        $compras=Compra::all();
        $articulocompra=ArticulosCompra::findorfail($id);
        return view('articuloscompra/edicion',['articulos'=>$articulo, 'articuloscompra'=>$articulocompra]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $articuloscompras)
    {
        $nuevoarticulocompra=ArticulosCompra::findorfail($articuloscompras);
        $nuevoarticulocompra->articulo_id=$request->input('articulo_id');
        $nuevoarticulocompra->compra_id=$request->input('compra_id');
        $nuevoarticulocompra->save();
        return redirect('/articuloscompra');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($articulocompra)
    {
        $articulocomp=ArticulosCompra::findorfail($articulocompra);
        ArticulosCompra::destroy($articulocompra);
        return redirect('articuloscompra/');
    }
}
