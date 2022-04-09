<?php

use Illuminate\Support\Facades\Route;
use \Symfony\Component\HttpFoundation\Request;
use \App\Http\Controllers\PostController;
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
    return view('layout.master');
});

Route::get('/post/create', function(){
    return view('addpost');
});

Route::post('/post/store',[PostController::class,'store']);


Route::get('/login',function(){

    $form= <<<FORM
    <form action="submitform" method="GET">
    NAME:<br>
    <input type="text" namr="name"><br>
    Email:<br>
    <input type="email" name="email"><br><br>
    <input type="submit" value=LOGIN"">
    </form>
    FORM;
 return $form;
});

Route::get('submitform',function(Request $request){

    $name = $request->name;
    $email = $request->email;

    echo $name;
    echo '<br/>';
    echo $email;
});

Route::get('/about',function(){
    return "<h1>This is about page</h1>";
});

Route::get('/contact',function(){
    return "<h1>This is contact page</h1>";
});