<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CVRP - Nuevo Milenio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="themes/images/ico/logo_cvrp.ico">
</head>
<body>
<!-- Header====================================================================== -->
@include ('header/header')
<!-- Header End====================================================================== -->
<div class="container">
    <div class="row">
        <div class="my-3">
            <form action="{{route('producto.index')}}" method="get">
                @csrf
                <input class="span4" type="text" name="name_product" id="" placeholder="Escriba nombre de Producto: Chaqueta">
                <button type="submit" class="btn btn-success">Filtrar</button>
            </form>
        </div>
        <div class="my-3">
            <a class="btn btn-info" href="{{route('producto.create')}}">Crear Producto</a>
        </div>
        <table class="table table-bordered my-4 table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nombre Producto</th>
                <th>Cantidad</th>
                <th>Estado</th>
                <th>Descripción</th>
                <th>Valor</th>
                <th>Imagen</th>
                <th>Disponible</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($productos as $producto)
                <tr>
                    <th>{{$producto->id}}</th>
                    <th>{{$producto->NombreProducto}}</th>
                    <th>{{$producto->cantidad}}</th>
                    <th>{{$producto->estado}}</th>
                    <th>{{$producto->descripcion}}</th>
                    <th>{{$producto->valor}}</th>
                    <th><img width="200" height="200" src="{{asset('storage').'/'. $producto->imagen}}"
                             alt="{{$producto->NombreProducto}}"></th>
                    <th>{{$producto->disponible}}</th>
                    <th>{{$producto->categoria->NombreCategoria}}</th>

                    <th>
                        <a class="btn btn-warning my-1" href="{{route('producto.edit',$producto->id)}}">Editar</a>
                        <br>
                        <a class="btn btn-info my-1" href="{{route('producto.show',$producto->id)}}">Mostrar</a>
                        <br>
                        <form action="{{route('producto.destroy',$producto->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger my-1" type="submit">Eliminar</button>
                        </form>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- Footer ================================================================== -->
@include ('footer.footer')
<!-- END FOOTER ==========================================================================================-->
</body>
</html>
