<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
    public function index(){
    	return view('index');
    }
    public function auth(Request $request){
    	if($request->has('submit')){
    	$username = $request->uname;
    	$password = $request->pass;
    	error_log($username);
    }
    return redirect('/')->with('username', $request->uname)
    ->with('error',true);
    }
}
