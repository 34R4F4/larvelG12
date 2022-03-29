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


    //    $errors = [];

    //    $name     = $request->name;
    //    $email    = $request->email;
    //    $password = $request->password;

    //    # Validate name
    //     if(empty($name)){
    //         $errors['name'] = "Required";
    //     }


    //     # Validate email
    //     if(empty($email)){
    //         $errors['email'] = "Required";
    //     }


    //     # Validate password
    //     if(empty($password)){
    //         $errors['password'] = "Required";
    //     }



    //     # Check Errors

    //     if(count($errors) > 0){
    //         dd($errors);
    //     }else{
    //         echo 'Valid Data';
    //     }

   ######################################################################################################

     $data =  $this->validate($request,[
        "name"     => "required",
        "password" => "required|min:6|max:10",
        "email"    => "required|email"

      ]);
       dd($data);
        }




##########################################################################################################


public function UserData(){

   $data = ["name" => "Root" , "age" => 20 , "Level" => 3 ];

   $title = "Student Data ";


    // return view('info',["data" => $data , "title" => $title]);

    //  return view('info')->with(["data" => $data , "title" => $title]);  //   return view('info')->with('data',$data)->with('title',$title);

      return view('info',compact('data','title'));     // ['data' => $data , 'title' => $title]

}







}
