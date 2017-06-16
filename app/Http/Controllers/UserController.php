<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller{
  public function login(){
    return view('loginForm');
  }

  public function register(){
    return view('registerForm');
  }

  public function testLogin(Request $request){
    $this->validate($request, [
      'nickname' => 'required|min:2',
      'password' => 'required|min:2'
    ]);

    $user = DB::table('users')->where(['nickname' => $request->nickname, 'password' => $request->password])->get();
    if(!$user->isEmpty()){
      var_dump($user);
      $request->session()->put('user', $user);
      if($user[0]->idrole == 2){
        $request->session()->put('admin', 'admin');
      }
      return redirect('products');
    }else{
      return view('loginForm', ['error' => "user or password invalid"]);
    }
  }

  public function logout(Request $request){
    $request->session()->flush();
    return redirect('products');
  }

  public function registrar(Request $request){
    $this->validate($request, [
      'nickname' => 'required|min:2',
      'password' => 'required|min:2',
      'password2' => 'required|min:2|same:password',
      'phone' => 'required|regex:/[0-9]{9}/',
      'mail' => 'required|email|unique:users'
    ]);

    //`id`, `nickname`, `password`, `phone`, `mail`, `idrole
    $user= new \App\User();
    $user->id = null;
    $user->nickname = $request->nickname;
    $user->password = $request->password;
    $user->phone = $request->phone;
    $user->mail = $request->mail;
    $user->idrole = 1;

    $user->save();
    return redirect('products');
  }


}
