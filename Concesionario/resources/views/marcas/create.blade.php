@extends('marcas.layout')

@section('content')
<div class="row text-center">
    <h2>Añadir Marca</h2>
    

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

    <form class="row g-3 needs-validation" action="{{route('marcas.store')}}"  method="POST">
        @csrf
      <div class="col-md-4">
        <label for="nombremarca" class="form-label">Marca</label>
        <input type="text" name="nombremarca" class="form-control" id="nombremarca"  placeholder="Nombre de la marca" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
     
     
      <div class="col-12">
        <button class="btn btn-primary" type="submit"><i class="bi bi-save"></i> Bubir</button>
      </div>
    </form>
</div>

<div class="row justify-content-center">
    <div class="col col-12">
        <a class="btn btn-primary" href="{{ route('marcas.index') }}">
            <i class="bi bi-back"></i> Atras</a>
    </div>

@endsection