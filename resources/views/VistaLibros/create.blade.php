@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div><h2>Registrar libro</h2></div>
            <div>
                <a href="{{route('Libros.index')}}" class="btn btn-primary">Volver</a>
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

        <form action="{{route('Libros.store')}}" method="POST">
            <!-- crea un toquen de seguridad al enviar datos desde el formulario -->
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Titulo:</strong>
                        <input type="text" name="titulo" class="form-control" placeholder="Titulo">
                    </div>

                    <div class="form-group">
                        <strong>Descripción:</strong>
                        <textarea type="text" name="descripcion" class="form-control" placeholder="Descripcion"></textarea>
                    </div>

                    <div class="form-group">
                        <strong>Número de paginas:</strong>
                        <input type="text" name="numPagina" class="form-control" placeholder="Numero de Paginas">
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
