<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;

use App\Models\Categoria;

use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    public function index(Request $request){

      
        $productos=Producto::when($request->name_product,function($q) use ($request){
            $q->where('NombreProducto','LIKE','%'.$request->name_product.'%');
      })->get();

        return view('productos.index',compact('productos'));

    }

    public function create(){

        $categorias = Categoria::all();

        return view('productos.create',compact('categorias'));


    }

    public function store(Request $request){

        $datos =  $request->except('_token');

        if($request->hasFile('imagen')){

        $datos['imagen'] = $request->file('imagen')->store('imagen','public');

        }
          Producto::insert($datos);

          return redirect()->route('producto.index');
    }

    public function show($id){

        $producto = Producto::find($id)->where('id',$id)->first();

        return view('productos.show',compact('producto'));


    }

    public function edit($id){

        $producto = Producto::find($id)->where('id',$id)->first();

        $categorias = Categoria::all();

        return view('productos.edit',compact('producto','categorias'));


    }

    public function update(Request $request,$id){

        $datos = $request->except(['_token','_method']);

        if($request->hasFile('imagen')){

            $producto = Producto::findOrFail($id);

            Storage::delete('public/'.$producto->imagen);

            $datos['imagen'] = $request->file('imagen')->store('imagen','public');

            }


        Producto::find($id)->where('id','=', $id)->update($datos);

      


        return redirect()->route('producto.show',$id);



    }

    public function destroy($id){

        Producto::find($id)->where('id',$id)->delete();

        return redirect()->route('producto.index');
    }


    
}
