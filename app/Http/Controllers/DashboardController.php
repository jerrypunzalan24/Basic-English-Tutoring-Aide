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
}
