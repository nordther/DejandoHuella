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
   
  

   
    public function store(LoginRequest $request){

        
         if (Auth::attempt(['us_email' => $request['v_formUserNickEmail'], 'us_password' => $request['v_formUserPass']])) { 
            $users_id = \DB::table('users')->select('*')->where('users.us_email','=',$request['v_formUserNickEmail']);
            foreach ($users_id as $rows) {
              $dataId = $rows->us_id_datospersonales;
            }
             $userActivity =  \DB::table('sessions')->insert(['user_id' => $dataId]); 
              return Redirect::to('/Admin');
         }elseif(($request['v_formUserNickEmail'] == "") || ($request['v_formUserPass'] == "")){
          
             Session::flash('authmenssage','Llene los campos requeridos para el ingreso');           
             return Redirect::to('/');

         }else{
            $mgs = 'Sus credenciales son incorrectos correo ingresado: '.$request['v_formUserNickEmail'];
            Session::flash('authmenssage',$mgs);           
             return Redirect::to('/');
         }
         

        
    }

    public function logout(){
        Auth::logout();
        return Redirect::to('/');
    }

   
}

