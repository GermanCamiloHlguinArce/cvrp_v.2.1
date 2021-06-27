<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('category.index');
    }

    public function create(){
        return true;
    }

    public function store(Request $request){
        return true;
    }

    public function show($id){
        return true;
    }

    public function edit($id){
        return true;
    }

    public function update(Request $request,$id){
        return true;
    }

    public function destroy($id){
        return true;
    }
}
