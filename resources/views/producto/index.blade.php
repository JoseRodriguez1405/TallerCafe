@extends('layout.plantilla')

@section('contenido')
<div class="row">
    <div class="col-md-9">
        <a href="{{ url('producto/create') }}" class="pull-right">
            <button class="btn btn-success">Crear Producto</button>
        </a>
    </div>
</div>
<div class="row">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <th>Id</th>
                <th>Nombre Producto</th>
                <th>Lote</th>
                <th>Tipo</th>
                <th>Unidad</th>
                <th>Precio</th>
                <th>Opciones</th>
            </thead>
            <tbody>
                @foreach($producto as $pro)
                <tr>
                    <td>{{ $pro->id }}</td>
                    <td>{{ $pro->nombre }}</td>
                    <td>{{ $pro->lote }}</td>
                    <td>{{ $pro->tipo }}</td>
                    <td>{{ $pro->unidad }}</td>
                    <td>{{ $pro->precio }}</td>
                    <td>
                        <a href="{{ url('producto/'.$pro->id.'/edit') }}">
                            <button class="btn btn-primary">Actualizar</button>
                        </a>
                        <a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$pro->id}}">
                            <button type="button" class="btn btn-danger"> Eliminar</button>
                            </a>
                    </td>
                </tr>
                @include('producto.modal')
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('titulo')
Cafeteria
@endsection