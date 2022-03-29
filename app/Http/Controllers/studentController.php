<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\student;

class studentController extends Controller
{
    // C    R   U    D ....



    public function index(){
        // code .....

        $data = student :: get();     // select * from users where 1

        return view('student.index',['data' => $data]);
    }


#############################################################################################################



   public function Create(){
       return view('student.create');
   }


#############################################################################################################

   public function Store(Request $request){
       // code ......

       $data = $this->validate($request,[
          "name"   => "required|min:3",
          "email"  => "required|email|unique:users",
          "password" => ["required",Password::min(6)->letters()]
       ]);


       $data['password'] = bcrypt($data['password']);

      $op =   student :: create($data);

      if($op){
          $message = 'Raw Inserted';
      }else{
          $message = 'Error Try Again';
      }


    // session()->put('Message2',"test Message 2 ");    // $_SESSION['Message'] = $message;

    session()->flash('Message',$message);

    return redirect(url('/Student/'));

   }


#############################################################################################################


  public function edit($id){

       //   $data = student :: where('id',$id)->get();    // dd($data[0]->name);
        $data = student  :: find($id);  // dd($data->name);

     return view('student.edit',['data' => $data]);
  }


#############################################################################################################


  public function update (Request $request,$id){

     // code ......

      $data = $this->validate($request,[
          "name" => "required",
          "email" => "required|email"
      ]);


       $op = student :: where('id',$id)->update($data);

       if($op){
          $message = "Raw Updated";
       }else{
           $message = "Error Try Again";
       }


       session()->flash('Message',$message);

    return redirect(url('/Student/'));

  }

#############################################################################################################



   public function delete($id){
       // code ...
   // delete from users where id = 1

   $op = student :: where('id',$id)->delete();


   if($op){
     $message = 'Raw Removed';
   }else{
      $message = 'Error Try Again';
   }


   session()->flash('Message',$message);

    return redirect(url('/Student/'));



   }

#############################################################################################################

public function login(){
    return view('student.login');
}

#############################################################################################################

public function doLogin(Request $request){

      // code ....

      $data = $this->validate($request,[
        "email"  => "required|email",
        "password" => ["required",Password::min(6)->letters()]
     ]);


     if(auth()->attempt($data)){

        return  redirect(url('/Student/'));
     }else{
         session()->flash('Message','Error IN yOUR Cred Try Again');
         return  redirect(url('/Login/'));
     }


}

#############################################################################################################
public function logOut(){
    // code ....

       auth()->logout();
       return  redirect(url('/Login/'));

}


}
