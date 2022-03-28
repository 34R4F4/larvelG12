<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //

  public function Message(){
      echo 'Welcome To Laravel Course.... ';
  }



  public function create(){

    return view('create');
  }


  public function store(Request $request){

    //   echo  $request->input('name');    $request->name    //

            // dd($request->has('age'));

            // dd($request->all());

            // dd($request->except(['_token']));
            // dd($request->only(['_token']));

            // echo $request->ip();

        //    echo  $request->url();
            //   echo $request->path();

            //  echo   $request->method();

          //  dd($request->isMethod('POST'));      // if($_SERVER['REQUEST_METHOD'] == "POST){ }     IF($request->isMethod('POST')){   }

        }



}
