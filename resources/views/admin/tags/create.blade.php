@extends('adminlte::page')

@section('title', 'EWAP Panel administrador')

@section('content_header')
    <h1>Crear tag</h1>
@stop

@section('content')
    <p>Bienvenido al panel de administracion de EWAP </p>
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.tags.store']) !!}
            
            @include('admin.tags.partials.form')

            {!! Form::submit('Crear etiqueta', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

@endsection
