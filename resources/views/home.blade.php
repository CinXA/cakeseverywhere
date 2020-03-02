@extends('templates.layout')

@section('content')
<div class="container-fluid p-5">
    <div class="row justify-content-center" style="margin-bottom: 20%">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        <div>
                            {{$direcciones_sucursale->direcciones_sucursales}}
                        </div>
                    @endif

                    Iniciaste Sesión
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
