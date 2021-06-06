@extends('modelos.layout')

@section('content')
<div class="row text-center">
    <h2>Editar Modelo</h2>
    
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

  

    <form class="row g-3 needs-validation" action="{{route('modelos.update',$modelo->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="col-md-4">
            <label for="nombremodelo" class="form-label">Modelo</label>
            <input type="text" name="nombremodelo" class="form-control" id="nombremodelo" value="{{$modelo->nombremodelo}}"  placeholder="Nombre del modelo" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-4">
            <label for="categoria" class="form-label">Categoria</label>
            <input type="text" name="categoria" class="form-control" id="categoria" value="{{$modelo->categoria}}" placeholder="Tipo de coche" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
         
          <div class="col-md-4">
            <label for="precio" class="form-label">Precio</label>
            <input type="text" name="precio" class="form-control" id="precio" value="{{$modelo->precio}}" placeholder="Precio" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-4">
            <label for="marca" class="form-label">Marca</label>
            <select class="form-select" name="marca_id" id="marca_id" aria-label="Default select example">
              @foreach ($marcas as $marca)
              <option value="{{$marca->id}}" @if($marca->id==$modelo->marca_id) selected @endif>{{$marca->nombremarca}}</option>
              @endforeach
            </select>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-12">
            <button class="btn btn-primary" type="submit"><i class="bi bi-save"></i> Submit</button>
          </div>

    </form>

    @endsection