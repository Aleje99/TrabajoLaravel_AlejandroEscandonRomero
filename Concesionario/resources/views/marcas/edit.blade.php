@extends('marcas.layout')

@section('content')
<div class="row text-center">
    <h2>Editar Marca</h2>
    
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
        
    @endif

    <form class="row g-3 needs-validation"action="{{route('marcas.update',$marca->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="col-md-4">
            <label for="nombremarca" class="form-label">Marca</label>
            <input type="text" name="nombremarca" class="form-control" id="nombremarca" value="{{$marca->nombremarca}}"  placeholder="course Name" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>


          <div class="col-12">
            <button class="btn btn-primary" type="submit"><i class="bi bi-save"></i> Subir</button>
          </div>

    </form>

    @endsection