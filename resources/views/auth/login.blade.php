@extends('templates.layout')

@section('content')
    <div class="row justify-content-center py-4 m-5">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body" style="padding: 0;">
                 <div class="row">

                     <div class="col-1 col-md-1 line-vertial-modal" >
                         <img src="{{asset('img/icons/logo.png')}}" alt="logo">
                     </div>
                     <div class="col-10 col-md-10">

                 <h2 class="text-center"> Iniciar Sesión</h2>
                    <form method="POST"  class="p-3" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" >{{ __('E-Mail') }}</label>

                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group">
                            <label for="password" >Contraseña</label>

                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-pink">
                                    Iniciar Sesión
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Recuperar contraseña
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                     </div>
                 </div>
                </div>
            </div>
        </div>
    </div>
@endsection
