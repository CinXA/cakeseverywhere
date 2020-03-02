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
                            <h2 class="text-center">Registrar nueva sucursal</h2>

                            <form method="POST" action="{{ route('registrarSucursal') }}">
                                <!--un ataque de sitio cruzado para proteger (csrf) enviar token que verifica que es valido-->
                                @csrf
                                @if(count($errors)>0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach

                                </div>
                                @endif

                                <div class="form-group ">

                                    <label for="nombre_sucursal">Nombre de la sucursal</label>
                                    <!-- old nos sirve para mantener lo escrito-->
                                    <input id="nombre_sucursal" type="text"
                                           class="form-control{{ $errors->has('nombre_sucursal') ? ' is-invalid' : '' }}"
                                           name="nombre_sucursal" value="{{ old('nombre_sucursal') }}"
                                           required autofocus>

                                    @if ($errors->has('nombre_sucursal'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nombre_sucursal') }}</strong>
                                            </span>
                                    @endif
                                </div>
                                <div class="form-group ">

                                    <label for="nombre_sucursal">Nombre del propietario de la sucursal</label>
                                    <!-- old nos sirve para mantener lo escrito-->
                                    <input id="propietario" type="text"
                                           class="form-control{{ $errors->has('propietario') ? ' is-invalid' : '' }}"
                                           name="propietario" value="{{ old('propietario') }}"
                                           required autofocus>

                                    @if ($errors->has('propietario'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('propietario') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="form-group ">

                                    <label for="fecha_registro">Fecha de Registro</label>
                                    <!-- old nos sirve para mantener lo escrito-->
                                    <input id="fecha_registro" type="date"
                                           class="form-control{{ $errors->has('nombre_sucursal') ? ' is-invalid' : '' }}"
                                           name="fecha_registro" value="{{ old('fecha_registro') }}"
                                           required autofocus>

                                    @if ($errors->has('fecha_registro'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('fecha_registro') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <label >Direccion Sucursal</label>
                                <div class="form-group ">

                                        <label for="estado">Estado</label>
                                    <!-- old nos sirve para mantener lo escrito-->
                                        <input id="estado" type="text"
                                               class="form-control{{ $errors->has('estado') ? ' is-invalid' : '' }}"
                                               name="estado" value="{{ old('estado') }}"
                                               required autofocus>

                                        @if ($errors->has('estado'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('estado') }}</strong>
                                            </span>
                                        @endif
                                </div>

                                <div class="form-group ">
                                    <label for="municipio">Municipio</label>
                                        <input id="municipio" type="text" class="form-control{{ $errors->has('municipio') ? ' is-invalid' : '' }}" name="municipio" value="{{ old('municipio') }}" required autofocus>
                                        @if ($errors->has('municipio'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('municipio') }}</strong>
                                            </span>
                                        @endif
                                </div>

                                <div class="form-group ">
                                    <label for="localidad">Localidad</label>

                                        <input id="localidad" type="text" class="form-control{{ $errors->has('localidad') ? ' is-invalid' : '' }}" name="localidad" value="{{ old('localidad') }}" required>

                                        @if ($errors->has('localidad'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('localidad') }}</strong>
                                            </span>
                                        @endif
                                </div>

                                <div class="form-group ">
                                    <label for="calle">Calle</label>

                                    <input id="calle" type="text" class="form-control{{ $errors->has('calle') ? ' is-invalid' : '' }}" name="calle" value="{{ old('calle') }}" required>

                                    @if ($errors->has('calle'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('calle') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="ne">Numero Exterior</label>
                                        <input type="text" class="form-control" id="ne" name="num_ext">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="ni">No. Interior</label>
                                        <input type="text" class="form-control" id="ni" name="num_int">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="cp">Codigo Postal</label>
                                        <input type="text" class="form-control" id="cp" name="codigo_postal">
                                    </div>
                                </div>

                                <div class="form-group ">

                                    <label for="or">Otras referencias</label>
                                    <textarea class="form-control" id="or" rows="3" name="otras_referencias"></textarea>

                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="tf">Telefono fijo</label>
                                        <input type="number" class="form-control" id="tf" name="telefono_fijo">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="tc">Telefono celular</label>
                                        <input type="number" class="form-control" id="tc" name="telefono_celular">
                                    </div>
                                </div>
                                    <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-pink">
                                            Registar dirección
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
