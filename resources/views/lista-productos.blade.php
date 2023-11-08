<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container"> 
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <h1>Lista Productos</h1>
        @foreach($productos as $producto)
            <p>{{ $producto['producto'] }} {{ $producto['categoria'] }} </p>

        @endforeach
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Fecha Registro</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Foto</th>
                    <th scope="col" class="text-center">Opciones</th>
                </tr>

            </thead>
            <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $producto['producto'] }} </td>
                        <td>{{ $producto['descripcion'] }} </td>
                        <td>{{ $producto['categoria'] }} </td>
                        <td>{{ $producto['precio'] }} </td>
                        <td>{{ $producto['fecharegistro'] }} </td>
                        <td>{{ $producto['stock'] }} </td>
                        <td><img 
                            style="height:50px" 
                            src="{{ $producto['foto'] }}" 
                            alt="Foto de producto"> 
                        </td>
                        <td class="" style="text-align: center;">
                            <a href="{{ route('mostrar-productos', $producto['productoID']) }}" type="button" class="btn btn-outline-success">Detalles</a>
                            <a href="{{ route('mostrar-productos', $producto['productoID']) }}" type="button" class="btn btn-outline-secondary">Editar</a>
                            <a href="{{ route('mostrar-productos', $producto['productoID'])}}" type="button" class="btn btn-outline-danger">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>    

    </div>
</body>
@include('sweetalert::alert')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>