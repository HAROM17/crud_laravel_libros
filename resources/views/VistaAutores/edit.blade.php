@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div><h2>Editar Autor</h2></div>
            <div>
                <a href="{{route('Autores.index')}}" class="btn btn-primary">Volver</a>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Surgio Un Error!</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('Autores.update', $Autore)}}" method="POST">
            @csrf
            <!-- especificamos que se esta enviando valores del fomulario por HTTP -->
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        <input type="text" name="nombre" class="form-control" placeholder="Titulo" value="{{$Autore->nombre}}">
                    </div>

                    <div class="form-group">
                        <strong>Primer Apellido:</strong>
                        <input type="text" name="apellidoPaterno" class="form-control" placeholder="Primer Apellido" value="{{$Autore->apellidoPaterno}}">
                    </div>

                    <div class="form-group">
                        <strong>Segundo Apellido:</strong>
                        <input type="text" name="apellidoMaterno" class="form-control" placeholder="Segundo Apellido" value="{{$Autore->apellidoMaterno}}">
                    </div>

                    <div class="form-group">
                        <strong>Estado:</strong>
                        <select name="estado" class="form-select">
                            <option value="">Elige estado</option>
                            <option value="Activo" @selected("Activo" == $Autore->estado)>Activo</option>
                            <option value="Inactivo" @selected("Inactivo" == $Autore->estado)>Inactivo</option>
                        </select>
                    </div>
                </div>

                <div  class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                    <button type="submit" class="btn btn-primary">Modificar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
