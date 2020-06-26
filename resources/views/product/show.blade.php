@extends('layouts.admin')
@section('content')
    <table class="table table-striped col-6">
        <thead>
            <th>CAMPO</th>
            <th>VALOR</th>
        </thead>
        <tbody>
            <tr>
                <td>ID</td>
                <td>{{ $product->id }}</td>
            </tr>
            <tr>
                <td>NOMBRE</td>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <td>DESCRIPCIÓN</td>
                <td>{{ $product->description }}</td>
            </tr>
            <tr>
                <td>FOTO</td>
                <td><img src="{{asset('uploads/'.$product->photo)}}" class="img img-responsive" width="200px;"></td>
            </tr>
            <tr>
                <td>PRECIO</td>
                <td>{{ $product->price }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    {!!Form::open(['route'=>['productos.destroy',$product->id], 'method'=>'DELETE'])!!}
                    <div class="form-group">
                        <a href="{{ route('productos.edit', $product->id) }}">
                            <i class="btn btn-info glyphicon glyphicon-pencil">Editar</i>
                        </a>
                        {!! Form::button('<span class="glyphicon glyphicon-trash">Eliminar</span>', ['type' => 'submit', 'class'=>'btn btn-danger']) !!}
                    </div>
                    {!!Form::close()!!}
                </td>
            </tr>

        </tbody>
    </table>
@stop
