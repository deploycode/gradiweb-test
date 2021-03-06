@extends('layouts.main')
@section('welcome')
    <h1>Bienvenido</h1>
    <p class="lead text-muted"></p>
@stop

@section('content')
    @foreach($products as $product)
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="{{asset('uploads/'.$product->photo)}}" style="max-width:348px;width: auto; height: auto;">
            <div class="card-body">
                <h2 class="card-text" style="text-align: center">{{$product->name}}</h2>
                <p class="card-text">{{$product->description}}</p>
                <p class="card-text">PRECIO: ${{$product->price}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">Publicado: {{$product->created_at}}</small>
                    <small class="text-muted">Actualizado: {{$product->updated_at}}</small>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@stop
