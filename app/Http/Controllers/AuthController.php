<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
  
    public function inicio(){
        



        return view('show-login');
    }


    public function bienvenida( Request $request){ 

       $valores=  $request->validate([  //Si no cumple   REGRESA  AL FORMULARIO ORIGINAL
                    'email'=>[ 'required',  'email'],
                     'password'=>['required'],
                     ]);
       // $valores es igual a  [ 'email'=>'hipogea@hotmail.com','password'=>'123456']
       if( !Auth::attempt($valores) ){//attempt se encarga de comparar en la tabla user los vaores inresados
          return back()->withErrors([
            'email'=>'El correo y la contraseña no coinciden',
            'password'=>'Verifica bien'
        ])->withInput(); //WithInput()  
       }                     
    
        //Auth()::user(); Devuelve un registro de la tabla Users
        //Auth()::check(); Verifica que un usuario a sido acreditado

        return view('ingresaste');
    }

    public function mi_perfil( ){ 
         if(Auth::check()){
            return view('perfil');
         }else{
            echo "NO ESTAS AUTORIZADO";
         }
       
        
     }

     public function logout(){ 
        Auth::logout();      
        return redirect('/login');
    }
}
