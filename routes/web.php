<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ProductoController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('main');



Route::get('/ofertas', function () {
    return view('special_offer');
})->name('offer');

Route::get('/contacto', function () {
    return view('contact');
})->name('contact');

Route::get('/iniciosesion', function () {
    return view('login');
})->name('login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Productos
Route::get('productos',[ProductoController::class,'index'])->name('producto.index');
Route::get('producto/crear',[ProductoController::class,'create'])->name('producto.create');
Route::post('producto',[ProductoController::class,'store'])->name('producto.store');
Route::get('producto/{id}',[ProductoController::class,'show'])->name('producto.show');
Route::get('producto/editar/{id}',[ProductoController::class,'edit'])->name('producto.edit');
Route::put('producto/{id}',[ProductoController::class,'update'])->name('producto.update');
Route::delete('producto/{id}',[ProductoController::class,'destroy'])->name('producto.destroy');

//footer
Route::get('/avisolegal', function (){
    return view('legal_notice');
})->name('legal_notice');
Route::get('/preguntasfrecuentes', function (){
    return view('faq');
})->name('faq');
Route::get('/terminoscondiciones', function (){
    return view('tac');
})->name('tac');
