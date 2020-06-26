<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Signin Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    {!!Html::style('assets/dist/css/bootstrap.css')!!}

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    {!!Html::style('css/signin.css')!!}

</head>
<body class="text-center">
{!! Form::open(['route' => 'login.store','method'=>'POST', 'files'=> true , 'class'=>'form-signin']) !!}
    <img class="mb-4" src="{{asset('assets/brand/bootstrap-solid.svg')}}" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>

    <div class="form-group">
        {!! Form::label('Email: ' , '' , ['class' => 'sr-only'])!!}
        {!! Form::email('email', null , ['class' => 'form-control', 'placeholder'=>'Favor ingrese correo' ,'required',' autofocus'])!!}
        {!!Form::label('Password: ', '' , ['class' => 'sr-only'])!!}
        {!!Form::password('password', ['id'=>'txa', 'class'=>'form-control', 'placeholder'=>'Favor ingrese su clave'])!!}
    </div>
    <div class="form-group">
        <br>
        {!! Form::submit('Iniciar Sesión', ['class' => 'btn btn-lg btn-primary btn-block'])!!}
    </div>

{!! Form::close() !!}
</body>
</html>
