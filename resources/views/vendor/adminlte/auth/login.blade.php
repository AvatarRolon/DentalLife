@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
<body class="hold-transition login-page">
    <div id="app">
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/home') }}"><b>Dental</b>Life</a>
            </div><!-- /.login-logo -->

        <div class="login-box-body">
        <p class="login-box-msg"> Ingresa tus datos para iniciar sesi&oacute;n </p>
        <form action="{{ url('/login') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">    

            <div class="row">
                @if (count($errors) > 0)
                    <h4>
                        <span class="label label-danger">
                           El campo usuario es requerido
                        </span>
                    </h4>
                @endif
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Usuario" name="user" autocomplete="off" />
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    
                </div>  
            </div>    

            <div class="row">
                @if (count($errors) > 0)
                    <h4>
                        <span class="label label-danger">
                            {{ $errors->first('password') }}
                        </span>
                    </h4>
                @endif
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off" />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
            </div>     
            
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember"> 
                            Recordar sesi&oacute;n
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                </div><!-- /.col -->
            </div>
        </form>

        <a href="{{ url('/password/reset') }}">Olvid&eacute; mi contrase&ntilde;a</a><br>
        <a href="{{ url('/register') }}" class="text-center">Registrar una nueva cuenta</a>

    </div><!-- /.login-box-body -->

    </div><!-- /.login-box -->
    </div>
    @include('adminlte::layouts.partials.scripts_auth')

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
