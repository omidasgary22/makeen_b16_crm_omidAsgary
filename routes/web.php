<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//ثبت نام کاربر
//users routs
Route::get('/users/create', function () {
    return view('users.create');
});
//ویرایش کاربر
//edite users
Route::get('/users/edite/{id}', function ($id) {
    $user = DB::table('users')->where('id', $id)->first();
    return view('users.edite' , ['user' => $user]);
    return redirect('/users/index');
});


Route::get('/users/index', [UserController::class, 'index']);
//users post routes
Route::post('/users/create', function (Request $request) {

    DB::table('users')->insert([
        "first_name" => $request->first_name,
        "last_name" => $request->last_name,
        "phone_number" => $request->phone_number,
        "email" => $request->email,
        "Country" => $request->Country,
        "gender" => $request->gender,
        "Address" => $request->Address,
    ]);

    return redirect('/users/index');
});

Route::post('/users/edite/{id}', function (Request $request, $id) {

   $users= DB::table('users')->where('id', $id)->update([
        "first_name" => $request->first_name,
        "last_name" => $request->last_name,
        "phone_number" => $request->phone_number,
        "email" => $request->email,
        "Country" => $request->Country,
        "gender" => $request->gender,
        "Address" => $request->Address,
    ]);
    return Redirect('/users/index');
});

//users delete

    Route::delete('/users/delete/{id}', function($id){
    DB::table('users')->where('id', $id)->delete();
return redirect('/users/index');

    });
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//مربوط به products

//create products

Route::get('/products/create', function(){
    return view('products.create');
});
//edite products

Route::get('/products/edite/{id}', function($id){
    $products = DB::table('products')->where('id', $id)->first();
    return view('products.edite',['product'=> $products]);
});
//index products

Route::get('/products/index', function(){

    $products = DB::table('products')->get();

    return view('products.index',["products"=> $products]);
});

//route post products

Route::post('/products/create', function (Request $request){

    DB::table('products')->insert([
        "name"=> $request->name,
        "model"=> $request->model,
        "ram"=> $request->ram,
        "graphics"=> $request->graphics,
        "memory"=> $request->memory,
        "price"=> $request->price,
        "description"=> $request->description,
    ]);

    return redirect('/users/index');

});
//edite products

Route::post('/products/edite/{id}', function(Request $request,$id){

    DB::table('products')->where('id', $id)->update([
        "name"=> $request->name,
        "model"=> $request->model,
        "ram"=> $request->ram,
        "graphics"=> $request->graphics,
        "memory"=> $request->memory,
        "price"=> $request->price,
        "description"=> $request->description,
    ]);
    return redirect('/products/index');

});

//products delete route
Route::delete('/products/delete/{id}',function($id){
    DB::table('products')->where('id',$id)->delete();
    return redirect('/products/index');

});
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//مربوط به orders

//orders route
//create

Route::get('/orders/create', function(){
return view('orders.create');
});

//edite
Route::get('/orders/edite{id}', function($id){
    $orders = DB::table('orders')->where('id',$id)->first();
    return view('orders.edite',['orders'=>$orders]);
 });

 //index

 Route::get('/orders/index', function(){
   $orders = DB::table('orders')->get();

    return view('orders.index', ["order"=> $orders]);
 });

 //route post orders



Route::post('/orders/create', function( Request $request){

    DB::table('orders')->insert([
        "name"=> $request->name,
        "phone_number"=> $request->phone_number,
        "Address"=> $request->Address,
        "products"=> $request->products,
        "number"=> $request->number,
        "price"=> $request->price,
        "description"=> $request->description,
    ]);
    return Redirect('/orders/index');

});

//edite
Route::post('/orders/edite/{id}', function(Request $request,$id){
    DB::table('orders')->where('id', $id)->update([
        "name"=>$request->name,
        "phone_number"=>$request->phone_number,
        "Address"=>$request->Address,
        "products"=>$request->products,
        "number"=>$request->number,
        "price"=>$request->price,
        "description"=>$request->description,
    ]);
    return Redirect('/orders/index');
 });

 //orders delete route
 Route::delete('/orders/delete/{id}', function($id){


    DB::table('orders')->where('id', $id)->delete();
    return Redirect('/orders/index');
 });
