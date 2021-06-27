<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaymentMethod;

class PaymentMethodController extends Controller
{
    public function index()
    {
        $paymentmethods=PaymentMethod::all();
        return view('paymentmethod.index',compact('paymentmethods'));
    }
    public function create(){
        return view('paymentmethods.create');
    }
    public function store(Request $request){

        $paymentmethod=PaymentMethod::create($request->all());
        return redirect()->route('paymentmethod.index');
    }
    public function show($id){
        $paymentmethod=PaymentMethod::find($id);
        return view('paymentmethod.show',compact('paymentmethod'));
    }
    public function edit($id){
        $paymentmethod=PaymentMethod::find($id);
        return view('paymentmethod.edit',compact('paymentmethod'));
    }

    public function update(Request  $request, $id){
        $paymentmethod=PaymentMethod::find($id)->update($request->all());
        return redirect()->route('paymentmethod.index');

    }
    public function destroy($id){
        $paymentmethod=PaymentMethod::find($id)->delete();
        return redirect()->route('rol.index');
    }
}
