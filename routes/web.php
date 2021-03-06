<?php

use App\Http\Controllers\studentController;
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
Route::get('User/Display',[userController::class,'UserData']);



//  Route::get('test',function(){
//     echo 'test message';
//  });


##################################################################################################
# Students Routes ....
Route::get('Student/',[studentController::class,'index']);
Route::get('Student/Create',[studentController::class,'Create']);
Route::post('Student/Store',[studentController::class,'Store']);
Route::get('Student/Remove/{id}',[studentController::class,'delete']);
Route::get('Student/Edit/{id}',[studentController::class,'edit']);
Route::post('Student/Update/{id}',[studentController::class,'update']);

# Auth .....
Route::get('/Login',[studentController::class,'login']);
Route::post('/DoLogin',[studentController::class,'doLogin']);
Route::get('/Student/logOut',[studentController::class,'logOut']);




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
