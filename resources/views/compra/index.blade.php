@extends('base')
@section('contenido')
<div>
    <h3>Listado de Compras 
    <a href='/compra/create'>
        <button type="button" class="btn btn-dark">Registrar</button>
    </a>

    <a href='/articuloscompra/'>
        <button type="button" class="btn btn-dark">Carrito</button>
    </a>
    </h3>
</div>
<table class="table table-dark table-striped " style="text-align:center">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Cliente</th>
            <th scope="col">Fecha</th>
            
            <th scope="col">Total</th>
            <th scope="col">Opciones</th>
        </thead>
        <tbody>
            @foreach ($compras as $comp)
            <tr>
                <td>{{$comp->id}}</td>
                <td>{{$comp->clientes->nombre}}</td>
                <td>{{$comp->fecha}}</td>
                
                <td>${{$comp->total}}</td>
                <td>
                <div class="row align-items-start">
                    <div class="col">
                        <a href='/compra/{{$comp->id}}/edit' class="btn btn-outline-light" href="#" role="button">Editar</a>
                    </div>
                    <div class="col">
                    <form action='/compra/{{$comp->id}}' method="POST">
                        @csrf
                        @method('DELETE')
                        <button onClick="return confirm('Se eliminará la compra ¿Estas seguro?')" class="btn btn-outline-danger" type="submit">
                            Borrar
                        </button>
                    </form>
                    </div>
                </div>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>


@endsection