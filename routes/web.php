<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;

// Route::get('/', function () {
//     $posts = [];
//     if(auth()->check()){
//         $posts=auth()->user->usersPosts()->latest()->get();
//     }
//     return view('post', ['posts'=> $posts]);
// });

Route::post('/post',[PostController::class,'post']);



Route::get('/post', function () {
    return view('post');
});


Route::get('/login',[LoginController::class,'login_page']);
Route::get('/register',[LoginController::class,'register_page']);
Route::post('/register' ,[LoginController::class,'register']);
Route::post('/login' ,[LoginController::class,'login']);
Route::get('/logout' ,[LoginController::class,'logout']);

Route::post('/create_post',[PostController::class,'create_post']);
Route::get('/lists' ,[PostController::class,'lists']);




  Route::get('/edit_post/{id}',[PostController::class,'ShowEditScreen']);
  Route::put('/edit_post/{id}',[PostController::class,'UpdatePost']);
 Route::get('/deleteblog/{id}',[PostController::class,'deleteblog']);


 Route::get('/',[PostController::class,'WelcomePosts']);


//  route nai milexaina ta...uta login vanera khulxa eta create post ruka login jo haixa kya


