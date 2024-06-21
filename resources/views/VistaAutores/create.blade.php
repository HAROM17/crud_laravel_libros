@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div><h2>Registrar Autor</h2></div>
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

        <form action="{{route('Autores.store')}}" method="POST">
            <!-- crea un toquen de seguridad al enviar datos desde el formulario -->
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                    </div>

                    <div class="form-group">
                        <strong>Primer Apellido</strong>
                        <input type="text" name="apellidoPaterno" class="form-control" placeholder="Primer Apellido"></input>
                    </div>

                    <div class="form-group">
                        <strong>Segundo Apellido</strong>
                        <input type="text" name="apellidoMaterno" class="form-control" placeholder="Segundo Apellido">
                    </div>

                    <div class="form-group">
                        <strong>Estado:</strong>
                        <select name="estado" class="form-select">
                            <option value="">Estado</option>
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>
                </div>

                <div  class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </div>
        </form>
    </div>
@endsection
