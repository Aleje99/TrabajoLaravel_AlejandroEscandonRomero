@extends('modelos.layout')

@section('content')


    <div class="row text-center">
        <h2>Modelos</h2>
        <div class="row justify-content-center">
            <!--
            <div class="col col-12">
                <a class="btn btn-primary" href="{{ route('modelos.create') }}">
                    <i class="bi bi-plus-circle-fill"></i> Nuevo Modelo</a>
            </div>
            -->
        </div>
    </div>


    

        @if ($message = Session::get('success'))
        <div class="alert alert-success mt-1 alert-dismissible fade show" role="alert">
                {{ $message }}
            </div>
        @endif
        
           
            <table class="table table-bordered mt-3">
                <thead>
                <tr>
                    <th>Nº</th>
                    <th>Modelo</th>
                    <th>Categoria</th>
                    <th>Precio *1000</th>
                    <th>Marca</th>
                    <th width="300px">Acciones</th>
            
                </tr>
                </thead>
                @foreach ($modelos as $modelo)
                <tbody>
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $modelo->nombremodelo }}</td>
                        <td>{{ $modelo->categoria }}</td>
                        <td>{{ $modelo->precio }}</td>
                        <td>{{ $modelo->marca->nombremarca }}</td>
                        <td>
                            <form action="{{ route('modelos.destroy', $modelo->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('modelos.edit', $modelo->id) }}"> <i class="bi bi-pencil"></i> Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-trash"></i> Borrar</button>
                            </form>

                        </td>
                     

                    </tr>
                </tbody>
                @endforeach
            </table>
         
  @endsection    
