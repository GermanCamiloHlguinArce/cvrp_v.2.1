<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
    <table class="table table-bordered mx-4 my-4">
    <thead>
<tr>
<th>id</th>
<th>NombreProducto</th>
<th>cantidad</th>
<th>estado</th>
<th>descripcion</th>
<th>valor</th>
<th>imagen</th>
<th>disponible</th>
<th>categoria</th>

</tr>
    </thead>
    <tbody>

<tr>
    <td>{{$producto->id}}</td>
<td>{{$producto->NombreProducto}}</td>
<td>{{$producto->cantidad}}</td>
<td>{{$producto->estado}}</td>
<td>{{$producto->descripcion}}</td>
<td>{{$producto->valor}}</td>
<td><img width="200" height="200" src="{{asset('storage').'/'. $producto->imagen}}" alt="{{$producto->NombreProducto}}"></td>
<td>{{$producto->disponible}}</td>
<td>{{$producto->categoria->NombreCategoria}}</td>
</tr>


</tbody> 
    
    </table>

    <a class="btn btn-info mt-4 mx-4" href="{{route('producto.index')}}">Volver</a>
</body>
</html>