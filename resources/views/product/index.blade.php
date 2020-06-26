@extends('layouts.admin')
@section('content')
    <br>
        <a class="btn btn-success" href="{!!URL::to('/productos/create')!!}">
            <span data-feather="home"></span>
            Agregar <span class="sr-only">(current)</span>
        </a>
    <br>
    <br>

    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DESCRIPCIÓN</th>
            <th>FOTO</th>
            <th>PRECIO</th>
            <th>OPERACIONES</th>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->photo}}</td>
                <td>{{$product->price}}</td>
                <td>

                    {!!Form::open(['route'=>['productos.destroy',$product->id], 'method'=>'DELETE'])!!}
                    <div class="form-group">
                        <a href="{{ route('productos.show', $product->id) }}">
                            <i class="btn btn-info">Ver</i>
                        </a>
                        <a href="{{ route('productos.edit', $product->id) }}">
                            <i class="btn btn-info glyphicon glyphicon-pencil">Editar</i>
                        </a>
                        {!! Form::button('<span class="glyphicon glyphicon-trash">Eliminar</span>', ['type' => 'submit', 'class'=>'btn btn-danger']) !!}
                    </div>
                    {!!Form::close()!!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop
