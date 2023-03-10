@extends('adminlte::page')

@section('title', 'EWAP Panel administrador')

@section('content_header')
    <h1>Editar Tag</h1>
@stop

@section('content')
    <p>Bienvenido al panel de administracion de EWAP </p>
    <div class="card">

        @if (session('info'))
            <div class="alert alert-success">
                <strong>
                    {{ session('info') }}
                </strong>
            </div>
        @endif

        <div class="card-body">
            {!! Form::model($tag, ['route' => ['admin.tags.update', $tag], 'method' => 'put']) !!}

            @include('admin.tags.partials.form')

            {!! Form::submit('Actualiza etiqueta', ['class' => 'btn btn-warning']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
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
