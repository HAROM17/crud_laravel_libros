@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="text-white">CRUD: REGISTRO DE AUTORES</h2>
            </div>
            <div>
                <a href="{{route('Autores.create')}}" class="btn btn-primary">Registrar Nuevo Autor</a>
                <a href="{{route('Libros.index')}}" class="btn btn-primary">Libros</a>
                <a href="{{route('VistaPrincipal.index')}}" class="btn btn-primary">Volver</a>
            </div>
        </div>
        <div class="col-12 mt-4">
                <table class="table table-bordered text-white">
                    <tr class="text-secondary">
                        <th>Nombre</th>
                        <th>Primer Apellido</th>
                        <th>Segundo Apellido</th>
                        <th>Estado</th>
                        <th>Acción</th>
                    </tr>
                    @foreach($Autores as $Autor)
                    <tr>
                        <td>{{$Autor->nombre}}</td>
                        <td>{{$Autor->apellidoPaterno}}</td>
                        <td>{{$Autor->apellidoMaterno}}</td>
                        <td><span class="badge bg-warning fs-6">{{$Autor->estado}}</span></td>
                        <td>
                            <a href="{{route('Autores.edit', $Autor)}}" class="btn btn-warning">Editar</a>

                            <form action="{{route('Autores.destroy', $Autor)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>

                {{$Autores->Links()}}
            </div>
    </div>
@endsection
