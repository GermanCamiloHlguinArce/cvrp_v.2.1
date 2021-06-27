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
 
<form action="{{route('producto.update',$producto->id)}}" method="post" enctype="multipart/form-data">

@csrf

@method('PUT')

<label for="NombreProducto">NombreProducto</label>
<input type="text" name="NombreProducto" id="" value="{{$producto->NombreProducto}}">

<label for="cantidad">cantidad</label>
<input type="number" name="cantidad" id="" value="{{$producto->cantidad}}" >

<label for="estado">estado</label>
<input type="text" name="estado" id="" value="{{$producto->estado}}" >

<label for="descripcion">descripcion</label>
<input type="text" name="descripcion" id="" value="{{$producto->descripcion}}">

<label for="valor">valor</label>
<input type="number" name="valor" id="" value="{{$producto->valor}}" >

<label for="imagen">imagen</label>
<img src="{{asset('storage').'/'. $producto->imagen}}" alt="{{$producto->NombreProducto}}" width="200" height="200">
<input type="file" name="imagen" id=""  >

<label for="disponible">disponible</label>
<select name="disponible" id="" >
    <option value="{{$producto->disponible}}">{{$producto->disponible}}</option>
    @if($producto->disponible == "si")
    <option value="no">No</option>
    @else 
    <option value="si">Si</option>
    @endif
</select>

<label for="categoria">categoria</label>
<select name="categoria_id" id="" >
<option value="{{$producto->categoria_id}}">{{$producto->categoria->NombreCategoria}}</option>
    @foreach($categorias as $categoria)
    <option value="{{$categoria->id}}">{{$categoria->NombreCategoria}}</option>
    @endforeach
</select>

<button type="submit" class="btn btn-success">Actualizar Producto</button>

</form>
</body>
</html>