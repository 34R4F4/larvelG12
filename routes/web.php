<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

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



 Route::get('Message/{id}/{name?}',function ($id,$name = null){
     echo 'Name :  '.$name.' && id = '.$id;
 })->where(['id' => '[0-9]+' , 'name' => '[a-zA-Z]+']);



//  Route::get('User/Create',function(){
//      return view('create');
//  });


// Route::view('User/Create','create');


//  Route::post('User/Store',function(){
//      echo 'Data Received';
//  });

Route::get('UserMessage',[userController::class,'Message']);
Route::get('User/Create',[userController::class,'create']);
Route::post('User/Store',[userController::class,'store']);



/*
get
post
put
patch
delete
resource
view
any
*/
