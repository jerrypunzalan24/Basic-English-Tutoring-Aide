<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index(Request $request){
    if($request->session()->get('role')){
      $contents = \DB::select("SELECT * FROM pages");
      return view('dashboard.index',['contents'=>$contents]);
    }
    return view("dashboard.index");
  }
  public function updatecontent(Request $request){
    if($request->has('submitOne')){
      \DB::table('pages')->where('id',1)->update(['description' => $request->contentOne]);
    }
    else if($request->has('submitTwo')){
      \DB::table('pages')->where('id',2)->update(['description'=>$request->contentTwo]);
    }
    return redirect('/dashboard');
  }
  public function gameslist(Request $request){
    return view("dashboard.gameslist");
  }
  public function lessons(Request $request){
    $results = \DB::select("SELECT * FROM lessons ORDER BY lesson_no ASC");
    return view("dashboard.lessons",['results'=>$results]);
  }
  public function documentation(Request $request){
    return view("dashboard.documentation");
  }
  public function accounts(Request $request){
    $userid = $request->session()->get('id');
    $results = \DB::select("SELECT * FROM accounts WHERE id != {$userid} ORDER BY id DESC ");
    return view('dashboard.admin.accounts_admin',['results' => $results]);
  }
}
