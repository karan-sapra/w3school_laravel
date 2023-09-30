<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
class LoginController extends Controller
{
    public function loginuser(Request $request)
{     

    if (Session::has('username')) {
        $username=session('username');
        
        return(view('index',compact('username')));
    }
    else{
     $email=$request->input('email');  
    $password=$request->input('password');
    // echo "<br>";
      $user=DB::table('w3_users')->where('email',$email)->first();
        //    echo $user->password;
       if($user){
        if (Hash::check($password, $user->password)) {
            
            // You can store the user's information in the session if needed
            $username=$user->username;
    
                // Set user data in the session 
                Session::put('user_id', $email);
                Session::put('username', $username);
                $cookie_name = "user";
                $cookie_value = $email;
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
                        
            // return redirect()->route('home')->with('message',$message); 
        return (view('index',compact('username')));
        // return redirect('index')->with('username',$username);
        }
        else{
            echo "invalid password" ;
        }
    }
    else{
        echo "no such user";
    }
      }
    }  
    
    public function logout(){
        Session::flush();
       return redirect('/'); 
    }






}    