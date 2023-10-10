@extends('layout.plantilla', ['page' => ('Producto'),'pageSlug' => 'dashboard'])

@section('contenido')
<h1>Productos</h1>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <h4>Actualizar Producto</h4>
@if (count($errors)>0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error) <li>{{$error}}</li>
@endforeach
</ul> </div>
@endif
    </div>
</div>
<form action="{{route('producto.update',$pro->id)}}" method="post">
    @csrf
@method('PUT')

<div class="row">
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="codigo">Codigo</label>
<input type="number" name="id" id="id" value="{{ isset($pro->id)?$pro->id:old('id') }}" class="form-control" placeholder="Digite el codigo del producto"> </div>
</div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="nombre">Nombre</label>
<input type="text" name="nombre" id="nombre" value="{{ isset($pro->nombre)?$pro->nombre:old('nombre') }}" class="form-control" placeholder="Nombre">
</div>
</div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
    <label for="nombre">Lote</label>
    <input type="text" name="lote" id="lote" value="{{ isset($pro->lote)?$pro->lote:old('lote') }}" class="form-control" placeholder="Lote">
    </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
        <label for="nombre">Tipo</label>
        <input type="text" name="tipo" id="tipo" value="{{ isset($pro->tipo)?$pro->tipo:old('tipo') }}" class="form-control" placeholder="Tipo">
        </div>
        </div>
        <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
            <div class="form-group">
            <label for="nombre">Unidad</label>
            <input type="text" name="unidad" id="unidad" value="{{ isset($pro->unidad)?$pro->unidad:old('unidad') }}" class="form-control" placeholder="Unidad">
            </div>
            </div>
            <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
                <div class="form-group">
                <label for="nombre">Precio</label>
                <input type="text" name="precio" id="precio" value="{{ isset($pro->precio)?$pro->precio:old('precio') }}" class="form-control" placeholder="Precio">
                </div>
                </div>
<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
<div class="form-group"> <br>
<button class="btn btn-info" type="submit"><span class="glyphicon glyphicon-ok"></span> Guardar</button>
<a class="btn btn-danger" href="{{ route('producto.index') }}"><span class="glyphicon glyphicon-remove"></span> Atrás</a>        </div>        </div>
    </div>
</div>
</form>

@endsection