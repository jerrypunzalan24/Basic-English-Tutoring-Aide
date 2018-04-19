<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index(Request $request){
    if($request->session()->has('login')){
      return view('dashboard.index');
    }
    return redirect('/');
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
  public function editaccount(Request $request, $id){
    if($request->session()->has('login')){
      if($request->session()->get('role')){
        $result = \DB::table('accounts')->where('id',$id)->first();
        return view('dashboard.');
      }
    }
  }
  public function deleteaccount(Request $request, $id){

  }
}
