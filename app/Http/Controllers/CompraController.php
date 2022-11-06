<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
use App\Models\Cliente;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras=Compra::all();
        return view('compra/index',['compras'=>$compras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes=Cliente::all();
        return view('compra/alta',['clientes'=>$clientes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevacompra=new compra;
        $nuevacompra->cliente_id=$request->cliente_id;
        $nuevacompra->fecha=$request->input('fecha');
        $nuevacompra->total=$request->input('total');

        $nuevacompra->save();
        return redirect('/compra');
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
    public function edit($compra)
    {
        $cliente=Cliente::all();
        $compra=Compra::findorfail($compra);
        return view('compra/edicion',['clientes'=>$cliente, 'compras'=>$compra]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $compra)
    {
        $nuevacompra=Compra::findorfail($compra);
        $nuevacompra->cliente_id=$request->input('cliente_id');
        $nuevacompra->fecha=$request->input('fecha');
        $nuevacompra->total=$request->input('total');
        $nuevacompra->save();
        return redirect('/compra');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($compra)
    {
        Compra::destroy($compra);
        return redirect('/compra');
    }
}
