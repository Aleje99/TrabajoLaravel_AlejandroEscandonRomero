@extends('modelos.layout')

@section('content')
<div class="row text-center">
    <h2>Añadir Modelo</h2>
    

    @if ($errors->any())
    <div class="alert alert-danger">
        <p><strong>Whoops!</strong> There were some problems with your input.</p>
        <ul>
            @foreach ($errors as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
        
    @endif

    <form class="row g-3 needs-validation" action="{{route('modelos.store')}}"  method="POST">
        @csrf
      <div class="col-md-4">
        <label for="nombremodelo" class="form-label">Modelo</label>
        <input type="text" name="nombremodelo" class="form-control" id="nombremodelo"  placeholder="Nombre del modelo" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="categoria" class="form-label">Categoria</label>
        <input type="text" name="categoria" class="form-control" id="categoria" placeholder="Tipo de coche" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
     
      <div class="col-md-4">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" name="precio" class="form-control" id="precio" placeholder="Precio" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="marca" class="form-label">Marca</label>
        <select class="form-select" name="marca_id" id="marca_id" aria-label="Seleccione Marca">
         @foreach ($marcas as $marca)
         <option value="{{$marca->id}}">{{$marca->nombremarca}}</option>
         @endforeach
        </select>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
     
     
      <div class="col-12">
        <button class="btn btn-primary" type="submit"><i class="bi bi-save"></i> Subir</button>
      </div>
    </form>
</div>

<div class="row justify-content-center">
    <div class="col col-12">
        <a class="btn btn-primary" href="{{ route('modelos.index') }}">
            <i class="bi bi-back"></i> Atras</a>
    </div>

@endsection