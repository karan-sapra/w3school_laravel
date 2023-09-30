<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use GuzzleHttp\Promise\Create;

use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    public function newuser(Request $req){
        $validatedData = $req->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password'=> 'required|string|min:8',
        ]);
        
        $validatedData['password']= Hash::make($req->input('password'));

 Users::create([
          'username' => $validatedData['username'],
            'email' => $validatedData['email'],
          'password'=> $validatedData['password'],
]);

    return redirect('/home');   
}
}