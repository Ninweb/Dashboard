@extends('layouts.app')

@section('content')
  <div id="main">
    <div class="login-background">
      <div class="container">
        <div class="row">
          <div class="col-md-6 align-middle inside">
            <div class="panel panel-default">
              <div class="panel-heading">Ninweb - Sistema Administrativo</div>

              <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}

                  <div class="form-group {{ $errors->has('correo') ? 'has-error' : '' }}">
                    <div class="col-md-6">
                      <label for="correo" class="control-label align-justify-center">Correo electrónico</label> <br>
                      <input autofocus autocomplete="off" id="correo" type="email" class="form-control fields" name="correo" value="{{ old('correo') }}"  autofocus>
                      {!! $errors->first('correo').'<span class="help-block"></span>' !!}
                    </div>
                  </div>

                  <div class="form-group {{ $errors->has('contraseña') ? 'has-error' : '' }}">
                    <div class="col-md-6">
                      <label for="contraseña" class="control-label align-justify-center">Contraseña</label> <br>
                      <input autocomplete="off" id="contraseña" type="password" class="form-control fields" name="contraseña" >
                      {!! $errors->first('contraseña').'<span class="help-block"></span>' !!}
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-6 col-md-offset-5">
                      <button type="submit" class="btn btn-primary login-button">
                        Ingresar
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-6 logo align-middle inside">
            <img src="../../images/logo-nin.png">
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
