@extends('layouts.admin')
@section('content')
    <div class="jumbotron">
        {!! Form::open(['route' => 'productos.store','method'=>'POST', 'files'=> true]) !!}

            <div class="form-group">
                {!! Form::label('(*) Nombre: ')!!}
                {!! Form::text('name', null , ['class' => 'form-control', 'placeholder'=>'Favor ingrese un nombre para el producto','required' => 'required'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('(*) Descripción: ')!!}
                {!!Form::textarea('description', null , ['id'=>'txa', 'class'=>'form-control', 'placeholder'=>'Favor ingrese la descripción del producto','required' => 'required'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('Imagen: ')!!}
                <br>
                {!! Form::file('photo')!!}
            </div>
            <div class="form-group">
                {!! Form::label('(*) Precio: ')!!}
                {!! Form::text('price', null , ['class' => 'form-control', 'placeholder'=>'Favor ingrese el precio del producto','required' => 'required'])!!}
            </div>
            <div class="form-group">
                <br>
                {!! Form::submit('Guardar', ['class' => 'btn btn-success'])!!}
                {!! Form::reset('Cancelar', ['class' => 'btn btn-secondary'])!!}
            </div>

        {!! Form::close() !!}
    </div>
@stop
