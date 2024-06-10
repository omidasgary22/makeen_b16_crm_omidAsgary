<?php

use App\Http\Controllers\FactorController;
use App\Http\Controllers\LabelController;
<<<<<<< HEAD
use App\Http\Controllers\MailController;
=======
use App\Http\Controllers\MediaController;
>>>>>>> 8a75532e2b5e4731f0f64291fbcca5caa6c95c25
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ResellerController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WarrentyController;
<<<<<<< HEAD
use App\Jobs\NewProduct;
use App\Mail\FactorMail;
=======
use App\Models\media;
>>>>>>> 8a75532e2b5e4731f0f64291fbcca5caa6c95c25
use App\Models\Message;
use App\Models\Task;
use App\Models\Tiket;
use App\Models\User;
use App\Models\warrenty;
use Illuminate\Http\Request;
use Illuminate\Mail\Events\MessageSent;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\New_;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('test', function () {
})->name('test');

Route::post('login', [UserController::class,'login'])->name('login ');


Route::group(['prefix' => 'users', 'as'=>'users.'],function(){
    Route::get('index', [UserController::class, 'index'])->name('index');
    Route::get('single/{id}', [UserController::class, 'single'])->name('single');
    Route::post('store', [UserController::class, 'store'])->name('store');
    Route::delete('delete/{id}', [UserController::class, 'delete'])->name('delete');
    Route::put('edit/{id}', [UserController::class, 'edit'])->name('edit');
});

Route::group(['prefix' => 'products', 'as'=>'products.'],function(){
    Route::get('index/{id?}', [ProductController::class, 'index'])->name('index');
    Route::post('store', [ProductController::class, 'store'])->name('store');
    Route::put('edit/{id}', [ProductController::class, 'edit'])->name('edit');
    Route::delete('delete/{id}', [ProductController::class, 'delete'])->name('delete');
});

Route::group(['prefix' => 'orders', 'as'=>'orders.'],function(){
    Route::get('index/{id?}', [OrderController::class, 'index'])->name('index');
    Route::post('store', [OrderController::class, 'store'])->name('store');
    Route::put('edit/{id}', [OrderController::class, 'edit'])->name('edit');
    Route::delete('delete/{id}', [OrderController::class, 'delete'])->name('delete');
});

Route::group(['prefix' => 'factors', 'as'=>'factors.'],function(){
    Route::get('index/{id?}', [factorController::class, 'index'])->name('index');
    Route::post('store', [factorController::class, 'store'])->name('store');
    Route::put('edit/{id}', [factorController::class, 'edit'])->name('edit');
    Route::delete('delete/{id}', [factorController::class, 'delete'])->name('delete');
});

Route::group(['prefix' => 'team', 'as'=>'team.'],function(){
    Route::get('index/{id?}', [teamController::class, 'index'])->name('index');
    Route::post('store', [teamController::class, 'store'])->name('store');
    Route::put('edit/{id}', [teamController::class, 'edit'])->name('edit');
    Route::delete('delete/{id}', [teamController::class, 'delete'])->name('delete');
});

Route::group(['prefix' => 'resellers', 'as'=>'resellers.'],function(){
    Route::get('index/{id?}', [resellerController::class, 'index'])->name('index');
    Route::post('store', [resellerController::class, 'store'])->name('store');
    Route::put('edit/{id}', [resellerController::class, 'edit'])->name('edit');
    Route::delete('delete/{id}', [resellerController::class, 'delete'])->name('delete');
});

Route::group(['prefix'=> 'tikets','as'=>'tikets.'],function(){
    Route::get('index/{id?}', [tiketController::class,'index'])->name('index');
    Route::post('store', [tiketController::class,'store'])->name('store');
    Route::put('edit/{id?}', [tiketController::class,'edit'])->name('edit');
    Route::delete('delete/{id?}', [tiketController::class,'delete'])->name('delete');
});

Route::group(['prefix'=> 'messages', 'as'=>'message.'],function(){
    Route::get('index/{id?}',[messageController::class,'index'])->name('index');
    Route::post('store',[messageController::class,'store'])->name('store');
    Route::put('edit/{id?}', [messageController::class,'edit'])->name('edit');
    Route::delete('delete/{id?}', [messageController::class,'delete'])->name('delete');

});

Route::group(['prefix'=> 'tasks', 'as'=>'tasks.'],function(){
    Route::get('index/{id?}',[taskController::class,'index'])->name('index');
    Route::post('store',[taskController::class,'store'])->name('store');
    Route::put('edit/{id?}', [taskController::class,'edit'])->name('edit');
    Route::delete('delete/{id?}', [taskController::class,'delete'])->name('delete');

});

Route::group(['prefix'=> 'notes', 'as'=>'notes.'],function(){
    Route::get('index/{id?}',[noteController::class,'index'])->name('index');
    Route::post('store',[noteController::class,'store'])->name('store');
    Route::put('edit/{id?}', [noteController::class,'edit'])->name('edit');
    Route::delete('delete/{id?}', [noteController::class,'delete'])->name('delete');

});

Route::group(['prefix'=> 'warrentys', 'as'=>'warrentys.'],function(){
    Route::get('index/{id?}',[warrentyController::class,'index'])->name('index');
    Route::post('store',[warrentyController::class,'store'])->name('store');
    Route::put('edit/{id?}', [warrentyController::class,'edit'])->name('edit');
    Route::delete('delete/{id?}', [warrentyController::class,'delete'])->name('delete');

});

Route::group(['prefix'=> 'labels', 'as'=>'labels.'],function(){
    Route::get('index/{id?}',[labelController::class,'index'])->name('index');
    Route::post('store',[labelController::class,'store'])->name('store');
    Route::put('edit/{id?}', [labelController::class,'edit'])->name('edit');
    Route::delete('delete/{id?}', [labelController::class,'delete'])->name('delete');
    //Route::post('teamlabel',[LabelController::class,'storeteamlabel'])->name('teamlabel');


});

Route::group(['prefix'=> 'Medias', 'as'=>'Medias.'],function(){
    Route::get('index/{id?}',[MediaController::class,'index'])->name('index');
    Route::post('store',[MediaController::class,'store'])->name('store');
    Route::put('edit/{id?}', [MediaController::class,'edit'])->name('edit');
    Route::delete('delete/{id?}', [MediaController::class,'delete'])->name('delete');

});



