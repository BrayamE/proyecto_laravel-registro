<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERSONAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, recusandae ratione? Voluptatum ducimus commodi nesciunt, eveniet voluptate nobis est pariatur facilis cupiditate exercitationem explicabo nam sit illo adipisci, itaque corporis!</p>
        <h1>Lista Personas</h1>
        @foreach($personas as $persona)
            <p>{{ $persona['nombres'] }} {{ $persona['paterno'] }} {{ $persona['materno'] }} {{ $persona['documento'] }}  </p>

        @endforeach
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombres</th>
      <th scope="col">Paterno</th>
      <th scope="col">Materno</th>
      <th scope="col">Documento</th>
      <th scope="col">Celular</th>
      <th scope="col">Foto</th>
      <th scope="col" class="text-center">Opciones</th>

    </tr>
  </thead>
  <tbody>
    @foreach($personas as $persona)
        <tr>
            <th scope="row">1</th>

            <td>{{ $persona['nombres'] }} </td>
            <td>{{ $persona['paterno'] }} </td>
            <td>{{ $persona['materno'] }} </td>
            <td>{{ $persona['documento'] }} </td>
            <td>{{ $persona['celular'] }} </td>
            <td><img style="height: 76px" src="{{ $persona['foto'] }}" alt="Foto de Persona"></td>

            <td class="" style="text-align:center;">
                <a href="{{route('mostrar-personas' , $persona['personaID'])}}" type="button" class="btn btn-outline-success">Detalles</a>
                <a href="{{route('mostrar-personas' , $persona['personaID'])}}" type="button" class="btn btn-outline-secondary">Editar</a>
                <a href="{{route('mostrar-personas' , $persona['personaID'])}}" type="button" class="btn btn-outline-danger">Eliminar</a>
            </td>
            
 
        </tr>
    @endforeach
    
    
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
@include('sweetalert::alert')
</html>