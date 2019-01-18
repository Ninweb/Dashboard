@extends('layouts.main')

@section('content')
  <div id="main">
    <form method="POST">
      <div class="login-background">
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-md-6 align-middle inside">
              <p class="title">Ninweb - Sistema administrativo</p>
              <label>Correo electrónico</label> <br>
              <input type="email" class="fields"/> <br>
              <label>Contraseña</label> <br>
              <input type="password" class="fields"/> <br>
              <input type="submit" value="Ingresar" class="btn btn-primary login-button"/>
            </div>

            <div class="col-md-6 logo align-middle inside">
              <img src="../../images/logo-nin.png">
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection