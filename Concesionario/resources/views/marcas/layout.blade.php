<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
</head>

<body>
<!--Marcas-->
<div class="container py-3">
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
    <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{ route('marcas.index') }}" class="nav-link active" aria-current="page">Marcas</a></li>
            <li class="nav-item"><a href="{{ route('modelos.index') }}" class="nav-link">Modelos</a></li>
            <li class="nav-item"><a href="{{ route('marcas.index') }}" class="nav-link">Añadir Marca</a></li>
        </ul>
    </div>
</div>
    <div class="container">
        @yield('content')
    </div>

</body>

</html>
