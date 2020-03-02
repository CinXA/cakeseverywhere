@extends('templates.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">

                    <div class="card-body" style="padding: 0;">
                        <div class="row">

                            <div class="col-1 col-md-1 line-vertial-modal">
                                <img src="{{asset('img/icons/logo.png')}}" alt="logo">
                            </div>

                            <div class="col-10 col-md-10">

                                <h2 class="text-center">Registrar nuevo Producto</h2>
                                <form method="POST" action="{{ route('registarProducto') }}"
                                      enctype="multipart/form-data">
                                    <!--un ataque de citio cruzado para proteger (csrf) enviar token que verifica que es valido-->
                                    @csrf

                                    {{--@include('flash::message')--}}
                                    @if(count($errors)>0)
                                        <div class="alert alert-danger">
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach

                                        </div>
                                    @endif

                                    <div class="form-group ">

                                        <label for="np">Nombre del producto</label>
                                        <!-- old nos sirve para mantener lo escrito-->
                                        <input id="np" type="text"
                                               class="form-control{{ $errors->has('np') ? ' is-invalid' : '' }}"
                                               name="nom_producto" value="{{ old('np') }}"
                                               required autofocus>

                                        @if ($errors->has('np'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('np') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group ">
                                        <label for="dp">Descripción del producto</label>
                                        <textarea id="dp" type="text"
                                                  class="form-control{{ $errors->has('dp') ? ' is-invalid' : '' }}"
                                                  name="desc_producto" rows="5" value="{{ old('dp') }}" required
                                                  autofocus></textarea>
                                        @if ($errors->has('dp'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('dp') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group ">
                                        <label for="precio">Precio del producto</label>
                                        <input id="precio" type="number"
                                               class="form-control{{ $errors->has('precio') ? ' is-invalid' : '' }}"
                                               name="precio" value="{{ old('precio') }}" placeholder="Ejemplo: 200.99"
                                               required autofocus>
                                        @if ($errors->has('precio'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('precio') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group ">

                                        <label for="categoria">Categoria</label>
                                        <!-- old nos sirve para mantener lo escrito-->
                                        <select class="custom-select" id="categoria" name="categoria">
                                            <option selected disabled>Seleccionar</option>
                                            @foreach($categorias as $categoria)
                                                <option value="{{$categoria['id']}}">{{$categoria['nombre_clasificacion']}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div>
                                        <!--<input type="file" name="imagen" id="imagen">-->
                                        <span class="dragBox dragBoxportada">
		                                <span class="text-drag-drop">
		                                    <i class="fa fa-camera fa-3x" aria-hidden="true"></i><br/>
		                                    Subir Foto
		                                </span>
		                                <input id="imagen" name="imagen" type="file"
                                           onChange="dragNdrop(event, 'img-foto')"
                                           ondrag="dragLeave(event)" ondragover="drag(event,'dragBoxportada')"
                                           ondrop="drop(event)"/>
		                                <div id="preview" class="preview"></div>
	                                    </span>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-pink">
                                                Registar producto
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
