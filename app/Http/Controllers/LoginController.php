<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function login(){
        return view('login');
    }
    public function loginSubmit(Request $req){
        $u = User::where('username',$req->username)
                  ->where('password',$req->password)
                  ->first();
                
                  //a row return from db if username and password matches
                  //then check usertype of the row

        if($u['identity']==1){
            session()->put('user',$u->username);
            return "ok";
        }
        if($u['identity']==2){
            session()->put('user',$u->username);
            return "ok";
        }
        
        if($u['identity']==3){
            session()->put('user',$u->username);
            return redirect()->route('index');
        }

        if($u['identity']==4){
            session()->put('user',$u->username);
            return "ok";
        }
       
        return redirect()->route('login');

    }
    
    
    
    
    
    
    
    
    
    
    public function changepass(){
        return view('changepass');
    }
    

    public function logout(){
        session()->flush();
        return redirect()->route('login');
    }
    
}
