@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ Session::get('mensaje')  }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

    <a class="btn btn-success mt-2 p-2" href="{{ url('empleado/create') }}"> Registrar nuevo empleado</a>
    <br><br>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>N°</th>
                <th>Foto</th>
                <th>Nombres</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
            <tr>
                <td>{{$empleado->id}}</td>
                <!-- <td>{{$empleado->foto}}</td> -->
                <td>
                    <figure>
                        <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->foto }}"  width="100" alt="">
                    </figure>
                </td>
                <td>{{$empleado->nombre}}</td>
                <td>{{$empleado->apellidoPaterno}}</td>
                <td>{{$empleado->apellidoMaterno}}</td>
                <td>{{$empleado->correo}}</td>
                <td>
                    <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning">
                    Editar
                    </a>
                    |
                    <form action="{{ url('/empleado/'.$empleado->id) }}" class="d-inline" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input class="btn btn-danger" type="submit" onclick="return confirm('Esta Seguro de eliminar a este empleado')"
                        value="Borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{!! $empleados->links() !!}}
</div>
@endsection
