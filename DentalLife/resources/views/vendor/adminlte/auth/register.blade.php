@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Register
@endsection

@section('content')

<body class="hold-transition register-page">
    <div id="app">
        <div class="register-box">
            <div class="register-logo">
                <a href="{{ url('/home') }}"><b>Dental</b>Life</a>
            </div>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="register-box-body">
                <p class="login-box-msg">{{ trans('adminlte_lang::message.registermember') }}</p>
                <form action="{{ url('/register') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="Usuario" name="user" value="{{ old('user') }}"/>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="Password" name="password"/>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="Repetir password" name="password_confirmation"/>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="CURP" name="CURP" value="{{ old('CURP') }}"/>
                            <span class="glyphicon glyphicon-barcode form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="Nombre(s)" name="nombre" value="{{ old('nombre') }}"/>
                            <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="Apellido paterno" name="apPat" value="{{ old('apPat') }}"/>
                            <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="Apellido materno" name="apMat" value="{{ old('apMat') }}"/>
                            <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="RFC (si cuenta con uno)" name="RFC" value="{{ old('RFC') }}"/>
                            <span class="glyphicon glyphicon-barcode form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="telefono" name="telefono" value="{{ old('telefono') }}"/>
                            <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group has-feedback">
                            <input type="email" class="form-control" placeholder="Correo El&eacute;ctronico" name="email" value="{{ old('email') }}"/>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group has-feedback">
                            <input type="date" class="form-control" placeholder="Fecha de nacimiento" name="fechaNac" value="{{ old('fechaNac') }}"/>
                            <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group has-feedback">
                            <label for="">Sexo</label>
                            <br>
                            <center> 
                                <label for="M" style="cursor:pointer;">
                                    <input type="radio" id="M" name="sexo" value="M"> Masculino                                
                                </label>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label for="F" style="cursor:pointer;">
                                    <input type="radio" id="F" name="sexo" value="F"> Femenino
                                </label>
                            </center>
                        </div>
                    </div>
                    <div class="row">
                        <label for="">Dirección</label>
                    </div>
                    <div class="row">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="# de casa" name="numCasa" value="{{ old('numCasa') }}"/>
                            <span class="glyphicon glyphicon-home form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="Calle" name="calle" value="{{ old('calle') }}"/>
                            <span class="glyphicon glyphicon-road form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="Colonia" name="colonia" value="{{ old('colonia') }}"/>
                            <span class="glyphicon glyphicon-screenshot form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <center><button type="submit" class="btn btn-primary btn-block btn-flat">Registrarse</button></center>
                        </div><!-- /.col -->
                    </div>
                </form>
                <br>
                <div class="row">
                    <center><a href="{{ url('/login') }}" class="text-center">Ya poseo una cuenta</a></center>
                </div>                
            </div><!-- /.form-box -->
        </div><!-- /.register-box -->
    </div>

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>

</body>

@endsection
