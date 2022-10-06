<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// ----adminlogin---
// use Sentinel;
// use Illuminate\Support\Facades\Validator;
// use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
// use Cartalyst\Sentinel\Checkpoints\NotActivated;

// .........adminloginpart 2............
use App\Models\admin;

class SystemloginController extends Controller
{
    public function indexlogin()
   {
    
    return view("/login");
  
   }
// -----------admin login----------
//    public function postlogin(Request $request)
//    {
//    Sentinel::disableCheckpoints();
//     $errorMsgs=[
//         'email.required' => 'please provide email id',
//         'email.email' => 'email must be valid email ',
//         'password.required' => 'password is required ',

//     ];
//     $validator = Validator::make($request->all(),[
//         'email' => 'required|email',
//         'password' => 'required'
//     ],$errorMsgs);

//     if($validator->fails()){

//         $returnData = array(
//             'status' => 'errors',
//             'messages' => 'please review fields',
//             'error' => $validator->errors()->all()
//         );
    
//     }
//     if (Sentinel::check()){
//         return redirect(url('/tables'));
//                           }
//     else
//     {
//             $returnData = array(
//                 'status' => 'errors',
//                 'messages' => 'please review fields',
//                 'error' => ["email or password missed"],
//             );
           
//     }
//     return response()->json($returnData,500);
//     }


//     public function logout(){
//         Sentinel::logout();
//         return redirect(url('/login'));
//     }


// ...............adminlogin part 2.........................

function login(Request $req)
{

$admin = admin::where('email',$req->input('email'))->get();
   if(($admin[0]->password)==$req->input('password'))
   {
      $req->session()->put('user',$admin[0]->name);
      return redirect('/login');
   }
}











   }


