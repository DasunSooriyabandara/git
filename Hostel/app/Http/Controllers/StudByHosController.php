<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentbyhostel;

class StudByHosController extends Controller
{
    function showstudentsbyhostel(){
        
        $sdata = studentbyhostel::paginate(10);
          return view('studentbyhostel',['hdetails'=>$sdata]);
    }
}
