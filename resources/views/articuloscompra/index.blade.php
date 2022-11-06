@extends('base')
@section('contenido')
<div>
    <h3>Articulo-Compra 
    <a href='/articuloscompra/create'>
        <button type="button" class="btn btn-dark">Registrar</button>
    </a>
    </h3>
</div>
<table class="table table-dark table-striped " style="text-align:center">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Id Articulo</th>
            <th scope="col">Id Compra</th>
            <th scope="col">Opciones</th>
        </thead>
        <tbody>
            @foreach ($articuloscompra as $art)
            <tr>
                <td>{{$art->id}}</td>
                <td>{{$art->articulo_id}}</td>
                <td>{{$art->compra_id}}</td>
                <td>
                <div class="row align-items-start">
                   
                
                    <div class="col">
                    <form action='/articuloscompra/{{$art->id}}' method="POST">
                        @csrf
                        @method('DELETE')
                        <button onClick="return confirm('Se eliminará el registro ¿Estas seguro?')" class="btn btn-outline-danger" type="submit">
                            Borrar
                        </button>
                    </form>
                </div>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>


@endsection