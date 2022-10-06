<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hosteldetail;


class HosteldetailController extends Controller
{
    // public function indexhosteldetail()
    // {
    //  return view("/tables");
   
    // }
 
    function show(){
        
        $data = hosteldetail::all();
         return view('tables',['details'=>$data]);
    }

    
}
