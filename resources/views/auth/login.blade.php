@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('correo') ? 'has-error' : '' }}">
                            <label for="correo" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="correo" type="email" class="form-control" name="correo" value="{{ old('correo') }}"  autofocus>
                                {!! $errors->first('correo').'<span class="help-block"></span>' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('contraseña') ? 'has-error' : '' }}">
                            <label for="contraseña" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input id="contraseña" type="password" class="form-control" name="contraseña" >
                                {!! $errors->first('contraseña').'<span class="help-block"></span>' !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
