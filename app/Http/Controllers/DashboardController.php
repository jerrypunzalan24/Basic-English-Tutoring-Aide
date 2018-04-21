<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index(Request $request){
    if($request->session()->has('login')){
      if($request->session()->get('role')){
        $contents = \DB::select("SELECT * FROM pages");
        return view('dashboard.index',['contents'=>$contents]);
      }
      return view("dashboard.index");
    }
    return redirect('/');
  }
  public function updatecontent(Request $request){
    if($request->has('submitOne')){
      \DB::table('pages')->where('id',1)->update(['description' => $request->contentOne]);
    }
    else if($request->has('submitTwo')){
      \DB::table('pages')->where('id',2)->update(['description'=>$request->contentOne]);
    }
    return redirect('/dashboard');
  }
  public function gameslist(Request $request){
    if($request->session()->has('login')){
      return view("dashboard.gameslist");
    }
    return redirect('/dashboard');
  }
  public function lessons(Request $request){
    if($request->session()->has('login')){
      $results = \DB::select("SELECT * FROM lessons");
      return view("dashboard.lessons",['results'=>$results]);
    }
    return redirect('/dashboard');
  }
  public function documentation(Request $request){
    if($request->session()->has('login')){
      return view("dashboard.documentation");
    }
    return redirect('/dashboard');
  }
  public function accounts(Request $request){
    if($request->session()->has('login')){
      $results = \DB::select("SELECT * FROM accounts");
      if($request->session()->get('role'))
        return view('dashboard.admin.accounts_admin',['results' => $results]);
    }
  }
}
