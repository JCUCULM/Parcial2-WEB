@extends('plantilla')

@section('content')
    @csrf

    <form class="form-inline">
        <input class="form-control mr-sm-2" name="nombre" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  
    <h6>
        @if ($nombre)  
            <div class="alert alert-primary mt-3" role="alert">
                Los resultados para tu busqueda '{{$nombre}}' son:
            </div>          
        @endif
    </h6>

    <div class="row">
        <div class="col">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                </tr>

                @foreach ($produc as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->cod}}</td>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->descripcion}}</td>
                        <td>{{$item->precio}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>   
@endsection