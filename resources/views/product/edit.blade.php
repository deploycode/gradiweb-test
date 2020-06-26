@extends('layouts.admin')
@section('content')
    <div class="jumbotron">
        {!! Form::model($product,['route' => ['productos.update', $product->id],'method'=>'PUT', 'files'=> true]) !!}

            <div class="form-group">
                {!! Form::label('Nombre: ')!!}
                {!! Form::text('name', null , ['class' => 'form-control', 'placeholder'=>'Favor ingrese un nombre para el producto'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('Descripción: ')!!}
                {!!Form::textarea('description', null , ['id'=>'txa', 'class'=>'form-control', 'placeholder'=>'Favor ingrese la descripción del producto'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('Imagen: ')!!}
                <br>
                {!! Form::file('photo')!!}
            </div>
            <div class="form-group">
                {!! Form::label('Precio: ')!!}
                {!! Form::text('price', null , ['class' => 'form-control', 'placeholder'=>'Favor ingrese el precio del producto'])!!}
            </div>
            <div class="form-group">
                <br>
                {!! Form::submit('Actualizar', ['class' => 'btn btn-success'])!!}
                {!! Form::reset('Cancelar', ['class' => 'btn btn-secondary'])!!}
            </div>

        {!! Form::close() !!}
    </div>
@stop
