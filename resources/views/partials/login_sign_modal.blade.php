<div id="modal-login" class="modal fade" tabindex="-1" role="dialog"
     aria-labelledby="LargeModalForm" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="row" style="margin-right: -4em;">
                <div class="col-1 col-md-1 line-vertial-modal" >
                    <img src="{{asset('img/icons/logo.png')}}" alt="logo">
                </div>
                <div class="col-10 col-md-10">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <h2>Iniciar Sesión</h2>
                            <form action="{{route('login')}}"  method="post"><!--class="needs-validation py-2" novalidate-->
                                <!--Evitar que la pagina expire y nos lance error-->
                                {{csrf_field()}}
                                <!-- Agregamos $errors pos i tiene error se ponga de color rojo-->
                                <div class="form-group {{ $errors->has('email') ? 'has-error' :'' }}">
                                    <label for="email-login">E-mail</label>
                                    <input id="email-login" type="email"
                                           class="form-control"
                                           placeholder="ejemplo@ejemplo.com" required>
                                    <!--para lanzar error-->
                                    {!! $errors ->first('email','<span class="help-block">:message</span>')!!}
                                </div>
                                <!-- Agregamos $errors pos i tiene error se ponga de color rojo-->
                                <div class="form-group {{$errors->has('password')?'has-error':''}}">
                                    <label for="pass-login">Contraseña</label>
                                    <input id="pass-login" type="password"
                                           class="form-control"
                                           required>
                                    <!--para lanzar error-->
                                    {!! $errors ->first('password','<span class="help-block">:message</span>')!!}
                                </div>
                                <div class="row">
                                    <div class="col-1 col-md-3"></div>
                                    <div class="col-12 col-md-9">
                                        <button type="submit" class="btn btn-pink">Iniciar Sesión
                                            {{ __('Login') }}
                                        </button>
                                        <!--agregue-->
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
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


<!--endmoallogin-->

<!--modalSignup-->

<div id="modal-sign" class="modal fade" tabindex="-1" role="form"
     aria-labelledby="LargeModalForm" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="row " style="margin-right: -4em;">
                <div class="col-1 col-md-1 line-vertial-modal">
                    <img src="{{asset('img/icons/logo.png')}}"  style="width: 3.5em;" alt="logo">
                </div>
                <div class="col-10 col-md-10">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h2>Registro</h2>
                        <form  method="POST" action="{{ route('register') }}"><!--class="needs-validation" novalidate>-->
                            @csrf
                            <div class="form-row py-2">
                                <div class="col-6 col-md-6">
                                    <lable for="name">Nombres</lable>
                                    <input id="name" name="name" type="text" required
                                    class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
                                    <div class="invalid-feedback">
                                        Nombre requerido. El nombre solo debe contener letras
                                    </div>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-6 col-md-6">
                                    <lable for="last">Apellidos</lable>
                                    <input id="last"  name="last" type="text" required
                                           class="form-control {{$errors->has('last')?'has-error':''}}">
                                    <div class="invalid-feedback">
                                        Apellidos requeridos. Los apellidos solo debe contener letras
                                    </div>
                                </div>
                            </div>
                            <div class="form-row py-2">
                                <div class="col-12">
                                    <label for="email">Correo</label>
                                    <input id="email" name="email"  type="email"
                                    class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" required>
                                    <div class="invalid-feedback">
                                        El correo es obligatorio
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>

                            <div class="form-row py-2">
                                <div class="col-6 col-md-6">
                                    <lable for="password">Constraseña</lable>
                                    <input id="password" name="password" type="password" required
                                           class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}">
                                    <div class="invalid-feedback">
                                        Contraseña requerida
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-6 col-md-6">
                                    <lable for="password-confirm">Confirmar contraseña</lable>
                                    <input id="passconf-confirm"  name="password-confirm" type="password" required
                                           class="form-control">
                                    <div class="invalid-feedback">
                                        Favor de confirmar la contraseña
                                    </div>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-1 col-md-5"></div>
                                <div class="col-12 col-md-6">
                                    <button type="submit" class="btn btn-pink">
                                        {{ __('Register') }}
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

