<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
Use Carbon\Carbon;
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
    return view('welcome');
});

//Route::resource('/post','PostController::class');

use App\Http\Controllers\PostController;


Route::group(['middleware'=>'web'],function(){
    Route::resource('/post', PostController::class);

});

Route::get('/dates',function(){
   $date = new DateTime('+1 week');
   echo $date->format('m-d-y');
   echo"<br>";
   echo Carbon::now()->addDays(5)->diffForHumans();
});

Route::get('/getname',function(){
   $user=User::find(1);
   echo $user->name;

});

Route::get('/setname',function(){
    $user=User::find(1);
   $user->name='gopal';
   $user->save();

});
