@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="text-white">CRUD: REGISTRO DE LIBROS</h2>
            </div>
            <div>
                <a href="{{route('Libros.create')}}" class="btn btn-primary">Registrar Nuevo libro</a>
                <a href="{{route('Autores.index')}}" class="btn btn-primary">Autores</a>
                <a href="{{route('VistaPrincipal.index')}}" class="btn btn-primary">Volver</a>
            </div>
        </div>
        <div class="col-12 mt-4">
                <table class="table table-bordered text-white">
                    <tr class="text-secondary">
                        <th>Libro</th>
                        <th>Descripcion</th>
                        <th>Numero de páginas</th>
                        <th>Estado</th>
                        <th>Acción</th>
                    </tr>
                    @foreach($Libros as $Libro)
                    <tr>
                        <td>{{$Libro->titulo}}</td>
                        <td>{{$Libro->descripcion}}</td>
                        <td>{{$Libro->numPagina}}</td>
                        <td><span class="badge bg-warning fs-6">{{$Libro->estado}}</span></td>
                        <td>
                            <a href="{{route('Libros.edit', $Libro)}}" class="btn btn-warning">Editar</a>

                            <form action="{{route('Libros.destroy', $Libro)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>

                {{$Libros->Links()}}
            </div>
    </div>
@endsection


