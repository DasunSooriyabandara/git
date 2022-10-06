<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class NotificationController extends Controller
{
    public function indexnotification()
    {
     return view("/notification");
   
    }

    function addData(Request $req)
    {

        $member =new student;
        $member ->studno=$req->regno;
        $member ->name=$req->name;
        $member ->academicyr=$req->acdyr;
        $member ->phno=$req->phnno;
        $member ->email=$req->email;
        $member ->appeal=$req->notes;
        $member -> save();
    }
}
