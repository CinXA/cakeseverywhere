@extends('templates.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">

                <div class="card-body" style="padding: 0;">
                    <div class="row">

                        <div class="col-1 col-md-1 line-vertial-modal" >
                            <img src="{{asset('img/icons/logo.png')}}" alt="logo">
                        </div>
                        <div class="col-10 col-md-10">
                            <h2 class="text-center">Registrarse</h2>
                            <form method="POST" class="p-5" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-6 col-md-6">
                                    <label for="name">Nombre</label>

                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                </div>

                                    <div class="col-6 col-md-6">


                                    <label for="last">Apellidos</label>


                                        <input id="last" type="text" class="form-control{{ $errors->has('last') ? ' is-invalid' : '' }}" name="last" value="{{ old('last') }}" required autofocus>

                                        @if ($errors->has('last'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('last') }}</strong>
                                            </span>
                                        @endif

                                </div>
                                </div>

                                <div class="form-group">

                                    <label for="email">E-mail</label>

                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                </div>

                                <div class="form-group row">
                                    <div class="col-6 col-md-6">
                                    <label for="password" >Constraseña</label>

                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-6 col-md-6">
                                    <label for="password-confirm">Confirmar Contraseña</label>

                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group">

                                    <label for="tel_fijo">Telefono fijo</label>

                                    <input id="tel_fijo" type="tel_fijo" class="form-control{{ $errors->has('tel_fijo') ? ' is-invalid' : '' }}" name="tel_fijo" value="{{ old('tel_fijo') }}" required>

                                    @if ($errors->has('tel_fijo'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('tel_fijo') }}</strong>
                                            </span>
                                    @endif
                                </div>
                                <div class="form-group">

                                    <label for="tel_celular">Telefono celular</label>

                                    <input id="tel_celular" type="tel_fijo" class="form-control{{ $errors->has('tel_celular') ? ' is-invalid' : '' }}" name="tel_celular" value="{{ old('tel_celular') }}" required>

                                    @if ($errors->has('tel_fijo'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('tel_celular') }}</strong>
                                            </span>
                                    @endif
                                </div>




                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-pink">
                                            Registrarse
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
