<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;


class UsuarioController extends Controller
{
    //
    public function detail()
    {
        $detalles=User::all();
        return view('roles.detalles',compact('detalles'));
    }

    public function edit($documento)
    {
        $ediciones=User::find($documento);
        return (view('roles.edit',compact('ediciones')));

    }
}
