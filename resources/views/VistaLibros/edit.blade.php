@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div><h2>Editar libro</h2></div>
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

        <form action="{{route('Libros.update', $Libro)}}" method="POST">
            @csrf
            <!-- especificamos que se esta enviando valores del fomulario por HTTP -->
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Titulo:</strong>
                        <input type="text" name="titulo" class="form-control" placeholder="Titulo" value="{{$Libro->titulo}}">
                    </div>

                    <div class="form-group">
                        <strong>Descripción:</strong>
                        <textarea type="text" name="descripcion" class="form-control" placeholder="Descripcion"> {{$Libro->descripcion}} </textarea>
                    </div>

                    <div class="form-group">
                        <strong>Número de paginas:</strong>
                        <input type="text" name="numPagina" class="form-control" placeholder="Numero De Pagina" value="{{$Libro->numPagina}}">
                    </div>

                    <div class="form-group">
                        <strong>Estado:</strong>
                        <select name="estado" class="form-select">
                            <option value="">Elige estado</option>
                            <option value="Activo" @selected("Activo" == $Libro->estado)>Activo</option>
                            <option value="Inactivo" @selected("Inactivo" == $Libro->estado)>Inactivo</option>
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
