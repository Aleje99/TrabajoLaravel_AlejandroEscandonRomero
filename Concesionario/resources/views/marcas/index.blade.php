@extends('marcas.layout')

@section('content')


    <div class="row text-center">
        <h2>Marcas</h2>
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
                    <th>Marca</th>
                    <th width="300px">Acciones</th>
            
                </tr>
                </thead>
                @foreach ($marcas as $marca)
                <tbody>
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $marca->nombremarca }}</td>
                        <td>
                            <form action="{{ route('marcas.destroy', $marca->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('marcas.edit', $marca->id) }}"> <i class="bi bi-pencil"></i> Editar</a>
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
