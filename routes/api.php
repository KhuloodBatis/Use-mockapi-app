<?php

use App\Services\HttpMock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

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
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('v1/get-posts', function (){
//   $response =   Http::get('https://64900c891e6aa71680ca6cbf.mockapi.io/api/v1/posts');
//    return $response->json();
// });

Route::get('v1/get-posts', function (){
    $response =  HttpMock::get('https://64900c891e6aa71680ca6cbf.mockapi.io/api/v1/posts');
     return $response->json();
  });
