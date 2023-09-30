<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;

class UserController extends Controller
{
    public function addinfo(Request $req){
        $validatedData = $req->validate([
            'name' => 'required|string',
            'salary' => 'required|int',
            
        ]);
        UserInfo::create([
       'name'=>$validatedData['name'],
       'salary'=>$validatedData['salary'],
        ]);
    
       return view('/index')->with('message',"data inserted");
    }

}
