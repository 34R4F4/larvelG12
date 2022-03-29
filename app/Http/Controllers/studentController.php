<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\student;

class studentController extends Controller
{
    //

   public function Create(){
       return view('student.create');
   }


   public function Store(Request $request){
       // code ......

       $data = $this->validate($request,[
          "name"   => "required|min:3",
          "email"  => "required|email|unique:users",
          "password" => ["required",Password::min(6)->letters()]
       ]);




      $op =   student :: create($data);

      if($op){
          dd('Raw Inserted');
      }else{
          dd('Error Try Again');
      }



   }


}
