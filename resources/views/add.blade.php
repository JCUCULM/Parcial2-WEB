@extends('plantilla')

@section('content')
<div class="col">
    <h3 class="text-center mb-4">Agregar Productos</h3>

    <form action="{{route('store')}}" method="POST">
        @csrf

        <div class="form-group">
            <input type="text" name="cod" id="cod" class="form-control" value="{{old('cod')}}" placeholder="Codigo del Producto" required>
        </div>

        @error('cod')
            <div class="alert alert-danger">El codigo es requerido</div>
        @enderror

        <div class="form-group">
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}" placeholder="Nombre del Producto" required>
        </div>
        
        @error('nombre')
            <div class="alert alert-danger">El nombre es requerido</div>
        @enderror

        <div class="form-group">
            <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{old('descripcion')}}" placeholder="Descripcion del Producto" required>
        </div>
            
        @error('descripcion')
            <div class="alert alert-danger">La descripcion es requerida</div>
        @enderror

        <div class="form-group">
            <input type="text" name="precio" id="precio" class="form-control" value="{{old('precio')}}" placeholder="Precio del Producto" required>
        </div>
            
        @error('precio')
            <div class="alert alert-danger">El precio es requerido</div>
        @enderror

        <button type="submit" class="btn btn-success btn-block">Registrar Producto</button>
    </form>

    @if (session('agregar'))
        <div class="alert alert-success mt-3">
            {{session('agregar')}}
        </div>                
    @endif
</div>    
@endsection