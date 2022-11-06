@extends('base')
@section('contenido')
<div>
    <h3>Listado de clientes 
    <a href='/cliente/create'>
        <button type="button" class="btn btn-dark">Registrar</button>
    </a>
    </h3>
</div>
<table class="table table-dark table-striped " style="text-align:center">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Nombre Cliente</th>
            <th scope="col">Correo</th>
            <th scope="col">Opciones</th>
        </thead>
        <tbody>
            @foreach ($clientes as $cli)
            <tr>
                <td>{{$cli->id}}</td>
                <td>{{$cli->nombre}}</td>
                <td>{{$cli->correo}}</td>
                <td>
                <div class="row align-items-start">
                    <div class="col">
                        <a href='/cliente/{{$cli->id}}/edit' class="btn btn-outline-light" href="#" role="button">Editar</a>
                    </div>
                    <div class="col">
                    <form action='/cliente/{{$cli->id}}' method="POST">
                        @csrf
                        @method('DELETE')
                        <button onClick="return confirm('Se eliminará el cliente ¿Estas seguro?')" class="btn btn-outline-danger" type="submit">
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