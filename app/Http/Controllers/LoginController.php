<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{

  public function index(){
    return view('index');
  }
  public function auth(Request $request){
    if(!$request->session()->has('login')){
      if($request->has('submit')){
        $username = $request->uname;
        $password = $request->pass;
        $checkuser = \DB::table('accounts')->where('username',$username)->first();
        if(count($checkuser) != 0){
          if(password_verify($password, $checkuser->password)){
            $request->session()->put('username', $checkuser->username);
            $request->session()->put('firstname', $checkuser->fname);
            $request->session()->put('lastname', $checkuser->lname);
            $request->session()->put('role', $checkuser->admin);
            $request->session()->put('about', $checkuser->about);
            $request->session()->put("image",$checkuser->display_picture);
            $request->session()->put("login",true);
            return redirect()->intended('dashboard');
          }
        }

      }
      return redirect('/')->with('username', $request->uname)
      ->with('error',"Incorrect username and password");
    }
    return redirect('/dashboard');
  }
}
