@extends('templates.layout')

@section('content')
    @if($sucursales!=null)
<h1>{{$sucursales->id}}</h1>
<p>
    {{$sucursales->propietario}}
</p>
<div class="container">
    <p class="text-justify py-5 py-md-5">
        {{$sucursales->nombre_sucursal}}
    </p>
    <p class="text-justify py-5 py-md-5">
        direcion.... Estado   ..
        {{$sucursales->direcciones_sucursales->estado}}
    </p>

</div>
    @else
    <div>
        <p>No se encuentra el dato;(((</p>
    </div>
    @endif
@endsection
