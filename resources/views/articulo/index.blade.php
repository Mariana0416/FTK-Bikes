@extends('base')
@section('contenido')
<div>
    <h3>Listado de Articulos 
    <a href='/articulo/create'>
        <button type="button" class="btn btn-dark">Registrar</button>
    </a>
    </h3>
</div>
<table class="table table-dark table-striped " style="text-align:center">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Nombre producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Proveedor</th>
            <th scope="col">Opciones</th>
        </thead>
        <tbody>
            @foreach ($articulos as $art)
            <tr>
                <td>{{$art->id}}</td>
                <td>{{$art->nombre}}</td>
                <td>${{$art->precio}}</td>
                <td>{{$art->proveedores->nombre}}</td>
                <td>
                <div class="row align-items-start">
                    <div class="col">
                        <a href='/articulo/{{$art->id}}/edit' class="btn btn-outline-light" href="#" role="button">Editar</a>
                    </div>
                    <div class="col">
                    <form action='/articulo/{{$art->id}}' method="POST">
                        @csrf
                        @method('DELETE')
                        <button onClick="return confirm('Se eliminará el artículo ¿Estas seguro?')" class="btn btn-outline-danger" type="submit">
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