@extends('base')
@section('contenido')
<div>
    <h3>Listado de proveedores    
    <a href='/proveedor/create'>
        <button type="button" class="btn btn-dark">Registrar</button>
    </a>
    </h3>
</div>
<table class="table table-dark table-striped " style="text-align:center">
        <thead >
            <th scope="col">ID</th>
            <th scope="col">Nombre proveedor</th>
            <th scope="col">Correo</th>
            <th scope="col">Opciones</th>
        </thead>
        <tbody>
            @foreach ($proveedores as $prov)
            <tr>
                <td>{{$prov->id}}</td>
                <td>{{$prov->nombre}}</td>
                <td>{{$prov->correo}}</td>
                <td>
                <div class="row align-items-start">
                    <div class="col">
                        <a href='/proveedor/{{$prov->id}}/edit' class="btn btn-outline-light" href="#" role="button">Editar</a>
                    </div>
                    <div class="col">
                    <form action='/proveedor/{{$prov->id}}' method="POST">
                        @csrf
                        @method('DELETE')
                        <button onClick="return confirm('Se borrará el proveedor ¿Estas seguro?')" class="btn btn-outline-danger" type="submit">
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