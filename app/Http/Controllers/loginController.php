<?php

namespace DejandoHuella\Http\Controllers;

use Illuminate\Http\Request;

use DejandoHuella\Http\Requests;
use DejandoHuella\Http\Controllers\Controller;
use Redirect;
use Auth;
use Session;
use user;
use DejandoHuella\http\Requests\LoginRequest;

class loginController extends Controller
{
   
   public function load($id){
      $viewId = ['id'=>$id];
      return view('buffering.formBuffering',compact('viewId'));      
   }

   
    public function store(LoginRequest $request){

    

         if (Auth::attempt(['us_email' => $request['v_formUserNickEmail'], 'us_password' => $request['v_formUserPass']])) {  
              return Redirect::to('/LoadConfig/Admin');
         }else{
             Session::flash('authmenssage','Sus credenciales son incorrectas');           
             return Redirect::to('/');

         } 
    }

    public function logout(){
        Auth::logout();
        return Redirect::to('/');
    }

   
}

