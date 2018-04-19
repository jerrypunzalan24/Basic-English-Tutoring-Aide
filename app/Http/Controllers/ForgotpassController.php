<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ForgotpassController extends Controller
{
  public function index(Request $request){
    return view("user.forgotpass");
  }
  public function change(Request $request){
    $username = trim($request->uname);
    $checkuser = \DB::table("accounts")->where('username', $username)->get();
    if(count($checkuser)!= 0){
      $code = '';
      $alphabets = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
      for($i = 0; $i<6; $i++)
        $code .= $alphabets[rand(0, strlen($alphabets)-1)];
      $hashed_code = password_hash($code, PASSWORD_DEFAULT);
      \DB::table('accounts')->where('username', $username)->update(['password' => $hashed_code]);
      return redirect('/')->with('success', "Your password code is <b>{$code}</b>");
    }
    return redirect("/forgotpass")->with('error',"User <b>{$username}</b> does not exist");
  }
}
