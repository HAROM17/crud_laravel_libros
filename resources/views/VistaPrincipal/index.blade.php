@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="text-white">VISTA  PRINCIPAL</h2>
            </div>
            <div>
                <a href="{{route('Autores.index')}}" class="btn btn-primary">VER AUTORES</a>
                <a href="{{route('Libros.index')}}" class="btn btn-primary">VER LIBROS</a>
            </div>
        </div>
    </div>
@endsection
